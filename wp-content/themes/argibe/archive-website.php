 <?php get_header(); ?>

<section class="section section-packs">
    <div class="container">
        <div class="row">
            <div class="full">
                <h2>Alle pakketen</h2>
                <p>Het verschil tussen onze pakketen</p>
            </div>
        </div>
        <div class="row">
            <?php

                while ( have_posts() ) : the_post();

                ?>
                <div class="one-half">
                    <div class="website-container">
                        <h3><?php the_title(); ?></h3>
                        <ul class="checkmark">
                            <?php

                            if( have_rows('websites') ):

                                while( have_rows('websites') ): the_row();

                                    if( have_rows('checkmark') ):

                                        while( have_rows('checkmark') ) : the_row();

                                            ?>

                                            <li><?php the_sub_field('title'); ?></li>

                                        <?php

                                        endwhile;

                                    endif;

                                endwhile;

                            endif;

                            ?>
                        </ul>
                        <a href="<?php the_permalink(); ?>">Bekijk pakket</a>
                    </div>
                </div>

                <?php

                endwhile;

            ?>
        </div>
    </div>
</section>

 <?php get_footer(); ?>
