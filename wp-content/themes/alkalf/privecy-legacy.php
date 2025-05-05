<?php
/**
 * 
 * Template Name: Privecy-legasy
 * 

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alkalf
 */

get_header(); 

?>
<?php
// $front_page_id = 8;

// $the_first_menu_item = get_field('the_first_menu_item', $front_page_id);

$front_page_id = get_option('page_on_front');

 $name_privecy = get_field('name_privecy');
 $legacy = get_field('legacy');
?>


<div class="legacy">
    <div class="container">
        <div class="legacy-inner">
            <?php if($name_privecy): ?>
                <div class="title">
                    <?php echo esc_html($name_privecy); ?>
                </div>
            <?php endif; ?>

            <?php if($legacy): ?>
                <div class="legacy-text">
                    <?php echo ($legacy); ?>                    
                </div>
        <?php endif; ?>

        </div>

    </div>

</div>

<?php
get_footer();
?>