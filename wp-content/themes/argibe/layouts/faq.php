<?php $section = get_sub_field('faq') ?>

<div class="section section-faq  <?php if (!empty($section['background_color'])) :echo 'background-' . $section['background_color'] ?> <?php endif; ?>">
    <div class="container">
        <div class="column full">
			<?php if (!empty($section['title'])) : ?>
                <div class="heading">
                    <h2><?php echo $section['title']; ?></h2>
                </div>
			<?php endif; ?>
        </div>
        <div class="column one-half">
            <ul class="faq">
				<?php foreach ($section['questions'] as $v) : ?>
                    <li class="question"><?php echo get_the_title($v); ?></li>
                    <li class="awnser"><?php echo get_the_excerpt($v); ?></li>
				<?php endforeach; ?>
            </ul>
        </div>
        <div class="column one-half <?php echo $section['media_align'] ?>">
			<?php if (!empty($section['image'])) : ?>
				<?php echo wp_get_attachment_image($section['image'], 'textblock'); ?>
			<?php endif; ?>
        </div>
    </div>
</div>
