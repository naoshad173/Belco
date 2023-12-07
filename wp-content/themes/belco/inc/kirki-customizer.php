<?php

/**
 * belco customizer
 *
 * @package belco
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Added Panels & Sections
 */
function belco_customizer_panels_sections($wp_customize)
{

    //Add panel
    $wp_customize->add_panel('belco_customizer', [
        'priority' => 10,
        'title'    => esc_html__('Belco Customizer', 'belco'),
    ]);

    /**
     * Customizer Section
     */
    $wp_customize->add_section('header_top_setting', [
        'title'       => esc_html__('Header Info Setting', 'belco'),
        'description' => '',
        'priority'    => 10,
        'capability'  => 'edit_theme_options',
        'panel'       => 'belco_customizer',
    ]);

    $wp_customize->add_section('header_submenu', [
        'title'       => esc_html__('Top Header Submenu', 'belco'),
        'description' => '',
        'priority'    => 11,
        'capability'  => 'edit_theme_options',
        'panel'       => 'belco_customizer',
    ]);

    $wp_customize->add_section('header_social', [
        'title'       => esc_html__('Header Social', 'belco'),
        'description' => '',
        'priority'    => 11,
        'capability'  => 'edit_theme_options',
        'panel'       => 'belco_customizer',
    ]);

    $wp_customize->add_section('section_header_logo', [
        'title'       => esc_html__('Header Setting', 'belco'),
        'description' => '',
        'priority'    => 12,
        'capability'  => 'edit_theme_options',
        'panel'       => 'belco_customizer',
    ]);

    $wp_customize->add_section('blog_setting', [
        'title'       => esc_html__('Blog Setting', 'belco'),
        'description' => '',
        'priority'    => 13,
        'capability'  => 'edit_theme_options',
        'panel'       => 'belco_customizer',
    ]);

    $wp_customize->add_section('header_side_setting', [
        'title'       => esc_html__('Side Info', 'belco'),
        'description' => '',
        'priority'    => 14,
        'capability'  => 'edit_theme_options',
        'panel'       => 'belco_customizer',
    ]);

    $wp_customize->add_section('breadcrumb_setting', [
        'title'       => esc_html__('Breadcrumb Setting', 'belco'),
        'description' => '',
        'priority'    => 15,
        'capability'  => 'edit_theme_options',
        'panel'       => 'belco_customizer',
    ]);

    $wp_customize->add_section('blog_setting', [
        'title'       => esc_html__('Blog Setting', 'belco'),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'belco_customizer',
    ]);

    $wp_customize->add_section('footer_setting', [
        'title'       => esc_html__('Footer Settings', 'belco'),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'belco_customizer',
    ]);

    $wp_customize->add_section('color_setting', [
        'title'       => esc_html__('Color Setting', 'belco'),
        'description' => '',
        'priority'    => 17,
        'capability'  => 'edit_theme_options',
        'panel'       => 'belco_customizer',
    ]);

    $wp_customize->add_section('404_page', [
        'title'       => esc_html__('404 Page', 'belco'),
        'description' => '',
        'priority'    => 18,
        'capability'  => 'edit_theme_options',
        'panel'       => 'belco_customizer',
    ]);

    $wp_customize->add_section('typo_setting', [
        'title'       => esc_html__('Typography Setting', 'belco'),
        'description' => '',
        'priority'    => 21,
        'capability'  => 'edit_theme_options',
        'panel'       => 'belco_customizer',
    ]);

    $wp_customize->add_section('slug_setting', [
        'title'       => esc_html__('Slug Settings', 'belco'),
        'description' => '',
        'priority'    => 22,
        'capability'  => 'edit_theme_options',
        'panel'       => 'belco_customizer',
    ]);
}

add_action('customize_register', 'belco_customizer_panels_sections');

