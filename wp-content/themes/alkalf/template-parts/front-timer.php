<?php 
$course_cost = get_field('course_cost');
$new_price = get_field('new_price');        
$old_price = get_field('old_price');
?>
<section class="course">
    <div class="container">
        <div class="course__inner">
            <div class="course-section">
                <div class="course-info">
                    <div class="price-block">
                    <?php if($course_cost): ?>
                            <div class="label">
                            <?php echo esc_html($course_cost); ?>
                        </div>
                        <?php endif; ?>
                        <div class="price">
                                <?php if($new_price): ?>
                                <strong><?php echo esc_html($new_price); ?>
                                    грн.</strong> 
                                    <?php endif; ?>
                                    <?php if($old_price): ?>
                                <span class="old-price">
                                <?php echo esc_html($old_price); ?> грн.</span>
                                <?php endif; ?>
                            </div>
                    </div>
                    <div class="timer-block">
                        <div class="label">До збільшення ціни</div>
                        <div class="timer">
                            <strong>4 год. 27 хв. 35 сек.</strong>
                        </div>
                    </div>
                </div>
                <button class="register-btn">ЗАРЕЄСТРУВАТИСЬ ЗАРАЗ</button>
            </div>
            <div class="note">Заповніть форму та отримайте доступ до курсу</div>
        </div>
    </div>
</section>