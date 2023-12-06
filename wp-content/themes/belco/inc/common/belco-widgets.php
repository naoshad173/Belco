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
        'before_widget' => '<div id="%1$s" class="sidebar__category-list sidebar__tag sidebar__gallery b-60 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="sidebar__title-box"><h3 class="sidebar__title">',
        'after_title'   => '</h3></div>',
    ]);

    $footer_widgets = get_theme_mod('footer_widget_number', 4);

    // footer default
    for ($num = 1; $num <= $footer_widgets; $num++) {
        register_sidebar([
            'name'          => sprintf(esc_html__('Footer %1$s', 'belco'), $num),
            'id'            => 'footer-' . $num,
            'description'   => sprintf(esc_html__('Footer %1$s', 'belco'), $num),
            'before_widget' => '<div id="%1$s" class="footer-widget__column footer-widget__newsletter footer-widget__about footer__col-' . $num . ' mb-50 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="footer-widget__title menu-title">',
            'after_title'   => '</h3>',
        ]);
    }

    // footer 2
    if ($footer_style_2_switch) {
        for ($num = 1; $num <= $footer_widgets; $num++) {

            register_sidebar([
                'name'          => sprintf(esc_html__('Footer Style 2 : %1$s', 'belco'), $num),
                'id'            => 'footer-2-' . $num,
                'description'   => sprintf(esc_html__('Footer Style 2 : %1$s', 'belco'), $num),
                'before_widget' => '<div id="%1$s" class="menu-custom footer-margin-cs footer-widget-two__column ul li a footer-widget-two__about footer-widget-two__portfolio footer-widget-two__company footer-widget-two__contact footer-col-2-' . $num . 'mb-50 %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="footer-widget-two__title title-custom footer-widget-two__title-box">',
                'after_title'   => '</h3>',
            ]);
        }
    }
}
add_action('widgets_init', 'belco_widgets_init');
