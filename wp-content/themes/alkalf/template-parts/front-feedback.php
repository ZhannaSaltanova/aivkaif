<?php 
$title_feedback = get_field('title_feedback');
$gallery_feedback = get_field('gallery_feedback');
?>
<section class="feedback" id="feedback">
    <div class="container">
        <div class="feedback__inner">

            <?php if ($title_feedback): ?>
                <div class="title">
                    <?php echo esc_html($title_feedback); ?>                    
                </div>
            <?php endif; ?>

            <?php if ($gallery_feedback): ?>
                <div class="feedback__inner-swiper">
                    <div class="swiper swiper-two">
                        <div class="swiper-wrapper">

                            <?php foreach ($gallery_feedback as $item): ?>
                                <div class="swiper-slide">
                                    <div class="swiper__inner-two">
                                        <div class="feedback_top">
                                            <?php if (!empty($item['image_feedback'])): ?>
                                                <div class="feedback__img">
                                                    <img src="<?php echo esc_url($item['image_feedback']['url']); ?>" 
                                                        alt="<?php echo esc_attr($item['image_feedback']['alt']); ?>">
                                                </div>
                                            <?php endif; ?>
                                            <div class="review_information">
                                                <?php if (!empty($item['name_feedback'])): ?>
                                                    <div class="feedback__name">
                                                        <?php echo esc_html($item['name_feedback']); ?>
                                                    </div>
                                                <?php endif; ?>

                                                <?php if (!empty($item['job_feedback'])): ?>
                                                    <div class="feedback__job">
                                                        <?php echo esc_html($item['job_feedback']); ?>
                                                    </div>
                                                <?php endif; ?>

                                                <?php if (!empty($item['stars_feedback']) && $item['stars_feedback'] > 0): ?>
                                                    <div class="feedback__stars">
                                                        <?php for ($i = 0; $i < intval($item['stars_feedback']); $i++): ?>
                                                            <span>⭐</span>
                                                        <?php endfor; ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        
                                        </div>
                                       

                                        <?php if (!empty($item['text_feedback'])): ?>
                                            <div class="feedback__text">
                                                <?php echo esc_html($item['text_feedback']); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div> 
                    </div> 
                    <div class="swiper-pagination-two"></div>
                </div> 
            <?php endif; ?>

        </div> 
    </div> 
</section>
