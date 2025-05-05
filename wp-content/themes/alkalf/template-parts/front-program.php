<?php
$title_block_program = get_field('title_block_program');
$name_day_1 = get_field('name_day_1');
$first_day_description = get_field('first_day_description');
$name_day_2 = get_field('name_day_2');
$second_day_description = get_field('second_day_description');
$name_day_3 = get_field('name_day_3');
$third_day_description = get_field('third_day_description');
$name_day_4 = get_field('name_day_4');
$fourth_day_description = get_field('fourth_day_description');
?>


<section class="program" id="program">
    <div class="container">
        <div class="program__inner">
        <?php if($title_block_program): ?>
            <div class="title">
            <?php echo ($title_block_program); ?>                    
        </div>
        <?php endif; ?>
            <div class="program__inner-list">
                <div class="program__item">
                    <?php if($name_day_1): ?>
                    <div class="program__item-day">
                        <?php echo  ($name_day_1); ?>                    
                    <span>:</span>
                        <button class="toggle-icon" aria-label="toggle"></button>
                    </div>
                    <?php endif; ?>

                    <?php if($first_day_description): ?>
                    <ul class="program__item-steps">
                    <?php echo ($first_day_description); ?>                    

                        </ul>
                    <?php endif; ?>
                </div>
                <div class="program__item">
                    <?php if($name_day_2): ?>
                    <div class="program__item-day">
                        <?php echo esc_html ($name_day_2); ?>                    
                    <span>:</span>
                        <button class="toggle-icon" aria-label="toggle"></button>
                    </div>
                    <?php endif; ?>

                    <?php if($second_day_description): ?>
                    <ul class="program__item-steps">
                    <?php echo ($second_day_description); ?>                    
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="program__item">
                    <?php if($name_day_3): ?>
                    <div class="program__item-day">
                        <?php echo esc_html ($name_day_3); ?>                    
                    <span>:</span>
                        <button class="toggle-icon" aria-label="toggle"></button>
                    </div>
                    <?php endif; ?>

                    <?php if($third_day_description): ?>
                    <ul class="program__item-steps">
                    <?php echo ($third_day_description); ?>                    
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="program__item">
                    <?php if($name_day_4): ?>
                    <div class="program__item-day">
                        <?php echo esc_html ($name_day_4); ?>                    
                    <span>:</span>
                        <button class="toggle-icon" aria-label="toggle"></button>
                    </div>
                    <?php endif; ?>
                    <?php if($fourth_day_description): ?>
                    <ul class="program__item-steps">
                    <?php echo ($fourth_day_description); ?>                    
                        </ul>
                    <?php endif; ?>
                </div>
         
            </div>
        </div>
    </div>
</section>