<?php 
$title_block_cludes = get_field('title_block_cludes');
$cludes_img_1 = get_field('cludes_img_1');
$cludes_text_1 = get_field('cludes_text_1');
$cludes_img_2 = get_field('cludes_img_2');
$cludes_text_2 = get_field('cludes_text_2');
$cludes_img_3 = get_field('cludes_img_3');
$cludes_text_3 = get_field('cludes_text_3');
$cludes_img_4 = get_field('cludes_img_4');
$cludes_text_4 = get_field('cludes_text_4');
$cludes_img_5 = get_field('cludes_img_5');
$cludes_text_5 = get_field('cludes_text_5');
$cludes_img_6 = get_field('cludes_img_6');
$cludes_text_6 = get_field('cludes_text_6');
?>

<section class="cludes" id="cludes">
    <div class="container">
        <div class="cludes__inner">
        <?php if($title_block_cludes): ?>
            <div class="title">
            <?php echo esc_html($title_block_cludes); ?>                    
        </div>
        <?php endif; ?>
            <div class="cludes__inner-list">
                <ul class="cludes-list">
                <?php if($cludes_img_1) : ?>
                <img src="<?php echo esc_url($cludes_img_1); ?>" alt="">
                <?php endif; ?>
                    <?php if($cludes_text_1) : ?>
                    <li class="cludes-list-description"><?php echo esc_html($cludes_text_1); ?>                    
                    </li>
                    <?php endif; ?>
                </ul>
                <ul class="cludes-list">
                <?php if($cludes_img_2) : ?>
                <img src="<?php echo esc_url($cludes_img_2); ?>" alt="">
                <?php endif; ?>
                    <?php if($cludes_text_2) : ?>
                    <li class="cludes-list-description"><?php echo esc_html($cludes_text_2); ?>                    
                    </li>
                    <?php endif; ?>
                </ul>
                <ul class="cludes-list">
                <?php if($cludes_img_3) : ?>
                <img src="<?php echo esc_url($cludes_img_3); ?>" alt="">
                <?php endif; ?>
                    <?php if($cludes_text_3) : ?>
                    <li class="cludes-list-description"><?php echo esc_html($cludes_text_3); ?>                    
                    </li>
                    <?php endif; ?>
                </ul>
                <ul class="cludes-list">
                <?php if($cludes_img_4) : ?>
                <img src="<?php echo esc_url($cludes_img_4); ?>" alt="">
                <?php endif; ?>
                    <?php if($cludes_text_4) : ?>
                    <li class="cludes-list-description"><?php echo esc_html($cludes_text_4); ?>                    
                    </li>
                    <?php endif; ?>
                </ul>
                <ul class="cludes-list">
                <?php if($cludes_img_5) : ?>
                <img src="<?php echo esc_url($cludes_img_5); ?>" alt="">
                <?php endif; ?>
                    <?php if($cludes_text_5) : ?>
                    <li class="cludes-list-description"><?php echo esc_html($cludes_text_5); ?>                    
                    </li>
                    <?php endif; ?>
                </ul>
                <ul class="cludes-list">
                <?php if($cludes_img_6) : ?>
                <img src="<?php echo esc_url($cludes_img_6); ?>" alt="">
                <?php endif; ?>
                    <?php if($cludes_text_6) : ?>
                    <li class="cludes-list-description"><?php echo esc_html($cludes_text_6); ?>                    
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>