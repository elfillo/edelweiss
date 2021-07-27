<?php wp_footer() ?>
<footer class="footer">
    <div class="footer__container container">
        <a href="<?php echo site_url('/') ?>" class="footer__logo logo_footer logo_sq"></a>
        <div class="footer__nav">
            <ul class="footer__nav-list">
                <?php foreach(get_menu_items('footer') as $item):?>
                    <li class="footer__nav-item <?php echo $item['is_active'] ? 'active' : ''?>">
                        <a href="<?php echo $item['url']?>"><?php echo $item['title']?></a>
                        <?php if(!empty($item['children'])):?>
                            <ul class="footer__sub-nav-list">
                                <?php foreach ($item['children'] as $child):?>
                                <li class="footer__sub-nav-item">
                                    <a href="<?php echo $child['url']?>"><?php echo $child['title']?></a>
                                </li>
                                <?php endforeach;?>
                            </ul>
                        <?php endif;?>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>
        <div class="footer-contacts">
            <div class="footer-contacts__title">Мы в соц.сетях</div>
            <ul class="footer-contacts__soc-list">
                <li>
                    <a href="https://www.instagram.com/" class="footer-contacts__soc-item soc soc_inst"></a>
                </li>
                <li>
                    <a href="https://www.facebook.com/" class="footer-contacts__soc-item soc soc_fb"></a>
                </li>
            </ul>
            <div class="footer-contacts__copyright">
                <span>ООО «Эдельвейс»</span>
                <span>© 2010 - 2020 г.</span>
            </div>
        </div>
    </div>
</footer>
</body>
</html>