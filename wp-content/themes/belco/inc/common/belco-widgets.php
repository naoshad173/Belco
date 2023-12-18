<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function belco_widgets_init()
{

    $footer_style_2_switch = get_theme_mod('footer_style_2_switch', false);
    $footer_style_3_switch = get_theme_mod('footer_style_3_switch', false);
    $footer_style_4_switch = get_theme_mod('footer_style_4_switch', false);

    /**
     * blog sidebar
     */
    register_sidebar([
        'name'          => esc_html__('Blog Sidebar', 'belco'),
        'id'            => 'blog-sidebar',
        'before_widget' => '<div id="%1$s" class="sidebar__single sidebar__search sidebar__category-list sidebar__category sidebar__post sidebar__tag sidebar__gallery b-60 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="sidebar__title-box"><h3 class="sidebar__title">',
        'after_title'   => '</h3></div>',
    ]);

    $footer_widgets = get_theme_mod('footer_widget_number', 4);

    //  Home Light Footer 
    for ($num = 1; $num <= $footer_widgets; $num++) {
        register_sidebar([
            'name'          => sprintf(esc_html__('Footer %1$s', 'belco'), $num),
            'id'            => 'footer-' . $num,
            'description'   => sprintf(esc_html__('Footer %1$s', 'belco'), $num),
            'before_widget' => '<div id="%1$s" class="footer-widget__column footer-widget__about footer-widget__column footer-widget__company footer-widget__column footer-widget__column footer-widget__contact footer-widget__newsletter footer__col-' . $num . ' mb-50 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="footer-widget__title-box">',
            'after_title'   => '</div>',
        ]);
    }

    //  Inner Pages Footer 
    if ($footer_style_2_switch) {
        for ($num = 1; $num <= $footer_widgets; $num++) {

            register_sidebar([
                'name'          => sprintf(esc_html__('Footer Style 2 : %1$s', 'belco'), $num),
                'id'            => 'footer-2-' . $num,
                'description'   => sprintf(esc_html__('Footer Style 2 : %1$s', 'belco'), $num),
                'before_widget' => '<div id="%1$s" class="menu-custom footer-margin-css footer-widget-two__column ul li a footer-widget-two__about footer-widget-two__portfolio footer-widget-two__company footer-widget-two__contact footer-col-2-' . $num . 'mb-50 %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<div class="footer-widget-two__title-box">',
                'after_title'   => '</div>',
            ]);
        }
    }

    //  Home Dark Footer 
    if ($footer_style_3_switch) {
        for ($num = 1; $num <= $footer_widgets; $num++) {
            register_sidebar([
                'name'          => sprintf(esc_html__('Footer Style 3 : %1$s', 'belco'), $num),
                'id'            => 'footer-3-' . $num,
                'description'   => sprintf(esc_html__('Footer Style 3 : %1$s', 'belco'), $num),
                'before_widget' => '<div id="%1$s" class="footer-widget-three__column archive-unit footer__widget footer-widget__column footer-widget__about-text-two footer-widget__company-two footer-widget__newsletter-two footer-widget__contact-two footer__widget-3 footer-col-3-' . $num . ' mb-50 %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<div class="footer-widget__title-box">',
                'after_title'   => '</div>',
            ]);
        }
    }
}
add_action('widgets_init', 'belco_widgets_init');
