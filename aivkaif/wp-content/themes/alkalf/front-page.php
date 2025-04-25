<?php
/**
 * 
 * Template Name: Front page
 * 
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alkalf
 */

get_header(); 

?>

<?php
$top__inner = get_field('top__inner');
$top__inner_subtitle = get_field('top__inner_subtitle');
$description_corsec = get_field('description_corsec');
$course_cost = get_field('course_cost');
$new_price = get_field('new_price');
$old_price = get_field('old_price');
// $gallery_images = get_field('gallery_images'); 
$gallery_images = get_field('gallery_images'); 


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

$title_block_program = get_field('title_block_program');
$name_day_1 = get_field('name_day_1');
$first_day_description = get_field('first_day_description');



$title_feedback = get_field('title_feedback');
$gallery_feedback = get_field('gallery_feedback'); 
?>


<main class="main">
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
                            <img src="./images/about-img.png" alt="">
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
                            <img src="../assets/images/about-img.png" alt="">
                            <?php if($second_subtitle): ?>
                            <li class="item-title"><?php echo esc_html($second_subtitle); ?></li>
                            <?php endif; ?>
                            <?php if($second_subtitle_description): ?>
                            <li class="item-description"><?php echo esc_html($second_subtitle_description); ?></li>
                            <?php endif; ?>
                        </ul>
                        <ul class="steps-list">
                            <img src="../assets/images/about-img.png" alt="">
                            <?php if($third_subtitle): ?>
                            <li class="item-title"><?php echo esc_html($third_subtitle); ?></li>
                            <?php endif; ?>
                            <?php if($third_subtitle_description): ?>
                            <li class="item-description"><?php echo esc_html($third_subtitle_description); ?></li>
                            <?php endif; ?>
                        </ul>
                        <ul class="steps-list">
                            <img src="../assets/images/about-img.png" alt="">
                            <?php if($fourth_subtitle): ?>
                            <li class="item-title"><?php echo esc_html($fourth_subtitle); ?></li>
                            <?php endif; ?>
                            <?php if($fourth_subtitle_description): ?>
                            <li class="item-description"><?php echo esc_html($fourth_subtitle_description); ?></li>
                            <?php endif; ?>
                        </ul>
                        <ul class="steps-list">
                            <img src="../assets/images/about-img.png" alt="">
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
        <section class="program">
            <div class="container">
                <div class="program__inner">
                <?php if($title_block_program): ?>
                    <div class="title">
                    <?php echo esc_html($title_block_program); ?>                    
                </div>
                <?php endif; ?>
                    <div class="program__inner-list">
                        <div class="program__item">
                            <?php if($name_day_1): ?>
                            <div class="program__item-day">
                                <?php echo esc_html($name_day_1); ?>                    
                            <span>:</span>
                                <button class="toggle-icon" aria-label="toggle"></button>
                            </div>
                            <?php endif; ?>

                            <?php if($first_day_description): ?>
                            <ul class="program__item-steps">
                            <?php echo esc_html($first_day_description); ?>                    

                               </ul>
                            <?php endif; ?>

                        </div>
                        <div class="program__item">
                            <div class="program__item-day">День 2 <span>:</span>
                                <button class="toggle-icon" aria-label="toggle"></button>
                            </div>
                            <ul class="program__item-steps">
                                <li>ШІ для генерації контенту. Огляд найкращих інструментів для генерації контенту: 
                                    ChatGPT, Gemini, Claude.</li>
                                <li>Створення Perfect Prompt: як правильно формулювати запити до ШІ, щоб отримувати
                                    бажаний результат.</li>
                            </ul>
                        </div>
                        <div class="program__item">
                            <div class="program__item-day">День 3 <span>:</span>
                                <button class="toggle-icon" aria-label="toggle"></button>
                            </div>
                            <ul class="program__item-steps">
                                <li>Генерація візуального контенту: інструменти для створення картинок та фото з ШІ.
                                </li>
                                <li>Аналіз інструментів, конкурентів та цін на ринку сучасних ШІ</li>
                            </ul>
                        </div>
                        <div class="program__item">
                            <div class="program__item-day">День 4 <span>:</span>
                                <button class="toggle-icon" aria-label="toggle"></button>
                            </div>
                            <ul class="program__item-steps">
                                <li>Відео контент: Написання сцен та сценарію для відео.</li>
                                <li>Анімація зображень: перетворюємо статичні картинки на динамічні відео</li>
                                <li>Бонус відео. Автоматизація контенту, щоб пришвидшити…</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    </main>



<?php
get_footer();
?>