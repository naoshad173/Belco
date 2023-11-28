<?php

/**
 * Template Name: Portfolio Details
 * @package belco
 */

get_header();


?>

<main>

   <!--Portfolio Details Start-->
   <section class="portfolio-details">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="portfolio-details__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project/portfolio-details-img-1.jpg" alt="" />
               </div>
            </div>
            <div class="portfolio-details__bottom">
               <div class="row">
                  <div class="col-xl-4 col-lg-5">
                     <div class="portfolio-details__right">
                        <div class="portfolio-details__information-box">
                           <h3 class="portfolio-details__information-title">Project Information</h3>
                           <ul class="portfolio-details__information list-unstyled">
                              <li>
                                 <div class="icon">
                                    <span class="fa-solid fa-user"></span>
                                 </div>
                                 <div class="content">
                                    <p>Clients:</p>
                                    <h4>Damien Wilson</h4>
                                 </div>
                              </li>
                              <li>
                                 <div class="icon">
                                    <span class="fa-solid fa-layer-group"></span>
                                 </div>
                                 <div class="content">
                                    <p>Category:</p>
                                    <h4>Business Audit</h4>
                                 </div>
                              </li>
                              <li>
                                 <div class="icon">
                                    <span class="fa-solid fa-calendar-days"></span>
                                 </div>
                                 <div class="content">
                                    <p>Date:</p>
                                    <h4>25 March, 2023</h4>
                                 </div>
                              </li>
                              <li>
                                 <div class="icon">
                                    <span class="fa-solid fa-location-dot"></span>
                                 </div>
                                 <div class="content">
                                    <p>Location:</p>
                                    <h4>New York, NY, USA</h4>
                                 </div>
                              </li>
                              <li>
                                 <div class="icon">
                                    <span class="fa-solid fa-earth-americas"></span>
                                 </div>
                                 <div class="content">
                                    <p>Website:</p>
                                    <h4><a href="#">https://busicon.com</a></h4>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-8 col-lg-7">
                     <div class="portfolio-details__left">
                        <p class="portfolio-details__sub-title">Business Audit</p>
                        <h3 class="portfolio-details__title">Our Business Growth</h3>
                        <p class="portfolio-details__text-1">
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                           dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                           ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                           fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                           deserunt mollit anim id est laborum.
                        </p>
                        <p class="portfolio-details__text-2">
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                           dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                        </p>
                        <div class="portfolio-details__pagination-box">
                           <ul class="portfolio-details__pagination list-unstyled clearfix">
                              <li class="next">
                                 <a href="#" aria-label="Previous"><i class="fa-solid fa-arrow-left-long"></i>Prev</a>
                              </li>
                              <li class="previous">
                                 <a href="#" aria-label="Next">Next<i class="fa-solid fa-arrow-right-long"></i></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--Portfolio Details End-->

   <!--Portfolio Four Start-->
   <section class="portfolio-four">
      <div class="container">
         <h3 class="portfolio-four__title">Related Portfolio</h3>
         <div class="row">
            <!--POrtfolio Three Single Start-->
            <div class="col-xl-4 col-lg-4">
               <div class="portfolio-three__single">
                  <div class="portfolio-three__img-box">
                     <div class="portfolio-three__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project/portfolio-4-1.jpg" alt="" />
                     </div>
                  </div>
                  <div class="portfolio-three__content">
                     <p class="portfolio-three__sub-title">Business Audit</p>
                     <h3 class="portfolio-three__title"><a href="portfolio-details.html">Our Business Growth</a></h3>
                  </div>
               </div>
            </div>
            <!--POrtfolio Three Single End-->
            <!--POrtfolio Three Single Start-->
            <div class="col-xl-4 col-lg-4">
               <div class="portfolio-three__single">
                  <div class="portfolio-three__img-box">
                     <div class="portfolio-three__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project/portfolio-4-2.jpg" alt="" />
                     </div>
                  </div>
                  <div class="portfolio-three__content">
                     <p class="portfolio-three__sub-title">Business Audit</p>
                     <h3 class="portfolio-three__title"><a href="portfolio-details.html">Women’s Empowerment</a></h3>
                  </div>
               </div>
            </div>
            <!--POrtfolio Three Single End-->
            <!--POrtfolio Three Single Start-->
            <div class="col-xl-4 col-lg-4">
               <div class="portfolio-three__single">
                  <div class="portfolio-three__img-box">
                     <div class="portfolio-three__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project/portfolio-4-3.jpg" alt="" />
                     </div>
                  </div>
                  <div class="portfolio-three__content">
                     <p class="portfolio-three__sub-title">Business Audit</p>
                     <h3 class="portfolio-three__title"><a href="portfolio-details.html">Our Business Audit</a></h3>
                  </div>
               </div>
            </div>
            <!--POrtfolio Three Single End-->
         </div>
      </div>
   </section>
   <!--Portfolio Four End-->

</main>



<?php
get_footer();