function _header_top_fields($fields)
{
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'belco_topbar_switch',
        'label'    => esc_html__('Topbar Swicher', 'belco'),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'belco_preloader',
        'label'    => esc_html__('Preloader On/Off', 'belco'),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
    ];


    $fields[] = [
        'type'     => 'switch',
        'settings' => 'belco_backtotop',
        'label'    => esc_html__('Back To Top On/Off', 'belco'),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'belco_header_right',
        'label'    => esc_html__('Header Right On/Off', 'belco'),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'belco_search',
        'label'    => esc_html__('Header Search On/Off', 'belco'),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'belco_header_lang',
        'label'    => esc_html__('language On/Off', 'belco'),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
    ];

    // phone
    $fields[] = [
        'type'     => 'text',
        'settings' => 'belco_phone_num',
        'label'    => esc_html__('Phone Number', 'belco'),
        'section'  => 'header_top_setting',
        'default'  => esc_html__('+1 212 333 400', 'belco'),
        'priority' => 10,
    ];

    // email
    $fields[] = [
        'type'     => 'text',
        'settings' => 'belco_mail_id',
        'label'    => esc_html__('Mail ID', 'belco'),
        'section'  => 'header_top_setting',
        'default'  => esc_html__('info@belco.com', 'belco'),
        'priority' => 10,
    ];

    // time
    $fields[] = [
        'type'     => 'text',
        'settings' => 'belco_time',
        'label'    => esc_html__('Time', 'belco'),
        'section'  => 'header_top_setting',
        'default'  => esc_html__('Mon to Fri: 9:00am to 6:00pm', 'belco'),
        'priority' => 10,
    ];

    // address
    $fields[] = [
        'type'     => 'text',
        'settings' => 'belco_address',
        'label'    => esc_html__('Address', 'belco'),
        'section'  => 'header_top_setting',
        'default'  => esc_html__('88 Broklyn Golden Street. New York', 'belco'),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'belco_address_url',
        'label'    => esc_html__('Address URL', 'belco'),
        'section'  => 'header_top_setting',
        'default'  => esc_html__('https://goo.gl/maps/qzqY2PAcQwUz1BYN9', 'belco'),
        'priority' => 10,
    ];

    // header button
    $fields[] = [
        'type'     => 'text',
        'settings' => 'belco_button_text',
        'label'    => esc_html__('Header Button Text', 'belco'),
        'section'  => 'header_top_setting',
        'default'  => esc_html__('Get Consulting', 'belco'),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'link',
        'settings' => 'belco_button_link',
        'label'    => esc_html__('Header Button URL', 'belco'),
        'section'  => 'header_top_setting',
        'default'  => esc_html__('#', 'belco'),
        'priority' => 10,
    ];

    return $fields;
}
add_filter('kirki/fields', '_header_top_fields');

/*
Header Social
 */
function _header_social_fields($fields)
{
    // header section social

    $fields[] = [
        'type'     => 'text',
        'settings' => 'belco_topbar_twitter_url',
        'label'    => esc_html__('Twitter Url', 'belco'),
        'section'  => 'header_social',
        'default'  => esc_html__('#', 'belco'),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'belco_topbar_fb_url',
        'label'    => esc_html__('Facebook Url', 'belco'),
        'section'  => 'header_social',
        'default'  => esc_html__('#', 'belco'),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'belco_topbar_pinterest_url',
        'label'    => esc_html__('Pinterest Url', 'belco'),
        'section'  => 'header_social',
        'default'  => esc_html__('#', 'belco'),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'belco_topbar_instagram_url',
        'label'    => esc_html__('Instagram Url', 'belco'),
        'section'  => 'header_social',
        'default'  => esc_html__('#', 'belco'),
        'priority' => 10,
    ];

    return $fields;
}
add_filter('kirki/fields', '_header_social_fields');
/*
Top Header Menu
 */
