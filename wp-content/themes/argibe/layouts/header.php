<?php $section = get_sub_field('header') ?>

<div class="section header">
    <?php if (!empty($section['background_image'])) : ?>

        <div class="background-image" role="img"
             style="background-image: url(<?= wp_get_attachment_image_url($section["background_image"], 'header_content') ?>);"
             aria-label="<?php echo get_post_meta($section["background_image"], 'header_content', true) ?>">
            <div class="container">
                <?php if (!empty($section['title'])) : ?>
                    <div class="column full">
                        <div class="heading">
                            <h1><?php echo $section['title']; ?></h1>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
    <div class="container">
        <div class="column three-fourth">
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
        <?php if ($section['option'] === 'image') : ?>
            <div class="column one-fourth entry">
                <div class="entry-content">
                    <div class="image-container">
                        <?= wp_get_attachment_image($section['image']['ID'], 'specialist'); ?>
                    </div>
                    <div class="content">
                        <?= $section['content_image'] ?>
                    </div>
                    <a class="button" href="<?php echo($section['button_image']['url']); ?>">
                        <span><?php echo($section['button_image']['title']); ?></span>
                        <span class="icon arrrow"></span>
                    </a>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($section['option'] === 'pagelink') : ?>
            <div class="column one-fourth entry">
                <div class="entry-content">
                    <div class="content">
                        <?= $section['content_pagelink'] ?>
                    </div>
                    <a class="full-link" href="<?php echo($section['button_pagelink']['url']); ?>">
                        <span class="icon arrrow"></span>
                    </a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
