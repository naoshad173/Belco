<?php

/**
 * Template Name: Portfolio
 * @package belco
 */

get_header();


?>

<main>

   <!--Portfolio Page Start-->
   <section class="portfolio-page">
      <div class="container">
         <div class="portfolio-page__top">
            <div class="portfolio-page__filter-box">
               <span class="portfolio-page__filter-title">Filter:</span>
               <ul class="portfolio-page__filter style1 post-filter list-unstyled clearfix">
                  <li data-filter=".filter-item" class="active"><span class="filter-text">All</span></li>
                  <li data-filter=".business"><span class="filter-text">Business Strategy</span></li>
                  <li data-filter=".financial"><span class="filter-text">Financial</span></li>
                  <li data-filter=".planning"><span class="filter-text">Planning</span></li>
                  <li data-filter=".tax"><span class="filter-text">Tax Strategy</span></li>
                  <li data-filter=".investment"><span class="filter-text">Investment</span></li>
               </ul>
            </div>
            <div class="portfolio-page__showing-box">
               <span class="portfolio-page__showing-title">Short by:</span>
               <div class="portfolio-page__showing-sort">
                  <select class="selectpicker" aria-label="Default select example">
                     <option selected>New project</option>
                     <option value="1">Sort by popular-01</option>
                     <option value="2">Sort by popular-02</option>
                     <option value="3">Sort by popular-03</option>
                  </select>
               </div>
            </div>
         </div>
         <div class="row filter-layout">
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item business investment tax">
               <div class="portfolio-three__single">
                  <div class="portfolio-three__img-box">
                     <div class="portfolio-three__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project/portfolio-page-1-1.jpg" alt="" />
                     </div>
                  </div>
                  <div class="portfolio-three__content">
                     <p class="portfolio-three__sub-title">Business Audit</p>
                     <h3 class="portfolio-three__title"><a href="https://xqodex.xyz/wpbelco/belco/portfolio-details/">Our Business Growth</a></h3>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item financial investment">
               <div class="portfolio-three__single">
                  <div class="portfolio-three__img-box">
                     <div class="portfolio-three__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project/portfolio-page-1-2.jpg" alt="" />
                     </div>
                  </div>
                  <div class="portfolio-three__content">
                     <p class="portfolio-three__sub-title">Business Audit</p>
                     <h3 class="portfolio-three__title"><a href="https://xqodex.xyz/wpbelco/belco/portfolio-details/">Women’s Empowerment</a></h3>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item business planning tax">
               <div class="portfolio-three__single">
                  <div class="portfolio-three__img-box">
                     <div class="portfolio-three__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project/portfolio-page-1-3.jpg" alt="" />
                     </div>
                  </div>
                  <div class="portfolio-three__content">
                     <p class="portfolio-three__sub-title">Business Audit</p>
                     <h3 class="portfolio-three__title"><a href="https://xqodex.xyz/wpbelco/belco/portfolio-details/">Our Business Audit</a></h3>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item financial">
               <div class="portfolio-three__single">
                  <div class="portfolio-three__img-box">
                     <div class="portfolio-three__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project/portfolio-page-1-4.jpg" alt="" />
                     </div>
                  </div>
                  <div class="portfolio-three__content">
                     <p class="portfolio-three__sub-title">Business Audit</p>
                     <h3 class="portfolio-three__title"><a href="https://xqodex.xyz/wpbelco/belco/portfolio-details/">Our Business Planning</a></h3>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item business investment tax">
               <div class="portfolio-three__single">
                  <div class="portfolio-three__img-box">
                     <div class="portfolio-three__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project/portfolio-page-1-5.jpg" alt="" />
                     </div>
                  </div>
                  <div class="portfolio-three__content">
                     <p class="portfolio-three__sub-title">Business Audit</p>
                     <h3 class="portfolio-three__title"><a href="https://xqodex.xyz/wpbelco/belco/portfolio-details/">Our Financial Advices</a></h3>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item tax financial planning">
               <div class="portfolio-three__single">
                  <div class="portfolio-three__img-box">
                     <div class="portfolio-three__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project/portfolio-page-1-6.jpg" alt="" />
                     </div>
                  </div>
                  <div class="portfolio-three__content">
                     <p class="portfolio-three__sub-title">Business Audit</p>
                     <h3 class="portfolio-three__title"><a href="https://xqodex.xyz/wpbelco/belco/portfolio-details/">Our Tax Strategy</a></h3>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item tax financial planning">
               <div class="portfolio-three__single">
                  <div class="portfolio-three__img-box">
                     <div class="portfolio-three__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project/portfolio-page-1-7.jpg" alt="" />
                     </div>
                  </div>
                  <div class="portfolio-three__content">
                     <p class="portfolio-three__sub-title">Business Audit</p>
                     <h3 class="portfolio-three__title"><a href="https://xqodex.xyz/wpbelco/belco/portfolio-details/">Solutions Your Problem</a></h3>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item tax financial planning">
               <div class="portfolio-three__single">
                  <div class="portfolio-three__img-box">
                     <div class="portfolio-three__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project/portfolio-page-1-8.jpg" alt="" />
                     </div>
                  </div>
                  <div class="portfolio-three__content">
                     <p class="portfolio-three__sub-title">Business Audit</p>
                     <h3 class="portfolio-three__title"><a href="https://xqodex.xyz/wpbelco/belco/portfolio-details/">Identifying Problems</a></h3>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item tax financial planning">
               <div class="portfolio-three__single">
                  <div class="portfolio-three__img-box">
                     <div class="portfolio-three__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project/portfolio-page-1-9.jpg" alt="" />
                     </div>
                  </div>
                  <div class="portfolio-three__content">
                     <p class="portfolio-three__sub-title">Business Audit</p>
                     <h3 class="portfolio-three__title"><a href="https://xqodex.xyz/wpbelco/belco/portfolio-details/">Research Your Problem</a></h3>
                  </div>
               </div>
            </div>
         </div>
         <div class="portfolio-page__pagination">
            <ul class="pg-pagination list-unstyled">
               <li class="prev">
                  <a href="https://xqodex.xyz/wpbelco/belco/portfolio-details/" aria-label="Prev"><i class="fa fa-angle-left"></i></a>
               </li>
               <li class="count"><a href="https://xqodex.xyz/wpbelco/belco/portfolio-details/">1</a></li>
               <li class="count"><a href="https://xqodex.xyz/wpbelco/belco/portfolio-details/">2</a></li>
               <li class="count"><a href="https://xqodex.xyz/wpbelco/belco/portfolio-details/">3</a></li>
               <li class="next">
                  <a href="https://xqodex.xyz/wpbelco/belco/portfolio-details/" aria-label="Next"><i class="fa fa-angle-right"></i></a>
               </li>
            </ul>
         </div>
      </div>
   </section>
   <!--Portfolio Page End-->

   <!--Cta Four Start-->
   <section class="cta-four">
      <div class="container">
         <div class="cta-four__inner">
            <div class="cta-four__bg float-bob-x" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/cta-four-bg.png)"></div>
            <h3 class="cta-four__title">
               Let's discuss how can we help <br />
               make your Business better
            </h3>
            <div class="cta-four__btn-box">
               <a href="https://xqodex.xyz/wpbelco/belco/services/" class="cta-four__btn thm-btn">Let's Together Quotes</a>
            </div>
         </div>
      </div>
   </section>
   <!--Cta Four End-->
</main>

<?php
get_footer();