function _header_submenu_fields($fields)
{
    // header submenu social

    $fields[] = [
        'type'     => 'text',
        'settings' => 'belco_topbar_about_url',
        'label'    => esc_html__('About Url', 'belco'),
        'section'  => 'header_submenu',
        'default'  => esc_html__('#', 'belco'),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'belco_topbar_about_text',
        'label'    => esc_html__('About Text', 'belco'),
        'section'  => 'header_submenu',
        'default'  => esc_html__('about', 'belco'),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'belco_topbar_faqs_url',
        'label'    => esc_html__('Faqs Url', 'belco'),
        'section'  => 'header_submenu',
        'default'  => esc_html__('#', 'belco'),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'belco_topbar_faqs_text',
        'label'    => esc_html__('Faqs Text', 'belco'),
        'section'  => 'header_submenu',
        'default'  => esc_html__('Faqs', 'belco'),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'belco_topbar_contact_url',
        'label'    => esc_html__('Contact Url', 'belco'),
        'section'  => 'header_submenu',
        'default'  => esc_html__('#', 'belco'),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'belco_topbar_contact_text',
        'label'    => esc_html__('Contact Text', 'belco'),
        'section'  => 'header_submenu',
        'default'  => esc_html__('Contact', 'belco'),
        'priority' => 10,
    ];

    return $fields;
}
add_filter('kirki/fields', '_header_submenu_fields');

/*
Header Settings
 */
function _header_header_fields($fields)
{
    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'choose_default_header',
        'label'       => esc_html__('Select Header Style', 'belco'),
        'section'     => 'section_header_logo',
        'placeholder' => esc_html__('Select an option...', 'belco'),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'header-style-1'   => get_template_directory_uri() . '/inc/img/header/header-1.png',
            'header-style-2' => get_template_directory_uri() . '/inc/img/header/header-2.png',
            'header-style-3'  => get_template_directory_uri() . '/inc/img/header/header-3.png'
        ],
        'default'     => 'header-style-1',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'logo',
        'label'       => esc_html__('Header Logo', 'belco'),
        'description' => esc_html__('Upload Your Logo.', 'belco'),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/images/resources/logo-1.png',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'seconday_logo',
        'label'       => esc_html__('Header Secondary Logo', 'belco'),
        'description' => esc_html__('Header Logo Black', 'belco'),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo-2.png',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'preloader_logo',
        'label'       => esc_html__('Preloader Logo', 'belco'),
        'description' => esc_html__('Upload Preloader Logo.', 'belco'),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/favicon.png',
    ];

    return $fields;
}
add_filter('kirki/fields', '_header_header_fields');

/*
Header Side Info
 */
function _header_side_fields($fields)
{
    // side info settings
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'belco_side_hide',
        'label'    => esc_html__('Side Info On/Off', 'belco'),
        'section'  => 'header_side_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
    ];
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'belco_side_logo',
        'label'       => esc_html__('Logo Side', 'belco'),
        'description' => esc_html__('Logo Side', 'belco'),
        'section'     => 'header_side_setting',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'belco_extra_about_text',
        'label'    => esc_html__('Side Description Text', 'belco'),
        'section'  => 'header_side_setting',
        'default'  => esc_html__('But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and will give you a complete account of the system and expound the actual teachings of the great explore', 'belco'),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'belco_extra_map',
        'label'    => esc_html__('Map Address Iframe', 'belco'),
        'section'  => 'header_side_setting',
        'default'  => esc_html__('#', 'belco'),
        'priority' => 10,
    ];

    // contact
    $fields[] = [
        'type'     => 'text',
        'settings' => 'belco_contact_title',
        'label'    => esc_html__('Contact Title', 'belco'),
        'section'  => 'header_side_setting',
        'default'  => esc_html__('Contact Title', 'belco'),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'belco_extra_address',
        'label'    => esc_html__('Office Address', 'belco'),
        'section'  => 'header_side_setting',
        'default'  => esc_html__('12/A, Mirnada City Tower, NYC', 'belco'),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'belco_extra_phone',
        'label'    => esc_html__('Phone Number', 'belco'),
        'section'  => 'header_side_setting',
        'default'  => esc_html__('+0989 7876 9865 9', 'belco'),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'belco_extra_email',
        'label'    => esc_html__('Email ID', 'belco'),
        'section'  => 'header_side_setting',
        'default'  => esc_html__('info@themepure.net', 'belco'),
        'priority' => 10,
    ];
    return $fields;
}
add_filter('kirki/fields', '_header_side_fields');

/*
_header_page_title_fields
 */
