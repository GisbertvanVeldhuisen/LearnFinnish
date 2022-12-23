<?php $section = get_sub_field('textblock_media') ?>

<div class="section section-textblock_media <?php if (!empty($section['background_color'])) :echo 'background-' . $section['background_color'] ?> <?php endif; ?>">
    <div class="container">
        <div class="column full">
            <?php if (!empty($section['title'])) : ?>
                <div class="heading">
                    <h2><?php echo $section['title']; ?></h2>
                </div>
            <?php endif; ?>
        </div>
        <div class="column one-half">
            <?php if (!empty($section['content'])) : ?>
                <?php echo $section['content']; ?>
            <?php endif; ?>
            <?php if (!empty(($section['buttons']))) : foreach ($section['buttons'] as $button): ?>
                <a class="button" href="<?php echo($button['button']['url']); ?>">
                    <span><?php echo($button['button']['title']); ?></span>
                    <span class="icon arrrow"></span>
                </a>
            <?php endforeach; endif; ?>
        </div>
        <div class="column one-half <?php echo $section['media_align']?>">
            <?php if (!empty($section['image'])) : ?>
                <?php echo wp_get_attachment_image($section['image'], 'textblock'); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
