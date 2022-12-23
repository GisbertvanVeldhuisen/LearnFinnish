<?php $section = get_sub_field('form') ?>

<div class="section section-textblock-form <?php if (!empty($section['background_color'])) :echo 'background-' . $section['background_color'] ?> <?php endif; ?>">
    <div class="container">
        <?php if (empty($section['content'])) : ?>
            <div class="column full">
                <div class="heading">
                    <h2><?php echo $section['title']; ?></h2>
                </div>
            </div>
        <?php endif; ?>
        <div class="column one-half">
            <?php if (!empty($section['content'])) : ?>
                <div class="heading">
                    <h2><?php echo $section['title']; ?></h2>
                </div>
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
            <?php gravity_form($section['form_id'], true, false, false, '', true, 12); ?>

        </div>
    </div>
</div>
