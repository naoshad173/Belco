<?php

/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package belco
 */

/** 
 *
 * belco header
 */

function belco_check_header()
{
    $belco_header_style = function_exists('get_field') ? get_field('header_style') : NULL;
    $belco_default_header_style = get_theme_mod('choose_default_header', 'header-style-1');

    if ($belco_header_style == 'header-style-1' && empty($_GET['s'])) {
        get_template_part('template-parts/header/header-1');
    } elseif ($belco_header_style == 'header-style-2' && empty($_GET['s'])) {
        get_template_part('template-parts/header/header-2');
    } elseif ($belco_header_style == 'header-style-3' && empty($_GET['s'])) {
        get_template_part('template-parts/header/header-3');
    } else {

        /** default header style **/
        if ($belco_default_header_style == 'header-style-2') {
            get_template_part('template-parts/header/header-2');
        } elseif ($belco_default_header_style == 'header-style-3') {
            get_template_part('template-parts/header/header-3');
        } else {
            get_template_part('template-parts/header/header-1');
        }
    }
}
add_action('belco_header_style', 'belco_check_header', 10);


/**
 * [belco_header_lang description]
 * @return [type] [description]
 */
function belco_header_lang_defualt()
{
    $belco_header_lang = get_theme_mod('belco_header_lang', false);
    if ($belco_header_lang) : ?>

        <ul>
            <li><a href="javascript:void(0)" class="lang__btn"><?php print esc_html__('English', 'belco'); ?> <i class="fa-light fa-angle-down"></i></a>
                <?php do_action('belco_language'); ?>
            </li>
        </ul>

    <?php endif; ?>
<?php
}

/**
 * [belco_language_list description]
 * @return [type] [description]
 */
function _belco_language($mar)
{
    return $mar;
}
function belco_language_list()
{

    $mar = '';
    $languages = apply_filters('wpml_active_languages', NULL, 'orderby=id&order=desc');
    if (!empty($languages)) {
        $mar = '<ul>';
        foreach ($languages as $lan) {
            $active = $lan['active'] == 1 ? 'active' : '';
            $mar .= '<li class="' . $active . '"><a href="' . $lan['url'] . '">' . $lan['translated_name'] . '</a></li>';
        }
        $mar .= '</ul>';
    } else {
        //remove this code when send themeforest reviewer team
        $mar .= '<ul>';
        $mar .= '<li><a href="#">' . esc_html__('English', 'belco') . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__('Bangla', 'belco') . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__('French', 'belco') . '</a></li>';
        $mar .= ' </ul>';
    }
    print _belco_language($mar);
}
add_action('belco_language', 'belco_language_list');


// header logo
function belco_header_logo()
{ ?>
    <?php
    $belco_logo_on = function_exists('get_field') ? get_field('is_enable_sec_logo') : NULL;
    $belco_logo = get_template_directory_uri() . '/assets/images/resources/logo-1.png';
    $belco_logo_black = get_template_directory_uri() . '/assets/images/resources/logo-1.png';

    $belco_site_logo = get_theme_mod('logo', $belco_logo);
    $belco_secondary_logo = get_theme_mod('seconday_logo', $belco_logo_black);
    ?>

    <?php if (!empty($belco_logo_on)) : ?>
        <a class="secondary-logo" href="<?php print esc_url(home_url('/')); ?>">
            <img src="<?php print esc_url($belco_secondary_logo); ?>" alt="<?php print esc_attr__('logo', 'belco'); ?>" />
        </a>
    <?php else : ?>
        <a class="standard-logo" href="<?php print esc_url(home_url('/')); ?>">
            <img src="<?php print esc_url($belco_site_logo); ?>" alt="<?php print esc_attr__('logo', 'belco'); ?>" />
        </a>
    <?php endif; ?>
<?php
}

// header logo
function belco_header_sticky_logo()
{ ?>
    <?php
    $belco_logo_black = get_template_directory_uri() . '/assets/images/resources/logo-1.png';
    $belco_secondary_logo = get_theme_mod('seconday_logo', $belco_logo_black);
    ?>
    <a class="sticky-logo" href="<?php print esc_url(home_url('/')); ?>">
        <img src="<?php print esc_url($belco_secondary_logo); ?>" alt="<?php print esc_attr__('logo', 'belco'); ?>" />
    </a>
<?php
}

