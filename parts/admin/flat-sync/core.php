<?php
class SyncFlatData
{
    const FLAT_POST_TYPE     = 'flat';
    const FLAT_PLAN_POST_TYPE = 'flat-plan';
    const GOOGLE_SHEET_URL = "https://script.googleusercontent.com/macros/echo?user_content_key=v97AeF87lN5cMT1BIBdlDfs6z0hO0dztOXrghuYmiKTXc6_f3jt-KSmlIbuiQ756OSDE3D97GUXopHiWRidOjixphI0FYFdHm5_BxDlH2jW0nuo2oDemN9CCS2h10ox_1xSncGQajx_ryfhECjZEnM0rsan2cguWQJP6aJYtjQO8GubTDAV1AFtDAuzuubATUbf42tfwOrjHWQKFyu9xZ6xuK2fj1XN2oxnfS25TKhD7ciyFlptg-w&lib=MhxYsf8IkfTbfuAzytRnasgWbLnRxtM8Q";
    const DATA_FILE_NAME = 'flats.json';

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

    function getSavedJson()
    {
        $fileData = file_get_contents(self::DATA_FILE_NAME);
        return $fileData;
    }

    function saveDataToFile($data)
    {
        $file = fopen(self::DATA_FILE_NAME, "w") or die("Unable to open file!");
        fwrite($file, $data);
        fclose($file);
    }

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
     *   0 | № кв.	                | flat_number
     *   1 | Этаж                   | level
     *   2 | Площадь квартиры	    | area_size
     *   3 | Площадь балкона кв. м	| balcony_size
     *   4 | Общая площадь, кв. м	| total_size
     *   5 | Стоимость, руб	        | amount
     *   6 | Цена за кв.м, руб	    | price_per_sq_met
     *   7 | Дом	                | house_number
     *   8 | Подъезд                | section_number	
     *   9 | Статус                 | status
     *   10 | Планировка            | flat-plan
     */
    function createFlatRecord($flat)
    {
        $title = "кв. №" . $flat[0] . " дом " . $flat[7];
        $post_data = [
            'post_title'    => $title,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_type' => self::FLAT_POST_TYPE
        ];
        $post_id = wp_insert_post($post_data, true);
        return $post_id;
    }

    function updatePostMeta($post_id, $flat)
    {
        update_post_meta($post_id, 'flat_number',      $flat[0]);
        update_post_meta($post_id, 'level',            $flat[1]);
        update_post_meta($post_id, 'area_size',        $flat[2]);
        update_post_meta($post_id, 'balcony_size',     $flat[3]);
        update_post_meta($post_id, 'total_size',       $flat[4]);
        update_post_meta($post_id, 'amount',           $flat[5]);
        update_post_meta($post_id, 'price_per_sq_met', $flat[6]);
        update_post_meta($post_id, 'house_number',     $flat[7]);
        update_post_meta($post_id, 'section_number',   $flat[8]);
        update_post_meta($post_id, 'status',           $flat[9]);
        update_post_meta($post_id, 'flat-plan',        $this->getFlatPlanId($flat[10]));
    }

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
                    'value' => $flat[7]
                )
            )
        ));

        if (!empty($flatRec) && isset($flatRec->posts)) {
            return $flatRec->posts[0]->ID;
        } else {
            return null;
        }
    }
}