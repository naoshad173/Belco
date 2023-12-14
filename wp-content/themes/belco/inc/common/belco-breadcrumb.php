<?php

/**
 * Breadcrumbs for Belco theme.
 *
 * @package     Belco
 * @author      Intertheme
 * @copyright   Copyright (c) 2023, Intertheme
 * @link        https://themeforest.net/user/intertheme
 * @since       Belco 1.0.0
 */


function belco_breadcrumb_func()
{
    global $post;
    $breadcrumb_class = '';
    $breadcrumb_show = 1;

    if (is_front_page() && is_home()) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog', 'belco'));
        $breadcrumb_class = 'home_front_page';
    } elseif (is_front_page()) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog', 'belco'));
        $breadcrumb_show = 0;
    } elseif (is_home()) {
        if (get_option('page_for_posts')) {
            $title = get_the_title(get_option('page_for_posts'));
        }
    } elseif (is_single() && 'post' == get_post_type()) {
        $title = get_the_title();
    } elseif (is_single() && 'product' == get_post_type()) {
        $title = get_theme_mod('breadcrumb_product_details', __('Shop', 'belco'));
    } elseif (is_single() && 'courses' == get_post_type()) {
        $title = esc_html__('Course Details', 'belco');
    } elseif (is_search()) {

        $title = esc_html__('Search Results for : ', 'belco') . get_search_query();
    } elseif (is_404()) {
        $title = esc_html__('Page not Found', 'belco');
    } elseif (function_exists('is_woocommerce') && is_woocommerce()) {
        $title = get_theme_mod('breadcrumb_shop', __('Shop', 'belco'));
    } elseif (is_archive()) {
        $title = get_the_archive_title();
    } else {
        $title = get_the_title();
    }



    $_id = get_the_ID();

    if (is_single() && 'product' == get_post_type()) {
        $_id = $post->ID;
    } elseif (function_exists("is_shop") and is_shop()) {
        $_id = wc_get_page_id('shop');
    } elseif (is_home() && get_option('page_for_posts')) {
        $_id = get_option('page_for_posts');
    }

    $is_breadcrumb = function_exists('get_field') ? get_field('is_it_invisible_breadcrumb', $_id) : '';
    if (!empty($_GET['s'])) {
        $is_breadcrumb = null;
    }

    if (empty($is_breadcrumb) && $breadcrumb_show == 1) {

        $bg_img_from_page = function_exists('get_field') ? get_field('breadcrumb_background_image', $_id) : '';
        $hide_bg_img = function_exists('get_field') ? get_field('hide_breadcrumb_background_image', $_id) : '';

        // get_theme_mod
        $bg_img = get_theme_mod('breadcrumb_bg_img');
        $breadcrumb_info_switch = get_theme_mod('breadcrumb_info_switch', true);

        if ($hide_bg_img) {
            $bg_img = '';
        } else {
            $bg_main_img = !empty($bg_img_from_page) ? $bg_img_from_page['url'] : $bg_img;
        } ?>

        <!--Page Header Start-->
        <section class="page-header breadcrumb__overlay">
            <div class="page-header__bg<?php print esc_attr($breadcrumb_class); ?>" style="background-image: url(<?php print esc_attr($bg_main_img); ?>)"></div>
            <div class="container">
                <?php if (!empty($breadcrumb_info_switch)) : ?>
                    <div class="page-header__inner">
                        <h2><?php echo belco_kses($title); ?></h2>
                        <?php if (function_exists('bcn_display')) {
                            bcn_display();
                        } ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
        <!--Page Header End-->
    <?php
    }
}

add_action('belco_before_main_content', 'belco_breadcrumb_func');

// belco_search_form
function belco_search_form()
{
    ?>
    <div class="search-wrapper p-relative transition-3 d-none">
        <div class="search-form transition-3">
            <form method="get" action="<?php print esc_url(home_url('/')); ?>">
                <input type="search" name="s" value="<?php print esc_attr(get_search_query()) ?>" placeholder="<?php print esc_attr__('Enter Your Keyword', 'belco'); ?>">
                <button type="submit" class="search-btn"><i class="far fa-search"></i></button>
            </form>
            <a href="javascript:void(0);" class="search-close"><i class="far fa-times"></i></a>
        </div>
    </div>
<?php
}

add_action('belco_before_main_content', 'belco_search_form');
