<?php
	/*
	Template Name: Выдача ключей
	*/
?>
<?php get_header(); ?>
    <div class="container">
        <div class="breadcrumbs">
					<?php the_breadcrumbs(['Клиентам' => site_url('klientam/'), get_the_title() => '']) ?>
        </div>
    </div>
	<h1>Выдача ключей</h1>
    <section class="section">
        <div class="container"><?php include "template-parts/issuing-key-list.php";?></div>
    </section>
    <section class="section">
        <div class="container"><?php include "template-parts/news-carousel.php";?></div>
    </section>
<?php get_footer()?>