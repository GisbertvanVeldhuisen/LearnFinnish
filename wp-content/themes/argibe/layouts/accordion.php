<section class="section-why">
    <div class="container">
        <div class="row">
            <div class="one-half">
                <h2><?php the_sub_field('title'); ?></h2>
                <p><?php the_sub_field('text'); ?></p>
            </div>
            <div class="one-half">
                <ul class="faq">
                    <?php
                    if (have_rows('accordion')):
                        while (have_rows('accordion')) : the_row();

                            ?>
                                <li class="question"><?php the_sub_field('title'); ?></li>
                                <li class="awnser"><?php the_sub_field('content'); ?></li>

                            <?php

                        endwhile;
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>