<?php 
$course_cost = get_field('course_cost');
$new_price = get_field('new_price', 'option');        
$old_price = get_field('old_price', 'option');

$disable_timer = get_field('disable_timer', 'option'); 
$custom_date = get_field('custom_timer_date', 'option'); 
?>

<section class="course">
  <div class="container">
    <div class="course__inner">
      <div class="course-section">
        <div class="course-info">
          <div class="price-block">
            <?php if ($course_cost): ?>
              <div class="label"><?php echo esc_html($course_cost); ?></div>
            <?php endif; ?>
            <div class="price">
              <?php if ($new_price): ?>
                <strong><?php echo esc_html($new_price); ?> грн.</strong>
              <?php endif; ?>
              <?php if ($old_price): ?>
                <span class="old-price"><?php echo esc_html($old_price); ?> грн.</span>
              <?php endif; ?>
            </div>
          </div>

          <?php if (!$disable_timer): ?>
            <div class="timer-block">
              <div class="label">До збільшення ціни</div>
              <div class="timer"><strong ></strong></div>
            </div>
          <?php endif; ?>

        </div>
        <?php echo do_shortcode('[register_button]'); ?>
      </div>
      <div class="note">Заповніть форму та отримайте доступ до курсу</div>
    </div>
  </div>
</section>

<script>
window.timerConfig = {
  disable: <?php echo $disable_timer ? 'true' : 'false'; ?>,
  customDate: <?php echo $custom_date ? '"' . esc_js(date('Y-m-d H:i:s', strtotime($custom_date))) . '"' : 'null'; ?>
};
</script>
