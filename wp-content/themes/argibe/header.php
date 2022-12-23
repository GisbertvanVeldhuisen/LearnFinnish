<html <?php language_attributes(); ?>>
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-59WKKBK');</script>
    <!-- End Google Tag Manager -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Finnish for you</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-59WKKBK"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="section section-menu">
    <div class="container">
        <div class="column full">
            <div class="nav">
                <div class="logo-container">
                    <a href="<?php echo get_home_url(); ?>" title="home">
                        <?php echo wp_get_attachment_image(get_field('logo', 'options'), 'logo', false); ?>
                    </a>
                </div>
                <?php ?>
                <div class="main-nav">
                    <?php wp_nav_menu('primary') ?>

                    <div class="menu-item">
                        <a class="button" href="tel:<?= get_field('phone_number', 'options'); ?>">
                            <span class="icon phone"></span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="button" href="mailto:<?php echo get_field('email', 'options'); ?>">
                            <span class="icon email"></span>
                        </a>
                    </div>
                </div>
                <div class="mobile-nav">
                    <svg class="ham hamRotate ham8" viewBox="0 0 100 100" width="80"
                         onclick="this.classList.toggle('active')">
                        <path
                                class="line top"
                                d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"/>
                        <path
                                class="line middle"
                                d="m 30,50 h 40"/>
                        <path
                                class="line bottom"
                                d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"/>
                    </svg>
                </div>
                <div class="menu-overlay">
                    <?php wp_nav_menu('Primary'); ?>
                    <div class="menu-item">
                        <a class="button" href="tel:<?= get_field('phone_number', 'options'); ?>">
                            <span class="icon phone"></span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="button" href="mailto:<?php echo get_field('email', 'options'); ?>">
                            <span class="icon email"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php

/*if (is_page_template()):



endif;*/

?>