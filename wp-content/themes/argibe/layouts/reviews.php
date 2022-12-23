<?php $section = get_sub_field('reviews') ?>

<div class="section section-reviews  <?php if (!empty($section['background_color'])) :echo 'background-' . $section['background_color'] ?> <?php endif; ?>">
    <div class="container">
        <div class="column full">
            <?php if (!empty($section['title'])) : ?>
                <div class="heading">
                    <h2><?php echo $section['title']; ?></h2>
                </div>
            <?php endif; ?>
        </div>
        <div class="column full">
            <div class="grid-container">
                <?php foreach ($section['reviews'] as $v) : ?>
                    <div class="column one-third entry">
                        <div class="entry-header">
                            <p><?php echo get_the_excerpt($v) ?></p>
                        </div>
                        <div class="entry-content">
                            <h3><?php echo get_the_title($v) ?></h3>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>