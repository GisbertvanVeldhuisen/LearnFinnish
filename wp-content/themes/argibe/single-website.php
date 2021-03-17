 <?php get_header() ?>

<?php $website = get_field('websites'); ?>
<section class="section section-website">
    <div class="container">
        <div class="row">
           <div class="full">
               <a class="back" href="/website">Terug naar pakketten</a>
           </div>
        </div>
        <div class="row">
            <div class="one-half">
               <h3><?php echo single_post_title(); ?></h3>
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
            </div>
            <div class="one-half">
                <h3><?php echo $website['title']; ?></h3>
                <p><?php echo $website['subtitle']; ?></p>
                <p><?php echo $website['text']; ?></p>
                <ul class="checkmark">
                    <li>0619222249</li>
                    <li><a href="mailto:arno@argibe.nl">Mail ons</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
 <?php get_footer(); ?>
