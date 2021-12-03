<?php
/*
Template Name: Выбрать квартиру
*/
?>
<?php
$params = [
    'total_cost_from' => $_GET['total_cost_from'],
    'total_cost_to' => $_GET['total_cost_to'],
    'total_area_from' => $_GET['total_area_from'],
    'total_area_to' => $_GET['total_area_to'],
    'level' => $_GET['level'],
    'number_of_rooms' => $_GET['number_of_rooms'],
];

function queryBuilder($params)
{
    $query = [
        [
            'key' => "status",
            'compare' => '=',
            'value' => "В продаже"
        ],
    ];
    foreach ($params as $param => $value) {
        if($value === '') continue;

        /*if($param === 'total_cost_from' && $value !== ''){
            $q = [
                'key' => "total_cost",
                'compare' => '>=',
                'value' => (int)$value
            ];
            array_push($query, $q);
        }

        if($param === 'total_cost_to' && $value !== ''){
            $q = [
                'key' => "total_cost",
                'compare' => '<',
                'value' => (int)$value
            ];
            array_push($query, $q);
        }*/
    }

    return $query;
}

$queryParams = [
    'posts_per_page' => -1,
    'post_type' => 'flat',
    'orderby' => ['flat_number', 'house_number'],
    'order' => 'ASC',
    'meta_query' => queryBuilder($params)
];
$flats = new WP_Query($queryParams);
?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script>
        $( function() {
            totalAreaRangeInit();
            totalCostRangeInit();
            levelRangeInit();
            numberOfRoomsRangeInit();

            function totalAreaRangeInit(){
                var sliderRange = $( "#slider-range-total_area" );
                var labelEl = $("#total_area");
                var fromEl = $("#total_area_from");
                var toEl = $("#total_area_to");
                $(sliderRange).slider({
                    range: true,
                    min: 33.56,
                    max: 88.6,
                    values: [ 33.56, 88.6 ],
                    slide: function( event, ui ) {
                        let min = $(sliderRange).slider( "values", 0 ).toString().replace(/(\d)(?=(\d{3})+$)/g, '$1 ');
                        let max = $(sliderRange).slider( "values", 1 ).toString().replace(/(\d)(?=(\d{3})+$)/g, '$1 ');
                        $(fromEl).val($(sliderRange).slider( "values", 0 ));
                        $(toEl).val($(sliderRange).slider( "values", 1 ));
                        $(labelEl).val(`${min} - ${max}`);

                    }
                });

                let min = $(sliderRange).slider( "values", 0 ).toString().replace(/(\d)(?=(\d{3})+$)/g, '$1 ');
                let max = $(sliderRange).slider( "values", 1 ).toString().replace(/(\d)(?=(\d{3})+$)/g, '$1 ');
                $(labelEl).val(`${min} - ${max}`);
            }

            function totalCostRangeInit(){
                var sliderRange = $( "#slider-range-total_cost" );
                var labelEl = $("#total_cost");
                var fromEl = $("#total_cost_from");
                var toEl = $("#total_cost_to");
                $(sliderRange).slider({
                    range: true,
                    min: 4325884,
                    max: 9905480,
                    values: [ 4325884, 9905480 ],
                    slide: function( event, ui ) {
                        let min = $(sliderRange).slider( "values", 0 ).toString().replace(/(\d)(?=(\d{3})+$)/g, '$1 ');
                        let max = $(sliderRange).slider( "values", 1 ).toString().replace(/(\d)(?=(\d{3})+$)/g, '$1 ');
                        $(fromEl).val($(sliderRange).slider( "values", 0 ));
                        $(toEl).val($(sliderRange).slider( "values", 1 ));
                        $(labelEl).val(`${min} - ${max}`);
                    }
                });

                let min = $(sliderRange).slider( "values", 0 ).toString().replace(/(\d)(?=(\d{3})+$)/g, '$1 ');
                let max = $(sliderRange).slider( "values", 1 ).toString().replace(/(\d)(?=(\d{3})+$)/g, '$1 ');
                $(labelEl).val(`${min} - ${max}`);
            }

            function levelRangeInit(){
                var sliderRange = $( "#slider-range-level" );
                var labelEl = $("#level")
                $(sliderRange).slider({
                    range: false,
                    min: 1,
                    max: 10,
                    slide: function( event, ui ) {
                        $(labelEl).val(ui.value);
                    }
                });

                let val = $(sliderRange).slider('value');
                $(labelEl).val(val);
            }

            function numberOfRoomsRangeInit(){
                var sliderRange = $( "#slider-range-number_of_rooms" );
                var labelEl = $("#number_of_rooms")
                $(sliderRange).slider({
                    range: false,
                    min: 1,
                    max: 5,
                    slide: function( event, ui ) {
                        $(labelEl).val(ui.value);
                    }
                });

                let val = $(sliderRange).slider('value');
                $(labelEl).val(val);
            }
        } );
    </script>
