<?php

/**
 * Template Name: 404 Page
 * @package belco
 */

get_header();


?>

<main>

   <!--Error Page Start-->
   <section class="error-page">
      <div class="error-page-shape-one float-bob-x">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shapes/error-page-shape-1.png" alt="" />
      </div>
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="error-page__inner">
                  <div class="error-page__title-box">
                     <h2 class="error-page__title">404</h2>
                  </div>
                  <h3 class="error-page__tagline">Sorry we can't find that page!</h3>
                  <p class="error-page__text">The page you are looking for was never existed.</p>
                  <form class="error-page__form">
                     <div class="error-page__form-input">
                        <input type="search" placeholder="Search here" />
                        <button type="submit"><i class="fa-sharp fa-light fa-magnifying-glass"></i></button>
                     </div>
                  </form>
                  <a href="index.html" class="thm-btn error-page__btn">Back to home</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--Error Page End-->


</main>

<?php
get_footer();
