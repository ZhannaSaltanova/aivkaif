<?php
$top__inner = get_field('top__inner');
$top__inner_subtitle = get_field('top__inner_subtitle');
$description_corsec = get_field('description_corsec');
$course_cost = get_field('course_cost');
$new_price = get_field('new_price');
$old_price = get_field('old_price');
$gallery_images = get_field('gallery_images'); 
?>

<section class="top">
    <div class="container">
        <div class="top__inner">
            <div class="left-block">
                <img src="./images/gallery-2.jpg" alt="Image Left" class="promo-img promo-img--left">
                <img src="./images/gallery-3.jpg" alt="Image Right" class="promo-img promo-img--right">
                <div class="top__inner-text">
                    <?php if($top__inner): ?>
                    <div class="top__inner_text_head">
                    <?php echo esc_html($top__inner); ?>
                    </div>
                    <?php endif; ?>

                    <?php if($top__inner_subtitle): ?>
                    <div class="top__inner-text-question">
                    <?php echo esc_html($top__inner_subtitle); ?>
                    </div>
                    <?php endif; ?>

                    <?php if($description_corsec): ?>
                    <div class="top__inner-text-description">
                    <?php echo esc_html($description_corsec); ?>
                    </div>
                    <?php endif; ?>

                </div>

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
                        <div class="header__discount-circle">
                            <img src="./assets/images/discount-img.png" alt="">

                            <div class="circle-text">85<span>%</span></div>
                            <img src="./images/discount-img2.png" alt="">
                        </div>
                    </div>
                    <button class="register-btn">ЗАРЕЄСТРУВАТИСЬ ЗАРАЗ</button>
                    <div class="note">Заповніть форму та отримайте доступ до курсу</div>
                </div>
            </div>


            <div class="right-block">
            <?php
            if ($gallery_images): ?>
                <div class="block__gallery">
                    <div class="swiper swiper-one">
                        <div class="swiper-wrapper">
                        <?php foreach ($gallery_images as $image): ?>
                            <div class="swiper-slide">
                                <div class="swiper__inner">
                                    <img src="<?php echo esc_url($image['image']['url']); ?>" 
                                        alt="<?php echo esc_attr($image['image']['alt']); ?>">
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="swiper-pagination-one"></div>

                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>