<?php get_header(); ?>
    <h1>Выбрать квартиру</h1>
    <section class="section">
        <div class="container">
            <form class="choose-flat-form">
                <div class="choose-flat-form__filter">
                    <p>
                        <label for="total_cost">Общая стоимость:</label>
                        <input type="text" id="total_cost" class="value-info" readonly>
                        <input type="hidden" id="total_cost_from" name="total_cost_from">
                        <input type="hidden" id="total_cost_to" name="total_cost_to">
                    </p>
                    <div id="slider-range-total_cost"></div>
                </div>

                <div class="choose-flat-form__filter">
                    <p>
                        <label for="total_area">Площадь:</label>
                        <input type="text" id="total_area" class="value-info" readonly>
                        <input type="hidden" id="total_area_from" name="total_area_from">
                        <input type="hidden" id="total_area_to" name="total_area_to">
                    </p>
                    <div id="slider-range-total_area"></div>
                </div>

                <div class="choose-flat-form__filter">
                    <p>
                        <label for="level">Этаж:</label>
                        <input type="text" id="level" name="level" class="value-info" readonly>
                    </p>
                    <div id="slider-range-level"></div>
                </div>

                <div class="choose-flat-form__filter">
                    <p>
                        <label for="number_of_rooms">Кол-во комнат:</label>
                        <input type="text" id="number_of_rooms" name="number_of_rooms" class="value-info" readonly>
                    </p>
                    <div id="slider-range-number_of_rooms"></div>
                </div>
                <div class="choose-flat-form__submit">
                    <button class="btn btn_underline">Примернить фильтр</button>
                </div>
            </form>
        </div>
    </section>
    <section class="section" style="overflow: scroll">
        <div class="container">
            <div class="table-container">
                <table class="choose-apartment-table">
                    <thead>
                    <tr>
                        <td>Дом</td>
                        <td>Этаж</td>
                        <td>Квартира</td>
                        <td>Стоимость м2</td>
                        <td>Общая стоимость</td>
                        <td>Общая площадь</td>
                        <td>Кол-во комнат</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($flats->posts as $flat): ?>
                        <?php
                            $cost_per_sq_met = get_post_meta($flat->ID, 'cost_per_sq_met')[0];
                            $total_cost = get_post_meta($flat->ID, 'total_cost')[0];
                        ?>
                        <tr data-link="<?php echo get_permalink($flat) ?>">
                            <td><?php echo get_post_meta($flat->ID, 'house_number')[0]; ?></td>
                            <td><?php echo get_post_meta($flat->ID, 'level')[0]; ?></td>
                            <td><?php echo get_post_meta($flat->ID, 'flat_number')[0]; ?></td>
                            <td><?php echo convertPriceString($cost_per_sq_met);?> руб.</td>
                            <td><?php echo convertPriceString($total_cost);?> руб.</td>
                            <td><?php echo get_post_meta($flat->ID, 'total_area')[0]; ?> м²</td>
                            <td><?php echo get_post_meta($flat->ID, 'number_of_rooms')[0]; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
<?php get_footer() ?>