function belco_mobile_logo()
{
    // side info
    $belco_mobile_logo_hide = get_theme_mod('belco_mobile_logo_hide', false);

    $belco_site_logo = get_theme_mod('logo', get_template_directory_uri() . '/assets/img/logo/logo.png');

?>

    <?php if (!empty($belco_mobile_logo_hide)) : ?>
        <div class="side__logo mb-25">
            <a class="sideinfo-logo" href="<?php print esc_url(home_url('/')); ?>">
                <img src="<?php print esc_url($belco_site_logo); ?>" alt="<?php print esc_attr__('logo', 'belco'); ?>" />
            </a>
        </div>
    <?php endif; ?>



<?php }

/**
 * [belco_header_social_profiles description]
 * @return [type] [description]
 */
function belco_header_social_profiles()
{
    $belco_topbar_fb_url = get_theme_mod('belco_topbar_fb_url', __('#', 'belco'));
    $belco_topbar_twitter_url = get_theme_mod('belco_topbar_twitter_url', __('#', 'belco'));
    $belco_topbar_instagram_url = get_theme_mod('belco_topbar_instagram_url', __('#', 'belco'));
    $belco_topbar_linkedin_url = get_theme_mod('belco_topbar_linkedin_url', __('#', 'belco'));
    $belco_topbar_youtube_url = get_theme_mod('belco_topbar_youtube_url', __('#', 'belco'));
?>
    <ul>
        <?php if (!empty($belco_topbar_fb_url)) : ?>
            <li><a href="<?php print esc_url($belco_topbar_fb_url); ?>"><span><i class="fab fa-facebook-f"></i></span></a></li>
        <?php endif; ?>

        <?php if (!empty($belco_topbar_twitter_url)) : ?>
            <li><a href="<?php print esc_url($belco_topbar_twitter_url); ?>"><span><i class="fab fa-twitter"></i></span></a>
            </li>
        <?php endif; ?>

        <?php if (!empty($belco_topbar_instagram_url)) : ?>
            <li><a href="<?php print esc_url($belco_topbar_instagram_url); ?>"><span><i class="fab fa-instagram"></i></span></a></li>
        <?php endif; ?>

        <?php if (!empty($belco_topbar_linkedin_url)) : ?>
            <li><a href="<?php print esc_url($belco_topbar_linkedin_url); ?>"><span><i class="fab fa-linkedin"></i></span></a>
            </li>
        <?php endif; ?>

        <?php if (!empty($belco_topbar_youtube_url)) : ?>
            <li><a href="<?php print esc_url($belco_topbar_youtube_url); ?>"><span><i class="fab fa-youtube"></i></span></a>
            </li>
        <?php endif; ?>
    </ul>

<?php
}

function belco_footer_social_profiles()
{
    $belco_footer_fb_url = get_theme_mod('belco_footer_fb_url', __('#', 'belco'));
    $belco_footer_twitter_url = get_theme_mod('belco_footer_twitter_url', __('#', 'belco'));
    $belco_footer_instagram_url = get_theme_mod('belco_footer_instagram_url', __('#', 'belco'));
    $belco_footer_linkedin_url = get_theme_mod('belco_footer_linkedin_url', __('#', 'belco'));
    $belco_footer_youtube_url = get_theme_mod('belco_footer_youtube_url', __('#', 'belco'));
?>

    <ul>
        <?php if (!empty($belco_footer_fb_url)) : ?>
            <li>
                <a href="<?php print esc_url($belco_footer_fb_url); ?>">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
        <?php endif; ?>

        <?php if (!empty($belco_footer_twitter_url)) : ?>
            <li>
                <a href="<?php print esc_url($belco_footer_twitter_url); ?>">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
        <?php endif; ?>

        <?php if (!empty($belco_footer_instagram_url)) : ?>
            <li>
                <a href="<?php print esc_url($belco_footer_instagram_url); ?>">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
        <?php endif; ?>

        <?php if (!empty($belco_footer_linkedin_url)) : ?>
            <li>
                <a href="<?php print esc_url($belco_footer_linkedin_url); ?>">
                    <i class="fab fa-linkedin"></i>
                </a>
            </li>
        <?php endif; ?>

        <?php if (!empty($belco_footer_youtube_url)) : ?>
            <li>
                <a href="<?php print esc_url($belco_footer_youtube_url); ?>">
                    <i class="fab fa-youtube"></i>
                </a>
            </li>
        <?php endif; ?>
    </ul>
<?php
}

/**
 * [belco_header_menu description]
 * @return [type] [description]
 */
function belco_header_menu()
{
?>
    <?php
    wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => 'main-menu__list',
        'container'      => '',
        'fallback_cb'    => 'Belco_Navwalker_Class::fallback',
        'walker'         => new Belco_Navwalker_Class,
    ]);
    ?>
<?php
}

/**
 * [belco_header_menu description]
 * @return [type] [description]
 */
