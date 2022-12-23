<div class="section section-footer">
    <div class="container">
        <div class="column one-third">
            <h3>Adress</h3>
            <span>Learn Finnish</span>
            <div>
                <span class="icon location"></span>
                <span><?php echo get_field('street', 'options'); ?></span>
            </div>
            <div>
                <span class="icon city"></span>
                <span><?php echo get_field('postal_code_city', 'options'); ?></span>
            </div>
        </div>
        <div class="column one-third">
            <h3>Contact</h3>
            <div>
                <span class="icon email"></span>
                <a href="mailto:<?php echo get_field('email', 'options'); ?>"></a><?php echo get_field('email', 'options'); ?>
            </div>
            <div>
                <span class="icon phone"></span>
                <a href="tel:<?php echo get_field('phone_number', 'options'); ?>"></a><?php echo get_field('phone_number', 'options'); ?>
            </div>
        </div>
        <div class="column one-third">
            <h3>Contact</h3>
            <?php gravity_form(3, true, false, false, '', true, 12); ?>
        </div>
    </div>
</div>
<div class="section section-socket">
    <div class="container">
        <div class="logo-container">
            <a href="<?php echo get_home_url(); ?>" title="home">
                <?php echo wp_get_attachment_image(get_field('logo_footer', 'options'), 'logo', false); ?>
            </a>
        </div>

        <div class="end">
            <div class="social-media">
                <div class="facebook">
                    <span class="icon facebook"></span>
                    <a href="<?php echo get_field('facebook', 'options'); ?>"></a>
                </div>
                <div class="instagram">
                    <span class="icon instagram"></span>
                    <a href="<?php echo get_field('instagram', 'options'); ?>"></a>
                </div>
                <div class="linkedin">
                    <span class="icon linkedin"></span>
                    <a href="<?php echo get_field('linkedin', 'options'); ?>"></a>
                </div>
            </div>
            <?php wp_nav_menu('primary') ?>
        </div
    </div>
</div>


<?php wp_footer(); ?>

</body>

</html>