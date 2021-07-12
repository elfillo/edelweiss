<?php get_header();?>
<div class="container">
    <div class="breadcrumbs"><?php the_breadcrumbs(['Медиа' => site_url(), 'Новости' => ''])?></div>
</div>
<section class="section">
    <div class="container">
        <h1 class="section__title">Новости</h1>
        <div class="news__list">
	        <?php while(have_posts()): the_post(); ?>
                <div class="news-card news-card_big">
                    <div class="news-card__cover"><?php the_post_thumbnail()?></div>
                    <div class="news-card__content">
                        <div class="news-card__date"><?php the_date()?></div>
                        <div class="news-card__title"><?php the_title()?></div>
                        <div class="news-card__description"><?php echo get_the_excerpt()?></div>
                        <a class="news-card__more btn btn_underline" href="<?php the_permalink()?>">Подробнее</a>
                    </div>
                </div>
		    <?php endwhile;?>
        </div>
    </div>
</section>
<?php get_footer();?>