function _header_page_title_fields($fields)
{
    // Breadcrumb Setting
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'breadcrumb_bg_img',
        'label'       => esc_html__('Breadcrumb Background Image', 'belco'),
        'description' => esc_html__('Breadcrumb Background Image', 'belco'),
        'section'     => 'breadcrumb_setting',
        'default'     => get_template_directory_uri() . '/assets/images/backgrounds/page-header-bg.jpg',
    ];
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'belco_breadcrumb_bg_color',
        'label'       => __('Breadcrumb BG Color', 'belco'),
        'description' => esc_html__('This is a Breadcrumb bg color control.', 'belco'),
        'section'     => 'breadcrumb_setting',
        'default'     => '#f4f9fc',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'breadcrumb_info_switch',
        'label'    => esc_html__('Breadcrumb Info switch', 'belco'),
        'section'  => 'breadcrumb_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
    ];

    return $fields;
}
add_filter('kirki/fields', '_header_page_title_fields');

/*
Header Social
 */
function _header_blog_fields($fields)
{
    // Blog Setting
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'belco_blog_btn_switch',
        'label'    => esc_html__('Blog BTN On/Off', 'belco'),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'belco_blog_cat',
        'label'    => esc_html__('Blog Category Meta On/Off', 'belco'),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'belco_blog_author',
        'label'    => esc_html__('Blog Author Meta On/Off', 'belco'),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'belco_blog_date',
        'label'    => esc_html__('Blog Date Meta On/Off', 'belco'),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'belco_blog_comments',
        'label'    => esc_html__('Blog Comments Meta On/Off', 'belco'),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'belco_blog_btn',
        'label'    => esc_html__('Blog Button text', 'belco'),
        'section'  => 'blog_setting',
        'default'  => esc_html__('Read More', 'belco'),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title',
        'label'    => esc_html__('Blog Title', 'belco'),
        'section'  => 'blog_setting',
        'default'  => esc_html__('Blog', 'belco'),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title_details',
        'label'    => esc_html__('Blog Details Title', 'belco'),
        'section'  => 'blog_setting',
        'default'  => esc_html__('Blog Details', 'belco'),
        'priority' => 10,
    ];
    return $fields;
}
add_filter('kirki/fields', '_header_blog_fields');

/*
Footer
 */
function _header_footer_fields($fields)
{
    // Footer Setting
    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'choose_default_footer',
        'label'       => esc_html__('Choose Footer Style', 'belco'),
        'section'     => 'footer_setting',
        'default'     => '5',
        'placeholder' => esc_html__('Select an option...', 'belco'),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'footer-style-1'   => get_template_directory_uri() . '/inc/img/footer/footer-1.png',
            'footer-style-2' => get_template_directory_uri() . '/inc/img/footer/footer-2.png',
            'footer-style-2' => get_template_directory_uri() . '/inc/img/footer/footer-3.png',
        ],
        'default'     => 'footer-style-1',
    ];

    $fields[] = [
        'type'        => 'select',
        'settings'    => 'footer_widget_number',
        'label'       => esc_html__('Widget Number', 'belco'),
        'section'     => 'footer_setting',
        'default'     => '4',
        'placeholder' => esc_html__('Select an option...', 'belco'),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            '4' => esc_html__('Widget Number 4', 'belco'),
            '3' => esc_html__('Widget Number 3', 'belco'),
            '2' => esc_html__('Widget Number 2', 'belco'),
        ],
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'belco_footer_bg',
        'label'       => esc_html__('Footer Background Image.', 'belco'),
        'description' => esc_html__('Footer Background Image.', 'belco'),
        'section'     => 'footer_setting',
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'belco_footer_bg_color',
        'label'       => __('Footer BG Color', 'belco'),
        'description' => esc_html__('This is a Footer bg color control.', 'belco'),
        'section'     => 'footer_setting',
        'default'     => '#f4f9fc',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_2_switch',
        'label'    => esc_html__('Footer Style 2 On/Off', 'belco'),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_3_switch',
        'label'    => esc_html__('Footer Style 3 On/Off', 'belco'),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_4_switch',
        'label'    => esc_html__('Footer Style 4 On/Off', 'belco'),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'belco_copyright',
        'label'    => esc_html__('Copy Right', 'belco'),
        'section'  => 'footer_setting',
        'default'  => esc_html__('Copyright &copy; 2023 Intertheme. All Rights Reserved', 'belco'),
        'priority' => 10,
    ];
    return $fields;
}
add_filter('kirki/fields', '_header_footer_fields');

