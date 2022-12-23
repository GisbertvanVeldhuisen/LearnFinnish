<?php $section = get_sub_field('usp') ?>

<div class="section section-usp-bar <?php if (!empty($section['background_color'])) :echo 'background-' . $section['background_color'] ?> <?php endif; ?>">
    <div class="container">
        <div class="column full">
            <div class="usp-bar">
                <?php foreach ($section['usps'] as $usp) : ?>
                    <div class="usp">
                        <?php if (!empty($usp["image"])): ?>
                            <span class="image"><?php echo wp_get_attachment_image($usp['image']['id']); ?></span>
                        <?php endif; ?>
                        <span class="title"><?php echo $usp['usp']; ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
