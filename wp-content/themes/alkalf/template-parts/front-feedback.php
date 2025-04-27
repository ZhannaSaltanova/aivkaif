<?php 
$title_feedback = get_field('title_feedback');
$gallery_feedback = get_field('gallery_feedback'); 
?>
<section class="feedback" id="feedback">
    <div class="container">
        <div class="feedback__inner">
        <?php if($title_feedback): ?>
            <div class="title">
            <?php echo esc_html($title_feedback); ?>                    
        </div>
        <?php endif; ?>

        <?php if ($gallery_feedback): ?>
            <div class="feedback__inner-swiper">
                <div class="swiper swiper-two">
                    <div class="swiper-wrapper">
                    <?php foreach ($gallery_feedback as $image_feedback): ?>
                            <div class="swiper-slide">
                                <div class="swiper__inner-two">
                                    <img src="<?php echo esc_url($image_feedback['imagimage_feedbacke']['url']); ?>" 
                                        alt="<?php echo esc_attr($image_feedback['image_feedback']['alt']); ?>">
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper__inner-two">
                                <img src="./images/feedback__img-2.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper__inner-two">
                                <img src="./images/feedback__img-3.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper__inner-two">
                                <img src="./images/feedback__img-1.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper__inner-two">
                                <img src="./images/feedback__img-2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination-two"></div>
            </div>
            <?php endif; ?>


        </div>
    </div>
</section>