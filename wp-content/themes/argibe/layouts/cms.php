<section class="section-cms">
    <div class="container">
        <div class="row">
            <?php if( have_rows('left') ): ?>

                <?php while( have_rows('left') ): the_row(); ?>

                    <div class="one-half">
                        <span><?php the_sub_field('subtitle'); ?></span>
                        <h2><?php the_sub_field('title'); ?></h2>
                        <p><?php the_sub_field('text'); ?></p>
                    </div>

                <?php endwhile; ?>

            <?php endif; ?>

            <?php if( have_rows('right') ): ?>

                <?php while( have_rows('right') ): the_row(); ?>

                    <div class="one-half">
                        <span class="subtitle"><?php the_sub_field('title'); ?></span>
                        <p><?php the_sub_field('text'); ?></p>
                        <ul class="checkmark">
                            <?php

                                if( have_rows('checkmark') ):

                                    while( have_rows('checkmark') ) : the_row();

                                        ?>

                                            <li><?php the_sub_field('item'); ?></li>

                                        <?php

                                    endwhile;

                                endif;

                            ?>
                        </ul>
                    </div>

                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>
</section>