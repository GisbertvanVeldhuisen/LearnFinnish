<section class="section section-about">
    <div class="container">
        <div class="row">
            <div class="one-third">
                <div class="contact-container">
                    <h3>Stel je vraag</h3>
                    <p>Wil je meer informatie ontvangen? Laat het ons weten!</p>
                    <?php gravity_form( 2, false, false, false, '', true); ?>
                </div>
            </div>
            <div class="two-third">
                <?php

                if( have_rows('content') ):

                    while( have_rows('content') ) : the_row();

                    ?>

                        <div class="text-wrapper">
                            <h3><?php the_sub_field('title') ?></h3>
                            <p><?php the_sub_field('text') ?></p>
                        </div>

                    <?php

                    endwhile;

                endif;

                ?>
            </div>
        </div>
    </div>
</section>