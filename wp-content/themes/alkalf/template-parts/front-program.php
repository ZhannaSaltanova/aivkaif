<?php
$title_block_program = get_field('title_block_program');
$name_day_1 = get_field('name_day_1');
$first_day_description = get_field('first_day_description');

?>
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