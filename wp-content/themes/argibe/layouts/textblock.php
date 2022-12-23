<?php $section = get_sub_field('textblock') ?>

<div class="section section-textblock <?php if (!empty($section['background_color'])) :echo 'background-' . $section['background_color'] ?> <?php endif; ?>">
    <div class="container">
        <div class="column full">
            <?php if (!empty($section['title'])) : ?>
                <div class="heading">
                    <h2><?php echo $section['title']; ?></h2>
                </div>
            <?php endif; ?>
        </div>
        <div class="column one-half">
            <?php if (!empty($section['column_1']['title'])) : ?>
                <h2><?php echo $section['column_1']['title']; ?></h2>
            <?php endif; ?>

            <?php if (!empty($section['column_1']['content'])) : ?>
                <?php echo $section['column_1']['content']; ?>
            <?php endif; ?>
            <?php if (!empty(($section['column_1']['buttons']))) : foreach ($section['column_1']['buttons'] as $button): ?>
                <a class="button" href="<?php echo($button['button']['url']); ?>">
                    <span><?php echo($button['button']['title']); ?></span>
                    <span class="icon arrrow"></span>
                </a>
            <?php endforeach; endif; ?>
        </div>
        <div class="column one-half">
            <?php if (!empty($section['column_2']['title'])) : ?>
                <h2><?php echo $section['column_2']['title']; ?></h2>
            <?php endif; ?>

            <?php if (!empty($section['column_2']['content'])) : ?>
                <?php echo $section['column_2']['content']; ?>
            <?php endif; ?>
            <?php if (!empty(($section['column_2']['buttons']))) : foreach ($section['column_2']['buttons'] as $button): ?>
                <a class="button" href="<?php echo($button['button']['url']); ?>">
                    <span><?php echo($button['button']['title']); ?></span>
                    <span class="icon arrrow"></span>
                </a>
            <?php endforeach; endif; ?>
        </div>
    </div>
</div>
