<?php
	/*
	Template Name: Корпус
	*/
?>
<?php
	$relatedDocuments = new WP_Query(array(
		'posts_per_page' => -1,
		'post_type' => 'document',
		'orderby' => 'title',
		'order' => 'ASC',
		'meta_query' => array(
			array(
				'key' => 'corpus',
				'compare' => 'LIKE',
				'value' => '"' . get_the_ID() . '"'
			)
		)
	));

	$stats = get_field('stats', get_the_ID());
	$gallery = get_field('building_steps_gallery', get_the_ID());
?>
<?php get_header()?>
<section class="section section_no-padding section_no-margin corpus-about__section">
    <div class="corpus-about container">
        <div class="corpus-about__image">
            <?php the_post_thumbnail()?>
            <img src="<?php the_img_uri('temp-content/photo_1.png') ?>" alt="<?php the_title()?>">
        </div>
        <div class="corpus-about__content">
            <div class="corpus-about__sub-title">ЖК Эдельвейс</div>
            <div class="corpus-about__title"><?php the_title()?></div>
            <div class="corpus-about__description paragraph"><?php the_content()?></div>
            <ul class="corpus-about__info-stats info-stats">
                <?php foreach ($stats as $stat):?>
                <li class="info-stats__item">
                    <div class="info-stats__count"><span class="underline-text underline-text_light-blue">
                        <?php echo $stat['number-data']?>
                        </span>
                    </div>
                    <div class="info-stats__desc"><?php echo $stat['text-data']?></div>
                </li>
                <?php endforeach;?>
            </ul>
            <div class="corpus-about__buttons">
                <button class="btn btn_yellow" data-show-modal="apartment">Подобрать квартиру</button>
                <button class="btn btn_underline" data-show-modal="parking">Узнать стоитмость</button>
            </div>
        </div>
    </div>
</section>
<section class="section section_grey">
    <div class="container">
        <div class="building-gallery">
            <div class="building-gallery__gallery">
                <div class="building-gallery__title">Этапы строительства</div>
                <div class="building-gallery__list">
	                <?php foreach ($gallery as $g_item):?>
                      <div class="building-gallery__item"
                           data-show-preview="<?php echo $g_item['url']?>"
                      >
                          <img src="<?php echo $g_item['sizes']['thumbnail']?>" alt="<?php echo $g_item['alt']?>">
                      </div>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="building-gallery__preview image-border image-border_purple">
                <img src="<?php echo $gallery[0]['url']?>" alt="<?php echo $gallery[0]['alt']?>">
            </div>
        </div>
    </div>
</section>
<section class="section">
    <h2 class="section__title">Планировки квартир</h2>
    <div class="container" style="text-align:center;">
        <hr>
        IFRAME PLACE
        <hr>
    </div>
</section>
<section class="section">
	<h2 class="section__title">Документация</h2>
	<div class="container">
		<div class="document-list">
			<div class="document-list__list">
				<?php for($i = 0; $i <= 3; $i++):?>
				<?php while($relatedDocuments->have_posts()): $relatedDocuments->the_post();?>
                  <?php $document = get_field('document', get_the_ID())?>
				<div class="document-list__item">
                    <div class="document-card">
                        <div class="document-card__title"><?php the_title()?></div>
                        <div class="document-card__bottom">
                            <div class="document-card__links">
                                <a href="<?php echo $document['url']?>" target="_blank" class="document-card__show">Посмотреть</a>
                                <a download href="<?php echo $document['url']?>" class="document-card__download">Скачать</a>
                            </div>
                            <div class="document-card__icon">
                                <div class="icon icon_<?php echo getClassPrefForIconByExtension(pathinfo($document['url'])['extension'])?>"></div>
                            </div>
                        </div>
				    </div>
                </div>
                <?php endwhile; wp_reset_postdata();?>
				<?php endfor;?>
			</div>
            <?php if($relatedDocuments->post_count > 1):?>
                <div class="document-list__more btn btn_underline">Развернуть</div>
            <?php endif;?>
		</div>
	</div>
</section>
<section class="section">
	<?php include 'template-parts/bank-partners.php'?>
</section>
<section class="section">
	<?php include 'template-parts/form/consultation.php'?>
</section>
<section class="section">
	<?php include 'template-parts/news-carousel.php'?>
</section>
<?php get_footer()?>