// color
function belco_color_fields($fields)
{
    // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'belco_color_option',
        'label'       => __('Theme Color', 'belco'),
        'description' => esc_html__('This is a Theme color control.', 'belco'),
        'section'     => 'color_setting',
        'default'     => '#2b4eff',
        'priority'    => 10,
    ];
    // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'belco_color_option_2',
        'label'       => __('Primary Color', 'belco'),
        'description' => esc_html__('This is a Primary color control.', 'belco'),
        'section'     => 'color_setting',
        'default'     => '#f2277e',
        'priority'    => 10,
    ];
    // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'belco_color_option_3',
        'label'       => __('Secondary Color', 'belco'),
        'description' => esc_html__('This is a Secondary color control.', 'belco'),
        'section'     => 'color_setting',
        'default'     => '#30a820',
        'priority'    => 10,
    ];
    // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'belco_color_option_3_2',
        'label'       => __('Secondary Color 2', 'belco'),
        'description' => esc_html__('This is a Secondary color 2 control.', 'belco'),
        'section'     => 'color_setting',
        'default'     => '#ffb352',
        'priority'    => 10,
    ];
    // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'belco_color_scrollup',
        'label'       => __('ScrollUp Color', 'belco'),
        'description' => esc_html__('This is a ScrollUp colo control.', 'belco'),
        'section'     => 'color_setting',
        'default'     => '#2b4eff',
        'priority'    => 10,
    ];

    return $fields;
}
add_filter('kirki/fields', 'belco_color_fields');

// 404
function belco_404_fields($fields)
{
    // 404 settings
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'belco_404_bg',
        'label'       => esc_html__('404 Image.', 'belco'),
        'description' => esc_html__('404 Image.', 'belco'),
        'section'     => '404_page',
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'belco_error_title',
        'label'    => esc_html__('Not Found Title', 'belco'),
        'section'  => '404_page',
        'default'  => esc_html__('Page not found', 'belco'),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'belco_error_desc',
        'label'    => esc_html__('404 Description Text', 'belco'),
        'section'  => '404_page',
        'default'  => esc_html__('Oops! The page you are looking for does not exist. It might have been moved or deleted', 'belco'),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'belco_error_link_text',
        'label'    => esc_html__('404 Link Text', 'belco'),
        'section'  => '404_page',
        'default'  => esc_html__('Back To Home', 'belco'),
        'priority' => 10,
    ];
    return $fields;
}
add_filter('kirki/fields', 'belco_404_fields');

// course_settings
function belco_learndash_fields($fields)
{

    $fields[] = [
        'type'     => 'number',
        'settings' => 'belco_learndash_post_number',
        'label'    => esc_html__('Learndash Post Per page', 'belco'),
        'section'  => 'learndash_course_settings',
        'default'  => 6,
        'priority' => 10,
    ];

    $fields[] = [
        'type'        => 'select',
        'settings'    => 'belco_learndash_order',
        'label'       => esc_html__('Post Order', 'belco'),
        'section'     => 'learndash_course_settings',
        'default'     => 'DESC',
        'placeholder' => esc_html__('Select an option...', 'belco'),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'ASC' => esc_html__('ASC', 'belco'),
            'DESC' => esc_html__('DESC', 'belco'),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'belco_learndash_related',
        'label'    => esc_html__('Show Related?', 'belco'),
        'section'  => 'learndash_course_settings',
        'default'  => 1,
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
    ];

    return $fields;
}

if (class_exists('SFWD_LMS')) {
    add_filter('kirki/fields', 'belco_learndash_fields');
}


