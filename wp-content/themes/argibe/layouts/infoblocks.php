<section class="section-infoblocks">
    <div class="container">
        <div class="row">
            <div class="blocks">
                <?php
                    $args = array(
                        'post_type' => 'website',
                        'posts_per_page' => 3
                    );

                    $the_query = new WP_Query( $args );

                    if ( $the_query->have_posts() ) :

                        while ( $the_query->have_posts() ) : $the_query->the_post();

                            if( have_rows('websites') ):

                                while( have_rows('websites') ): the_row();

                                ?>

                                <div class="block">
                                    <img src="<?php the_sub_field('image'); ?>">
                                    <span><?php the_title(); ?></span>
                                    <p><?php the_sub_field('text01'); ?></p>
                                    <p><?php the_sub_field('text02'); ?></p>
                                    <a class="btn" href="<?php the_permalink(); ?>">Naar website</a>
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
    </div>
</section>