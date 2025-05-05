<?php 
$title_block_you_want = get_field('title_block_you_want');
$first_subtitle = get_field('first_subtitle');
$first_subtitle_description = get_field('first_subtitle_description');
$second_subtitle = get_field('second_subtitle');
$second_subtitle_description = get_field('second_subtitle_description');
$third_subtitle = get_field('third_subtitle');
$third_subtitle_description = get_field('third_subtitle_description');
$fourth_subtitle = get_field('fourth_subtitle');
$fourth_subtitle_description = get_field('fourth_subtitle_description');
$fifth_subtitle = get_field('fifth_subtitle');
$fifth_subtitle_description = get_field('fifth_subtitle_description');
?>
<section class="about" id="about">
    <div class="container">
        <div class="about__inner">
            <?php if($title_block_you_want): ?>
            <div class="title">
            <?php echo esc_html($title_block_you_want); ?>
            
            </div>
            <?php endif; ?>
            <div class="about__inner-steps">
                <ul class="steps-list">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-img.png" alt="зірочка">
                    <?php if($first_subtitle): ?>
                    <li class="item-title">
                    <?php echo esc_html($first_subtitle); ?>
                </li>
                <?php endif; ?>
                <?php if($first_subtitle_description): ?>
                    <li class="item-description"><?php echo esc_html($first_subtitle_description); ?>
                    </li>
                    <?php endif; ?>
                </ul>
                <ul class="steps-list">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-img.png" alt="зірочка">
                    <?php if($second_subtitle): ?>
                    <li class="item-title"><?php echo esc_html($second_subtitle); ?></li>
                    <?php endif; ?>
                    <?php if($second_subtitle_description): ?>
                    <li class="item-description"><?php echo esc_html($second_subtitle_description); ?></li>
                    <?php endif; ?>
                </ul>
                <ul class="steps-list">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-img.png" alt="зірочка">
                    <?php if($third_subtitle): ?>
                    <li class="item-title"><?php echo esc_html($third_subtitle); ?></li>
                    <?php endif; ?>
                    <?php if($third_subtitle_description): ?>
                    <li class="item-description"><?php echo esc_html($third_subtitle_description); ?></li>
                    <?php endif; ?>
                </ul>
                <ul class="steps-list">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-img.png" alt="зірочка">
                    <?php if($fourth_subtitle): ?>
                    <li class="item-title"><?php echo esc_html($fourth_subtitle); ?></li>
                    <?php endif; ?>
                    <?php if($fourth_subtitle_description): ?>
                    <li class="item-description"><?php echo esc_html($fourth_subtitle_description); ?></li>
                    <?php endif; ?>
                </ul>
                <ul class="steps-list">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-img.png" alt="зірочка">
                    <?php if($fifth_subtitle): ?>
                    <li class="item-title"><?php echo esc_html($fifth_subtitle); ?></li>
                    <?php endif; ?>
                    <?php if($fifth_subtitle_description): ?>
                    <li class="item-description"><?php echo esc_html($fifth_subtitle_description); ?></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>