<script>
    let ids = JSON.parse(window.localStorage.getItem('favourite-flats')).id;
    document.cookie = `ids=${JSON.stringify(ids)}`;
</script>
<?php
$post_in = $_COOKIE['ids'];
$queryParams = [
    'posts_per_page' => -1,
    'post_type' => 'flat',
    'orderby' => ['flat_number', 'house_number'],
    'order' => 'ASC',
    'post__in' => json_decode($post_in)
];
$flats = new WP_Query($queryParams);

?>
<?php get_header(); ?>
    <div class="favorite-list container">
        <h1 class="favorite-list__title">Избранное</h1>
        <span class="favorite-list__count">Добавлено: <?php echo count($flats->posts)?></span>
    </div>

    <section class="section">
        <div class="container" style="overflow: scroll">
            <?php if(count($flats->posts)): ?>
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
                            <td>-</td>
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
                                <td>
                                    <span class="add-to-favorite active" data-flat-id="<?php echo $flat->ID ?>"></span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <form class="empty-filter-result">
                    <h3 class="empty-filter-result__title">Ничего не найдено по заданным фильтрам, попробуйте изменить запрос. </h3>
                    <div class="empty-filter-result__reset">
                        <button type="submit" class="btn btn_purple">Сбросить фильтр</button>
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </section>
<?php get_footer() ?>