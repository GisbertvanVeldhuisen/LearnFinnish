<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <?php wp_head(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Argibe - professionele website laten maken?</title>
    </head>
    <body <?php body_class(); ?>>
        <section class="section-header">
            <div class="header">
                <a class="logo" href="<?php echo home_url(); ?>">ARGIBE</a>
                <ul class="nav">
                  <?php wp_nav_menu('Primary')?>
                </ul>
                <div class="mobile-nav">
                    <svg class="ham hamRotate ham8" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
                        <path
                                class="line top"
                                d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
                        <path
                                class="line middle"
                                d="m 30,50 h 40" />
                        <path
                                class="line bottom"
                                d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
                    </svg>
                    <div class="menu-overlay">
                        <?php wp_nav_menu('Primary'); ?>
                    </div>
                </div>
                <a id="scroll2" href=".section-contact" class="btn">Offerte aanvragen</a>
            </div>
        </section>

        <?php

            $radio = get_field('header');

            if($radio == 'big'):

                get_template_part('big', 'subheader');

            elseif($radio == 'small'):

                get_template_part('small', 'subheader');

            else:

                get_template_part('small', 'subheader');

            endif;

        ?>