function belco_mobile_menu()
{
?>
    <?php
    $belco_menu = wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => '',
        'container'      => '',
        'menu_id'        => 'mobile-menu-active',
        'echo'           => false,
    ]);

    $belco_menu = str_replace("menu-item-has-children", "menu-item-has-children has-children", $belco_menu);
    echo wp_kses_post($belco_menu);
    ?>
<?php
}

/**
 * [belco_search_menu description]
 * @return [type] [description]
 */
function belco_header_search_menu()
{
?>
    <?php
    wp_nav_menu([
        'theme_location' => 'header-search-menu',
        'menu_class'     => '',
        'container'      => '',
        'fallback_cb'    => 'Belco_Navwalker_Class::fallback',
        'walker'         => new Belco_Navwalker_Class,
    ]);
    ?>
<?php
}

/**
 * [belco_footer_menu description]
 * @return [type] [description]
 */
function belco_footer_menu()
{
    wp_nav_menu([
        'theme_location' => 'footer-menu',
        'menu_class'     => 'm-0',
        'container'      => '',
        'fallback_cb'    => 'Belco_Navwalker_Class::fallback',
        'walker'         => new Belco_Navwalker_Class,
    ]);
}


/**
 * [belco_category_menu description]
 * @return [type] [description]
 */
function belco_category_menu()
{
    wp_nav_menu([
        'theme_location' => 'category-menu',
        'menu_class'     => 'cat-submenu m-0',
        'container'      => '',
        'fallback_cb'    => 'Belco_Navwalker_Class::fallback',
        'walker'         => new Belco_Navwalker_Class,
    ]);
}

/**
 *
 * belco footer
 */
add_action('belco_footer_style', 'belco_check_footer', 10);

function belco_check_footer()
{
    $belco_footer_style = function_exists('get_field') ? get_field('footer_style') : NULL;
    $belco_default_footer_style = get_theme_mod('choose_default_footer', 'footer-style-2');

    if ($belco_footer_style == 'footer-style-1') {
        get_template_part('template-parts/footer/footer-1');
    } elseif ($belco_footer_style == 'footer-style-2') {
        get_template_part('template-parts/footer/footer-2');
    } elseif ($belco_footer_style == 'footer-style-3') {
        get_template_part('template-parts/footer/footer-3');
    } elseif ($belco_footer_style == 'footer-style-4') {
        get_template_part('template-parts/footer/footer-4');
    } else {

        /** default footer style **/
        if ($belco_default_footer_style == 'footer-style-2') {
            get_template_part('template-parts/footer/footer-2');
        } elseif ($belco_default_footer_style == 'footer-style-3') {
            get_template_part('template-parts/footer/footer-3');
        } elseif ($belco_default_footer_style == 'footer-style-4') {
            get_template_part('template-parts/footer/footer-4');
        } else {
            get_template_part('template-parts/footer/footer-1');
        }
    }
}

// belco_copyright_text
function belco_copyright_text()
{
    print get_theme_mod('belco_copyright', esc_html__('© 2023 Belco, All Rights Reserved. Design By Intertheme', 'belco'));
}



/**
 *
 * pagination
 */
if (!function_exists('belco_pagination')) {

    function _belco_pagi_callback($pagination)
    {
        return $pagination;
    }

    //page navegation
    function belco_pagination($prev, $next, $pages, $args)
    {
        global $wp_query, $wp_rewrite;
        $menu = '';
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

        if ($pages == '') {
            global $wp_query;
            $pages = $wp_query->max_num_pages;

            if (!$pages) {
                $pages = 1;
            }
        }

        $pagination = [
            'base'      => add_query_arg('paged', '%#%'),
            'format'    => '',
            'total'     => $pages,
            'current'   => $current,
            'prev_text' => $prev,
            'next_text' => $next,
            'type'      => 'array',
        ];

        //rewrite permalinks
        if ($wp_rewrite->using_permalinks()) {
            $pagination['base'] = user_trailingslashit(trailingslashit(remove_query_arg('s', get_pagenum_link(1))) . 'page/%#%/', 'paged');
        }

        if (!empty($wp_query->query_vars['s'])) {
            $pagination['add_args'] = ['s' => get_query_var('s')];
        }

        $pagi = '';
        if (paginate_links($pagination) != '') {
            $paginations = paginate_links($pagination);
            $pagi .= '<ul>';
            foreach ($paginations as $key => $pg) {
                $pagi .= '<li>' . $pg . '</li>';
            }
            $pagi .= '</ul>';
        }

        print _belco_pagi_callback($pagi);
    }
}


