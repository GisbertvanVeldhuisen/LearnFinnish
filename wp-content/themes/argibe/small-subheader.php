<?php $header = get_field('smallheader'); ?>
<section style="background: url(<?php echo get_template_directory_uri(); ?>/assets/img/background.jpg); height: 400px;" class="section-subheader small check-vp full-visible" data-vp-add-class="fadeIn">
    <div class="container">
        <div class="row">
            <div class="full check-vp full-visible" data-vp-add-class="fadeInRight delay">
                <h1>
                    <?php
                        $post = get_post('websites');

                        if(is_singular()):

                            echo single_post_title();

                        elseif(is_archive()):

                            echo post_type_archive_title();

                        else:

                            echo $header['title'];

                        endif;
                    ?>
                </h1>
            </div>
        </div>
    </div>
</section>