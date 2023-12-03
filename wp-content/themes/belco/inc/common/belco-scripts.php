<?php

/**
 * belco_scripts description
 * @return [type] [description]
 */
function belco_scripts()
{

    /**
     * all css files
     */

    wp_enqueue_style('belco-fonts', belco_fonts_url(), array(), '1.0.0');
    if (is_rtl()) {
        wp_enqueue_style('bootstrap-rtl', BELCO_THEME_CSS_DIR . 'bootstrap.rtl.min.css', array());
    } else {
        wp_enqueue_style('bootstrap', BELCO_THEME_CSS_DIR . 'bootstrap.min.css', array());
    }
    wp_enqueue_style('animate', BELCO_THEME_CSS_DIR . 'animate.min.css', []);
    wp_enqueue_style('custom-animate', BELCO_THEME_CSS_DIR . 'custom-animate.css', []);
    wp_enqueue_style('font-awesome-pro', BELCO_THEME_CSS_DIR . 'font-awesome-pro.css', []);
    wp_enqueue_style('font-awesome-free', BELCO_THEME_CSS_DIR . 'all.min.css', []);
    wp_enqueue_style('jarallax', BELCO_THEME_CSS_DIR . 'jarallax.css', []);
    wp_enqueue_style('magnific-popup', BELCO_THEME_CSS_DIR . 'jquery.magnific-popup.css', []);
    wp_enqueue_style('odometer', BELCO_THEME_CSS_DIR . 'odometer.min.css', []);
    wp_enqueue_style('swiper', BELCO_THEME_CSS_DIR . 'swiper.min.css', []);
    wp_enqueue_style('belco-icons', BELCO_THEME_CSS_DIR . 'belco-icons.css', []);
    wp_enqueue_style('owl-carousel', BELCO_THEME_CSS_DIR . 'owl.carousel.min.css', []);
    wp_enqueue_style('owl-theme-default', BELCO_THEME_CSS_DIR . 'owl.theme.default.min.css', []);
    wp_enqueue_style('bootstrap-select', BELCO_THEME_CSS_DIR . 'bootstrap-select.min.css', []);
    wp_enqueue_style('jquery-ui', BELCO_THEME_CSS_DIR . 'jquery-ui.css', []);
    wp_enqueue_style('timePicker', BELCO_THEME_CSS_DIR . 'timePicker.css', []);
    wp_enqueue_style('belco-core', BELCO_THEME_CSS_DIR . 'belco-core.css', []);
    wp_enqueue_style('belco-responsive', BELCO_THEME_CSS_DIR . 'belco-responsive.css', []);
    wp_enqueue_style('belco-dark', BELCO_THEME_CSS_DIR . 'belco-dark.css', []);
    wp_enqueue_style('belco-unit', BELCO_THEME_CSS_DIR . 'belco-unit.css', []);
    wp_enqueue_style('belco-custom', BELCO_THEME_CSS_DIR . 'belco-custom.css', []);
    wp_enqueue_style('belco-style', get_stylesheet_uri());

    // all js
    wp_enqueue_script('bootstrap-bundle', BELCO_THEME_JS_DIR . 'bootstrap.bundle.min.js', ['jquery'], '', true);
    wp_enqueue_script('jarallax', BELCO_THEME_JS_DIR . 'jarallax.min.js', ['jquery'], false, true);
    wp_enqueue_script('ajaxchimp', BELCO_THEME_JS_DIR . 'jquery.ajaxchimp.min.js', ['jquery'], false, true);
    wp_enqueue_script('appear', BELCO_THEME_JS_DIR . 'jquery.appear.min.js', ['jquery'], false, true);
    wp_enqueue_script('jquery.circle-progress', BELCO_THEME_JS_DIR . 'jquery.circle-progress.min.js', ['jquery'], false, true);
    wp_enqueue_script('magnific-popup', BELCO_THEME_JS_DIR . 'jquery.magnific-popup.min.js', ['jquery'], false, true);
    wp_enqueue_script('validate', BELCO_THEME_JS_DIR . 'jquery.validate.min.js', ['jquery'], '', true);
    wp_enqueue_script('odometer', BELCO_THEME_JS_DIR . 'odometer.min.js', ['jquery'], '', true);
    wp_enqueue_script('swiper', BELCO_THEME_JS_DIR . 'swiper.min.js', ['jquery'], '', true);
    wp_enqueue_script('wNumb', BELCO_THEME_JS_DIR . 'wNumb.min.js', ['jquery'], '', true);
    wp_enqueue_script('wow', BELCO_THEME_JS_DIR . 'wow.js', ['jquery'], '', true);
    wp_enqueue_script('isotope', BELCO_THEME_JS_DIR . 'isotope.js', ['imagesloaded'], '', true);
    wp_enqueue_script('owl-carousel-min', BELCO_THEME_JS_DIR . 'owl.carousel.min.js', ['jquery'], '', true);
    wp_enqueue_script('bootstrap-select', BELCO_THEME_JS_DIR . 'bootstrap-select.min.js', ['jquery'], '', true);
    wp_enqueue_script('timePicker', BELCO_THEME_JS_DIR . 'timePicker.js', ['jquery'], false, true);
    wp_enqueue_script('jquery.circleType', BELCO_THEME_JS_DIR . 'jquery.circleType.js', ['imagesloaded'], false, true);
    wp_enqueue_script('jquery-lettering', BELCO_THEME_JS_DIR . 'jquery.lettering.min.js', ['imagesloaded'], false, true);
    wp_enqueue_script('belco-main', BELCO_THEME_JS_DIR . 'belco.js', ['jquery'], false, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'belco_scripts');

/*
Register Fonts
 */
function belco_fonts_url()
{
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ('off' !== _x('on', 'Google font: on or off', 'belco')) {
        $font_url = 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap';
    }
    return $font_url;
}