// header top bg color
function belco_breadcrumb_bg_color()
{
    $color_code = get_theme_mod('belco_breadcrumb_bg_color', '#222');
    wp_enqueue_style('belco-custom', BELCO_THEME_CSS_DIR . 'belco-custom.css', []);
    if ($color_code != '') {
        $custom_css = '';
        $custom_css .= ".breadcrumb-bg.gray-bg{ background: " . $color_code . "}";

        wp_add_inline_style('belco-breadcrumb-bg', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'belco_breadcrumb_bg_color');

// breadcrumb-spacing top
function belco_breadcrumb_spacing()
{
    $padding_px = get_theme_mod('belco_breadcrumb_spacing', '160px');
    wp_enqueue_style('belco-custom', BELCO_THEME_CSS_DIR . 'belco-custom.css', []);
    if ($padding_px != '') {
        $custom_css = '';
        $custom_css .= ".breadcrumb-spacing{ padding-top: " . $padding_px . "}";

        wp_add_inline_style('belco-breadcrumb-top-spacing', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'belco_breadcrumb_spacing');

// breadcrumb-spacing bottom
function belco_breadcrumb_bottom_spacing()
{
    $padding_px = get_theme_mod('belco_breadcrumb_bottom_spacing', '160px');
    wp_enqueue_style('belco-custom', BELCO_THEME_CSS_DIR . 'belco-custom.css', []);
    if ($padding_px != '') {
        $custom_css = '';
        $custom_css .= ".breadcrumb-spacing{ padding-bottom: " . $padding_px . "}";

        wp_add_inline_style('belco-breadcrumb-bottom-spacing', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'belco_breadcrumb_bottom_spacing');

// scrollup
function belco_scrollup_switch()
{
    $scrollup_switch = get_theme_mod('belco_scrollup_switch', false);
    wp_enqueue_style('belco-custom', BELCO_THEME_CSS_DIR . 'belco-custom.css', []);
    if ($scrollup_switch) {
        $custom_css = '';
        $custom_css .= "#scrollUp{ display: none !important;}";

        wp_add_inline_style('belco-scrollup-switch', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'belco_scrollup_switch');

// theme color
function belco_custom_color()
{
    $color_code = get_theme_mod('belco_color_option', '#2b4eff');
    wp_enqueue_style('belco-custom', BELCO_THEME_CSS_DIR . 'belco-custom.css', []);
    if ($color_code != '') {
        $custom_css = '';
        $custom_css .= ".demo-class { background-color: " . $color_code . "}";

        $custom_css .= ".demo-class { color: " . $color_code . "}";

        $custom_css .= ".demo-class { border-color: " . $color_code . "}";
        $custom_css .= ".demo-class { border-left-color: " . $color_code . "}";
        $custom_css .= ".demo-class { stroke: " . $color_code . "}";
        $custom_css .= ".demo-class { border-color: " . $color_code . "}";
        wp_add_inline_style('belco-custom', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'belco_custom_color');


// theme color
function belco_custom_color_primary()
{
    $color_code = get_theme_mod('belco_color_option_2', '#f2277e');
    wp_enqueue_style('belco-custom', BELCO_THEME_CSS_DIR . 'belco-custom.css', []);
    if ($color_code != '') {
        $custom_css = '';
        $custom_css .= ".demo-class { background-color: " . $color_code . "}";

        $custom_css .= ".demo-class { color: " . $color_code . "}";

        $custom_css .= ".demo-class { border-left-color: " . $color_code . "}";
        wp_add_inline_style('belco-custom', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'belco_custom_color_primary');

// theme color
function belco_custom_color_scrollup()
{
    $color_code = get_theme_mod('belco_color_scrollup', '#2b4eff');
    wp_enqueue_style('belco-custom', BELCO_THEME_CSS_DIR . 'belco-custom.css', []);
    if ($color_code != '') {
        $custom_css = '';
        $custom_css .= ".demo-class { color: " . $color_code . "}";
        $custom_css .= ".demo-class { stroke: " . $color_code . "}";
        wp_add_inline_style('belco-custom', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'belco_custom_color_scrollup');

// theme color
function belco_custom_color_secondary()
{
    $color_code = get_theme_mod('belco_color_option_3', '#30a820');
    wp_enqueue_style('belco-custom', BELCO_THEME_CSS_DIR . 'belco-custom.css', []);
    if ($color_code != '') {
        $custom_css = '';
        $custom_css .= ".demo-class { background-color: " . $color_code . "}";

        $custom_css .= ".demo-class { color: " . $color_code . "}";

        $custom_css .= ".asdf { border-color: " . $color_code . "}";
        wp_add_inline_style('belco-custom', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'belco_custom_color_secondary');

// theme color
function belco_custom_color_secondary_2()
{
    $color_code = get_theme_mod('belco_color_option_3_2', '#ffb352');
    wp_enqueue_style('belco-custom', BELCO_THEME_CSS_DIR . 'belco-custom.css', []);
    if ($color_code != '') {
        $custom_css = '';
        $custom_css .= ".demo-class { background-color: " . $color_code . "}";

        $custom_css .= ".demo-class { color: " . $color_code . "}";

        $custom_css .= ".demo-class { border-color: " . $color_code . "}";
        wp_add_inline_style('belco-custom', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'belco_custom_color_secondary_2');


// belco_kses_intermediate
function belco_kses_intermediate($string = '')
{
    return wp_kses($string, belco_get_allowed_html_tags('intermediate'));
}

function belco_get_allowed_html_tags($level = 'basic')
{
    $allowed_html = [
        'b'      => [],
        'i'      => [],
        'u'      => [],
        'em'     => [],
        'br'     => [],
        'abbr'   => [
            'title' => [],
        ],
        'span'   => [
            'class' => [],
        ],
        'strong' => [],
        'a'      => [
            'href'  => [],
            'title' => [],
            'class' => [],
            'id'    => [],
        ],
    ];

    if ($level === 'intermediate') {
        $allowed_html['a'] = [
            'href' => [],
            'title' => [],
            'class' => [],
            'id' => [],
        ];
        $allowed_html['div'] = [
            'class' => [],
            'id' => [],
        ];
        $allowed_html['img'] = [
            'src' => [],
            'class' => [],
            'alt' => [],
        ];
        $allowed_html['del'] = [
            'class' => [],
        ];
        $allowed_html['ins'] = [
            'class' => [],
        ];
        $allowed_html['bdi'] = [
            'class' => [],
        ];
        $allowed_html['i'] = [
            'class' => [],
            'data-rating-value' => [],
        ];
    }

    return $allowed_html;
}



// WP kses allowed tags
// ----------------------------------------------------------------------------------------
function belco_kses($raw)
{

    $allowed_tags = array(
        'a'                         => array(
            'class'   => array(),
            'href'    => array(),
            'rel'  => array(),
            'title'   => array(),
            'target' => array(),
        ),
        'abbr'                      => array(
            'title' => array(),
        ),
        'b'                         => array(),
        'blockquote'                => array(
            'cite' => array(),
        ),
        'cite'                      => array(
            'title' => array(),
        ),
        'code'                      => array(),
        'del'                    => array(
            'datetime'   => array(),
            'title'      => array(),
        ),
        'dd'                     => array(),
        'div'                    => array(
            'class'   => array(),
            'title'   => array(),
            'style'   => array(),
        ),
        'dl'                     => array(),
        'dt'                     => array(),
        'em'                     => array(),
        'h1'                     => array(),
        'h2'                     => array(),
        'h3'                     => array(),
        'h4'                     => array(),
        'h5'                     => array(),
        'h6'                     => array(),
        'i'                         => array(
            'class' => array(),
        ),
        'img'                    => array(
            'alt'  => array(),
            'class'   => array(),
            'height' => array(),
            'src'  => array(),
            'width'   => array(),
        ),
        'li'                     => array(
            'class' => array(),
        ),
        'ol'                     => array(
            'class' => array(),
        ),
        'p'                         => array(
            'class' => array(),
        ),
        'q'                         => array(
            'cite'    => array(),
            'title'   => array(),
        ),
        'span'                      => array(
            'class'   => array(),
            'title'   => array(),
            'style'   => array(),
        ),
        'iframe'                 => array(
            'width'         => array(),
            'height'     => array(),
            'scrolling'     => array(),
            'frameborder'   => array(),
            'allow'         => array(),
            'src'        => array(),
        ),
        'strike'                 => array(),
        'br'                     => array(),
        'strong'                 => array(),
        'data-wow-duration'            => array(),
        'data-wow-delay'            => array(),
        'data-wallpaper-options'       => array(),
        'data-stellar-background-ratio'   => array(),
        'ul'                     => array(
            'class' => array(),
        ),
        'svg' => array(
            'class' => true,
            'aria-hidden' => true,
            'aria-labelledby' => true,
            'role' => true,
            'xmlns' => true,
            'width' => true,
            'height' => true,
            'viewbox' => true, // <= Must be lower case!
        ),
        'g'     => array('fill' => true),
        'title' => array('title' => true),
        'path'  => array('d' => true, 'fill' => true,),
    );

    if (function_exists('wp_kses')) { // WP is here
        $allowed = wp_kses($raw, $allowed_tags);
    } else {
        $allowed = $raw;
    }

    return $allowed;
}
