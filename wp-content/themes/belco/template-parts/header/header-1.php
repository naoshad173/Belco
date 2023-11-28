<?php

/**
 * Template part for displaying header layout one
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package belco
 */

// info
 
$belco_topbar_switch = get_theme_mod('belco_topbar_switch', false); 
$belco_mail_id = get_theme_mod('belco_mail_id', __('info@belco.com', 'belco'));
$belco_time = get_theme_mod('belco_time', __('Mon to Fri: 9:00am to 6:00pm', 'belco'));
$belco_address = get_theme_mod('belco_address', __('88 Broklyn Golden Street. New York', 'belco')); 
$belco_phone_num = get_theme_mod('belco_phone_num', __('+1212333400', 'belco'));

// header social
$belco_topbar_twitter_url = get_theme_mod('belco_topbar_twitter_url', __('#', 'belco'));
$belco_topbar_fb_url = get_theme_mod('belco_topbar_fb_url', __('#', 'belco'));
$belco_topbar_pinterest_url = get_theme_mod('belco_topbar_pinterest_url', __('#', 'belco'));
$belco_topbar_instagram_url = get_theme_mod('belco_topbar_instagram_url', __('#', 'belco')); 
 
// topbar custom menu
$belco_topbar_about_url = get_theme_mod('belco_topbar_about_url', __('#', 'belco'));
$belco_topbar_about_text = get_theme_mod('belco_topbar_about_text', __('About', 'belco'));
$belco_topbar_faqs_url = get_theme_mod('belco_topbar_faqs_url', __('#', 'belco'));
$belco_topbar_faqs_text = get_theme_mod('belco_topbar_faqs_text', __('Faqs', 'belco'));
$belco_topbar_contact_url = get_theme_mod('belco_topbar_contact_url', __('#', 'belco')); 
$belco_topbar_contact_text = get_theme_mod('belco_topbar_contact_text', __('Contact', 'belco')); 
  
// contact button
$belco_button_text = get_theme_mod('belco_button_text', __('Get Consulting', 'belco'));
$belco_button_link = get_theme_mod('belco_button_link', __('#', 'belco'));
 
// header right
$belco_header_right = get_theme_mod('belco_header_right', false);
$belco_menu_col = $belco_header_right ? 'col-xxl-7 col-xl-7 col-lg-8 d-none d-lg-block' : 'col-xxl-10 col-xl-10 col-lg-9 d-none d-lg-block text-end';

?>

