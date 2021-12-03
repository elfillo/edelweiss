<?php

class SyncFlatData
{
    const FLAT_POST_TYPE = 'flat';
    const FLAT_PLAN_POST_TYPE = 'flat-plan';
    const GOOGLE_SHEET_URL = "https://script.googleusercontent.com/macros/echo?user_content_key=kV1W827quxfIdQUd2MWje_xYGv8ZYQAJSnlI0j9JQNNyz7gbSABvu3uaFo1_FTRJ2iiqtD_II6xd9Q8NtAzpnOcg2yZUbiAum5_BxDlH2jW0nuo2oDemN9CCS2h10ox_1xSncGQajx_ryfhECjZEnKzhU5JR-PebqabYHCuujXVj_UcYuilyn6glNnPMCcdehAYS5avIu51BjIWaYJ9bvHNXzcAMFie1qrdJhajmK6K4-oJrGPGYjQ&lib=M8y0NOXsohnOA2lcqHz_VNdWuohBMP6x1";
    const DATA_FILE_NAME = 'flats.json';

    /**
     * Забирает данные из таблицы и возвращет в виду json
     */
    function getJson()
    {
        $url = self::GOOGLE_SHEET_URL;

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "Accept: application/json",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

        $resp = curl_exec($curl);
        curl_close($curl);
        return $resp;
    }

    /**
     * Забирает данные json
     */
    function getSavedJson()
    {
        $fileData = file_get_contents(self::DATA_FILE_NAME);
        return $fileData;
    }

    /**
     * Сохраняет данные из таблицы в json
     * @param $data
     */
    function saveDataToFile($data)
    {
        $file = fopen(self::DATA_FILE_NAME, "w") or die("Unable to open file!");
        fwrite($file, $data);
        fclose($file);
    }

    /**
     * Отдеает массив только с теми квартирами, по которым были изменены данные с момента последнего обновления.
     * @param $savedData (данные, которые сохранены в flat.json - информация сохраненная при последнем обновлении)
     * @param $newData (данные, которые пришли из текущаей таблицы)
     * @return array
     */
    function getDiff($savedData, $newData)
    {
        $diffArray = [];
        foreach ($newData as $k => $nD) {
            if (array_values($nD) !== array_values($savedData[$k])) {
                array_push($diffArray, $nD);
            }
        }
        return $diffArray;
    }

    /**
     *   0  | № кв.             | flat_number
     *   1  | Этаж              | level
     *   2  | Стоимость м2      | cost_per_sq_met
     *   3  | Общая стоимость   | total_cost
     *   4  | Статус            | status
     *   5  | Общая площадь     | total_area
     *   6  | Количество комнат | number_of_rooms
     *   7  | Площадь балкона   | balcony_area
     *   8  | Вид планировки    | type_of_layout
     *   9  | Подъезд           | entrance_number
     *   10 | Корпус            | house_number
     */
    function createFlatRecord($flat)
    {
        $title = "кв. №" . $flat[0] . " дом " . $flat[10];
        $post_data = [
            'post_title' => $title,
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => self::FLAT_POST_TYPE
        ];
        $post_id = wp_insert_post($post_data, true);
        return $post_id;
    }

    /**
     * Сохраняет данные о квартире, которые хранятся в post_meta полях
     * @param $post_id
     * @param $flat
     */
    function updatePostMeta($post_id, $flat)
    {
        update_post_meta($post_id, 'flat_number', $flat[0]);
        update_post_meta($post_id, 'level', $flat[1]);
        update_post_meta($post_id, 'cost_per_sq_met', $flat[2]);
        update_post_meta($post_id, 'total_cost', $flat[3]);
        update_post_meta($post_id, 'status', $flat[4]);
        update_post_meta($post_id, 'total_area', $flat[5]);
        update_post_meta($post_id, 'number_of_rooms', $flat[6]);
        update_post_meta($post_id, 'balcony_area', $flat[7]);
        update_post_meta($post_id, 'type_of_layout', $flat[8]);
        update_post_meta($post_id, 'entrance_number', $flat[9]);
        update_post_meta($post_id, 'house_number', $flat[10]);
    }


    /**
     * Возвращаешь ID записи.
     * @param $flatTypeName
     * @return int|null
     */
    function getFlatPlanId($flatTypeName)
    {
        $flatType = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => self::FLAT_PLAN_POST_TYPE,
            'orderby' => 'title',
            'order' => 'ASC',
            'title' => $flatTypeName
        ));

        if (!empty($flatType) && isset($flatType->posts)) {
            return $flatType->posts[0]->ID;
        } else {
            return null;
        }
    }

    /**
     * Возвращаешь ID квартиры. Ищет по 3 полям: номер квартиры, этаж, номер дома.
     * @param $flat
     * @return int|null
     */
    function getFlatIdForUpdate($flat)
    {
        $flatRec = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => self::FLAT_POST_TYPE,
            'orderby' => 'title',
            'order' => 'ASC',
            'meta_query' => array(
                array(
                    'key' => 'flat_number',
                    'compare' => '=',
                    'value' => $flat[0]
                ),
                array(
                    'key' => 'level',
                    'compare' => '=',
                    'value' => $flat[1]
                ),
                array(
                    'key' => 'house_number',
                    'compare' => '=',
                    'value' => $flat[10]
                )
            )
        ));

        if (!empty($flatRec) && isset($flatRec->posts)) {
            return $flatRec->posts[0]->ID;
        } else {
            return null;
        }
    }

    /**
     * Удаляет все записи о квартирах. Возвращет кол-во удаленных объектов.
     * @return int
     */
    function deleteAllRecords()
    {
        $flats = get_posts(array('post_type' => self::FLAT_POST_TYPE, 'numberposts' => -1));
        $count = count($flats);

        foreach ($flats as $flat) {
            wp_delete_post($flat->ID, true);
        }

        unlink(self::DATA_FILE_NAME);

        return $count;
    }
}