<?php get_header() ?>
<div class="container">
    <div class="breadcrumbs">
        <?php the_breadcrumbs(['Выбор недвижимости' => site_url('vybrat-kvartiru/'), get_the_title() => '']) ?>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="flat">
            <div class="flat__plan-img">
                <img src="<?php the_img_uri('temp-content/flat-plan.png') ?>" alt="Планировка квартиры">
            </div>
            <div class="flat-info">
                <div class="flat-info__title">
                    <span class="text"><?php echo get_post_meta($post->ID, 'number_of_rooms')[0]?> - комнатная квартира</span>
                    <span class="bookmark"><span class="add-to-favorite" data-flat-id="<?php echo get_the_ID() ?>"></span></span>

                </div>
                <div class="flat-info__sub-title">Корпус "<?php echo get_post_meta($post->ID, 'house_number')[0]?>"</div>
                <?php
                $cost_per_sq_met = get_post_meta($post->ID, 'cost_per_sq_met')[0];
                    $details = [
                        'Дом' => get_post_meta($post->ID, 'house_number')[0],
                        'Этаж' => get_post_meta($post->ID, 'level')[0],
                        'Квартира' => get_post_meta($post->ID, 'flat_number')[0],
                        'Комнат' => get_post_meta($post->ID, 'number_of_rooms')[0],
                        'Площадь' => get_post_meta($post->ID, 'total_area')[0] . " м²",
                        'Цена за м²' => convertPriceString($cost_per_sq_met) . " руб.",
                    ];
                ?>
                <div class="flat-info__details">
                    <?php foreach ($details as $label => $data): ?>
                        <div class="item">
                            <div class="label"><?php echo $label; ?></div>
                            <div class="data"><?php echo $data; ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="flat-info__price">
                    <?php $total_cost = get_post_meta($post->ID, 'total_cost')[0]; ?>
                    <div class="label">Стоимость</div>
                    <div class="data"><?php echo convertPriceString($total_cost);?> руб.</div>
                </div>
                <div class="flat-info__btn">
                    <div class="btn btn_yellow" data-show-modal="apartment">Забронировать</div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>