<header class="main-header">
<?php if (!empty($belco_topbar_switch)) : ?>
    <div class="main-header__top">
        <div class="container">
            <div class="main-header__top-inner">
                <div class="main-header__top-left">
                    <ul class="list-unstyled main-header__contact-list">
                        <li>
                            <div class="icon">
                                <i class="fa-light fa-clock"></i>
                            </div>
                            <?php if (!empty($belco_time)) : ?>
                            <div class="text">
                                <p><?php echo esc_html($belco_time); ?></p>
                            </div>
                            <?php endif; ?>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa-light fa-envelope"></i>
                            </div>  
                            <?php if (!empty($belco_mail_id)) : ?>
                            <div class="text">
                                <p><a href="mailto:<?php echo esc_attr('$belco_mail_id', 'belco'); ?>"><?php echo esc_html($belco_mail_id);?></a></p>
                            </div>
                            <?php endif; ?>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa-sharp fa-light fa-location-dot"></i>
                            </div>
                            <?php if (!empty($belco_address)) : ?>
                            <div class="text">
                                <p><?php echo esc_html($belco_address); ?></p>
                            </div>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
                <div class="main-header__top-right">
                    <ul class="list-unstyled main-header__top-menu">
                    <?php if (!empty($belco_topbar_about_text)) : ?>
                        <li><a href="<?php echo esc_html($belco_topbar_about_url); ?>"><?php echo esc_html($belco_topbar_about_text); ?></a></li>
                        <?php endif; ?>
                        <?php if (!empty($belco_topbar_faqs_text)) : ?>
                        <li><a href="<?php echo esc_html($belco_topbar_faqs_url); ?>"><?php echo esc_html($belco_topbar_faqs_text); ?></a></li>
                        <?php endif; ?>
                        <?php if (!empty($belco_topbar_contact_text)) : ?>
                        <li><a class="border-none" href="<?php echo esc_html($belco_topbar_contact_url); ?>"><?php echo esc_html($belco_topbar_contact_text); ?></a></li>
                        <?php endif; ?>
                    </ul>
                    <div class="main-header__social"> 
                        <?php if (!empty($belco_topbar_twitter_url)) : ?>
                        <a href="<?php echo esc_html($belco_topbar_twitter_url); ?>"><i class="fa-brands fa-x-twitter"></i></a>
                        <?php endif; ?>
                        <?php if (!empty($belco_topbar_fb_url)) : ?>
                        <a href="<?php echo esc_html($belco_topbar_fb_url); ?>"><i class="fa-brands fa-facebook-f"></i></a>
                        <?php endif; ?>
                        <?php if (!empty($belco_topbar_pinterest_url)) : ?>
                        <a href="<?php echo esc_html($belco_topbar_pinterest_url); ?>"><i class="fab fa-pinterest-p"></i></a>
                        <?php endif; ?>
                        <?php if (!empty($belco_topbar_instagram_url)) : ?>
                        <a href="<?php echo esc_html($belco_topbar_instagram_url); ?>"><i class="fab fa-instagram"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <nav class="main-menu">
        <div class="main-menu__wrapper">
            <div class="container">
                <div class="main-menu__wrapper-inner">
                    <div class="main-menu__logo">
                        <?php belco_header_logo();?>
                    </div>
                    <div class="main-menu__main-menu-box">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <?php belco_header_menu(); ?>
                    </div>
                    <?php if (!empty($belco_header_right)) : ?>
                    <div class="main-menu__right">
                        <div class="main-menu__call">
                            <div class="main-menu__call-icon">
                                <i class="fa-light fa-phone-volume"></i>
                            </div>
                            <?php if (!empty($belco_phone_num)) : ?>
                            <div class="main-menu__call-content">
                                <p class="main-menu__call-sub-title"><?php echo esc_html('Need help?', 'belco');?></p>
                                <h5 class="main-menu__call-number"><a href="tel:<?php echo esc_attr($belco_phone_num); ?>"><?php echo esc_html($belco_phone_num); ?></a>
                                </h5>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php if (!empty($belco_button_text)) : ?>
                        <div class="main-menu__btn-box">
                            <a href="<?php echo esc_html($belco_button_link); ?>"
                                class="main-menu__btn thm-btn"><?php echo esc_html($belco_button_text); ?></a>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div>
    <!-- /.sticky-header__content -->
</div>
<!-- /.stricky-header -->
<div class="mobile-nav__wrapper">
      <div class="mobile-nav__overlay mobile-nav__toggler"></div>
      <!-- /.mobile-nav__overlay -->
      <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
        <?php belco_header_logo();?>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
          <li>
            <i class="fa fa-envelope"></i>  
            <?php if (!empty($belco_mail_id)) : ?> 
            <a href="mailto:<?php echo esc_attr('$belco_mail_id', 'belco'); ?>"><?php echo esc_html($belco_mail_id);?></a>
            <?php endif; ?>
          </li>
          <?php if (!empty($belco_phone_num)) : ?>
          <li>
            <i class="fa fa-phone-alt"></i>
            <a href="tel:<?php echo esc_attr($belco_phone_num); ?>"><?php echo esc_html($belco_phone_num); ?></a>
          </li>
          <?php endif; ?>
        </ul>
        <!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
          <div class="mobile-nav__social">
          <?php if (!empty($belco_topbar_twitter_url)) : ?>
                <a href="<?php echo esc_html($belco_topbar_twitter_url); ?>"><i class="fa-brands fa-x-twitter"></i></a>
                <?php endif; ?>
                <?php if (!empty($belco_topbar_fb_url)) : ?>
                <a href="<?php echo esc_html($belco_topbar_fb_url); ?>"><i class="fa-brands fa-facebook-f"></i></a>
                <?php endif; ?>
                <?php if (!empty($belco_topbar_pinterest_url)) : ?>
                <a href="<?php echo esc_html($belco_topbar_pinterest_url); ?>"><i class="fab fa-pinterest-p"></i></a>
                <?php endif; ?>
                <?php if (!empty($belco_topbar_instagram_url)) : ?>
                <a href="<?php echo esc_html($belco_topbar_instagram_url); ?>"><i class="fab fa-instagram"></i></a>
                <?php endif; ?>
          </div>
          <!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__top -->
      </div>
      <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper --> 
   