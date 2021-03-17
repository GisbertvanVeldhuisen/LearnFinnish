<?php $header = get_field('bigheader'); ?>
<section style="background: url(<?php echo get_template_directory_uri(); ?>/assets/img/background.jpg); height: 700px;" class="section-subheader big check-vp full-visible" data-vp-add-class="fadeIn">
    <div class="container">
        <div class="row">
            <div class="full check-vp full-visible" data-vp-add-class="fadeInRight delay">
                <h1><?php echo $header['title']; ?></h1>

                <div class="wrapper">
                    <?php $button01 = $header['button01']; ?>

                    <?php if ($button01): ?>
                        <a class="btn" href="<?php echo $button01['url']; ?>" target="<?php echo $button01['target']; ?>"><?php echo $button01['title']; ?></a>
                    <?php endif; ?>

                    <?php $button02 = $header['button02']; ?>

                    <?php if ($button02): ?>
                        <a id="scroll" class="btn transparent" href="<?php echo $button02['url']; ?>" target="<?php echo $button02['target']; ?>"><?php echo $button02['title']; ?></a>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</section>