<section class="section-projects">
    <div class="container">
        <div class="row">
            <div class="full">
                <h2>Afgeronde projecten</h2>
            </div>
        </div>
        <div class="row">
            <?php
                if( have_rows('project') ):

                    while( have_rows('project') ) : the_row();

                    ?>

                        <div class="one-third project check-vp full-visible" data-vp-add-class="fadeIn">
                            <a href="#">
                                <div class="img-wrapper">
                                    <img src="<?php the_sub_field('image'); ?>">
                                </div>
                            </a>
                        </div>

                    <?php

                    endwhile;

                endif;
            ?>
        </div>
    </div>
</section>