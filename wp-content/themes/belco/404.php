<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package belco
 */

get_header();
?>

<!--Error Page Start-->
<section class="error-page">
   <div class="error-page-shape-one float-bob-x">
      <img src="assets/images/shapes/error-page-shape-1.png" alt="" />
   </div>
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <?php
            $belco_error_title = get_theme_mod('error-page__title', __('404', 'belco'));
            $belco_error_subtitle = get_theme_mod('error-page__title', __('404', 'belco'));
            $belco_error_link_text = get_theme_mod('belco_error_link_text', __('Back to home', 'belco'));
            $belco_error_desc = get_theme_mod('belco_error_desc', __('The page you are looking for was never existed.', 'belco'));
            ?>
            <div class="error-page__inner">
               <div class="error-page__title-box">
                  <h2 class="error-page__title"><?php print esc_html($belco_error_title); ?></h2>
               </div>
               <h3 class="error-page__tagline">Sorry we can't find that page!</h3>
               <p class="error-page__text"><?php print esc_html($belco_error_desc); ?></p>
               <form class="error-page__form">
                  <div class="error-page__form-input">
                     <input type="search" placeholder="Search here" />
                     <button type="submit"><i class="fa-sharp fa-light fa-magnifying-glass"></i></button>
                  </div>
               </form>
               <a href="<?php print esc_url(home_url('/')); ?>" class="thm-btn error-page__btn"><?php print esc_html($belco_error_link_text); ?></a>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Error Page End-->

<?php
get_footer();