// tutor_course_settings
function belco_tutor_course_fields($fields)
{
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'belco_tutor_course_details_author_meta_switch',
        'label'    => esc_html__('Tutor Course Details Author Meta', 'belco'),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'belco_tutor_course_details_payment_switch',
        'label'    => esc_html__('Tutor Course Details Payment', 'belco'),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'belco_tutor_course_desc_tab_switch',
        'label'    => esc_html__('Tutor Course Description Tab Swicher', 'belco'),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'belco_tutor_course_curriculum_tab_switch',
        'label'    => esc_html__('Tutor Course Curriculum Tab Swicher', 'belco'),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'belco_tutor_course_reviews_tab_switch',
        'label'    => esc_html__('Tutor Course Reviews Tab Swicher', 'belco'),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'belco_tutor_course_instructor_tab_switch',
        'label'    => esc_html__('Tutor Course Instructor Tab Swicher', 'belco'),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
    ];
    return $fields;
}

if (function_exists('tutor')) {
    add_filter('kirki/fields', 'belco_tutor_course_fields');
}


/**
 * Added Fields
 */
function belco_typo_fields($fields)
{
    // typography settings
    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_body_setting',
        'label'       => esc_html__('Body Font', 'belco'),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'body',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h_setting',
        'label'       => esc_html__('Heading h1 Fonts', 'belco'),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h1',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h2_setting',
        'label'       => esc_html__('Heading h2 Fonts', 'belco'),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h2',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h3_setting',
        'label'       => esc_html__('Heading h3 Fonts', 'belco'),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h3',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h4_setting',
        'label'       => esc_html__('Heading h4 Fonts', 'belco'),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h4',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h5_setting',
        'label'       => esc_html__('Heading h5 Fonts', 'belco'),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h5',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h6_setting',
        'label'       => esc_html__('Heading h6 Fonts', 'belco'),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h6',
            ],
        ],
    ];
    return $fields;
}

add_filter('kirki/fields', 'belco_typo_fields');


// course_settings
function belco_course_fields($fields)
{

    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'course_style',
        'label'       => esc_html__('Select Course Style', 'belco'),
        'section'     => 'tutor_course_settings',
        'default'     => '5',
        'placeholder' => esc_html__('Select an option...', 'belco'),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'standard'   => get_template_directory_uri() . '/inc/img/course/course-1.jpg',
            'course_with_sidebar' => get_template_directory_uri() . '/inc/img/course/course-2.jpg',
            'course_solid'  => get_template_directory_uri() . '/inc/img/course/course-3.jpg',
        ],
        'default'     => 'standard',
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_search_switch',
        'label'    => esc_html__('Show search?', 'belco'),
        'section'  => 'tutor_course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_latest_post_switch',
        'label'    => esc_html__('Show latest post?', 'belco'),
        'section'  => 'tutor_course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_category_switch',
        'label'    => esc_html__('Show category filter?', 'belco'),
        'section'  => 'tutor_course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_skill_switch',
        'label'    => esc_html__('Show skill filter?', 'belco'),
        'section'  => 'tutor_course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'belco'),
            'off' => esc_html__('Disable', 'belco'),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    return $fields;
}

add_filter('kirki/fields', 'belco_course_fields');




/**
 * Added Fields
 */
function belco_slug_setting($fields)
{
    // slug settings
    $fields[] = [
        'type'     => 'text',
        'settings' => 'belco_ev_slug',
        'label'    => esc_html__('Event Slug', 'belco'),
        'section'  => 'slug_setting',
        'default'  => esc_html__('ourevent', 'belco'),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'belco_port_slug',
        'label'    => esc_html__('Portfolio Slug', 'belco'),
        'section'  => 'slug_setting',
        'default'  => esc_html__('ourportfolio', 'belco'),
        'priority' => 10,
    ];

    return $fields;
}

add_filter('kirki/fields', 'belco_slug_setting');


/**
 * This is a short hand function for getting setting value from customizer
 *
 * @param string $name
 *
 * @return bool|string
 */
function belco_THEME_option($name)
{
    $value = '';
    if (class_exists('belco')) {
        $value = Kirki::get_option(belco_get_theme(), $name);
    }

    return apply_filters('belco_THEME_option', $value, $name);
}

/**
 * Get config ID
 *
 * @return string
 */
function belco_get_theme()
{
    return 'belco';
}
