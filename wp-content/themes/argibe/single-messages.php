<?php get_header(); ?>

<?php if (have_rows('messages')):

    while (have_rows('messages')): the_row(); ?>

        <?php if (get_sub_field('header')): ?>

            <section class="section section-subheader">
                <div>
                    <img id="banner" src="<?php the_sub_field('header'); ?>">
                </div>
                <a class="scroll">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg">
                </a>
            </section>

        <?php endif; ?>

    <?php endwhile; ?>

<?php endif; ?>

    <section class="section section-single_message">
        <div class="container">
            <div class="row">
                <div class="full">
                    <?php

                    if (have_rows('messages')):

                        while (have_rows('messages')): the_row();

                            ?>
                            <p class="eyebrow"><?php echo get_the_date() ?></p>

                            <h1><?php the_title(); ?></h1>
                            <p><?php the_sub_field('text02'); ?></p>


                        <?php

                        endwhile;

                    endif;

                    ?>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-recommended overview" id="destination">
        <div class="container">
            <h2>Misschien vind je dit ook leuk</h2>
            <div class="row">
                <?php
                $args = array(
                    'post_type' => 'messages',
                    'posts_per_page' => 3,
                );

                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) :

                    while ($the_query->have_posts()) : $the_query->the_post();

                        if (have_rows('messages')):

                            while (have_rows('messages')): the_row();
                                ?>
                                <div class="one-third">
                                    <a href="<?php the_permalink(); ?>" class="block">
                                        <?php if (get_sub_field('image')): ?><img
                                            src="<?php the_sub_field('image'); ?>"><?php endif; ?>
                                        <div class="entry-header">
                                            <h3><?php the_title(); ?></h3>
                                            <p><?php the_sub_field('text02'); ?></p>
                                        </div>
                                    </a>
                                </div>
                            <?php

                            endwhile;

                        endif;

                    endwhile;

                    wp_reset_postdata();

                endif;
                ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>