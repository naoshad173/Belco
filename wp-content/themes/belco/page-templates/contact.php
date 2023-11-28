<?php

/**
 * Template Name: Contact
 * @package belco
 */

get_header();


?>

<main>
   <!--Information Start-->
   <section class="information">
      <div class="container">
         <div class="row">
            <!--Information Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
               <div class="information__single">
                  <div class="information__icon">
                     <span class="fa-light fa-comments-question"></span>
                  </div>
                  <p class="information__text">Live Chat</p>
                  <p class="information__number">Available 24/7</p>
                  <a href="" class="information__btn">Let’s Chat<span class="fa-thin fa-arrow-right-long"></span></a>
               </div>
            </div>
            <!--Information Single End-->
            <!--Information Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
               <div class="information__single">
                  <div class="information__icon">
                     <span class="fa-light fa-phone-volume"></span>
                  </div>
                  <p class="information__text">Call Us</p>
                  <p class="information__number"><a href="tel:+12011234468">+1 (201) 123 4468</a></p>
                  <a href="" class="information__btn">Call Us<span class="fa-thin fa-arrow-right-long"></span></a>
               </div>
            </div>
            <!--Information Single End-->
            <!--Information Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
               <div class="information__single">
                  <div class="information__icon">
                     <span class="fa-light fa-envelope"></span>
                  </div>
                  <p class="information__text">Mail Us</p>
                  <p class="information__number"><a href="mailto:help@yourdomain.com">help@yourdomain.com</a></p>
                  <a href="" class="information__btn">Drop Us A Line<span class="fa-thin fa-arrow-right-long"></span></a>
               </div>
            </div>
            <!--Information Single End-->
            <!--Information Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
               <div class="information__single">
                  <div class="information__icon">
                     <span class="fa-light fa-map-location-dot"></span>
                  </div>
                  <p class="information__text">Office Address</p>
                  <p class="information__number">915 Hill Street, USA</p>
                  <a href="" class="information__btn">Directions<span class="fa-thin fa-arrow-right-long"></span></a>
               </div>
            </div>
            <!--Information Single End-->
         </div>
      </div>
   </section>
   <!--Information End-->

   <!--Contact Page Start-->
   <section class="contact-page">
      <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-6">
               <div class="contact-page__right">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="google-map__one" allowfullscreen></iframe>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6">
               <div class="contact-page__left">
                  <h3 class="contact-page__title">Get in Touch</h3>
                  <p class="contact-page__sub-title">LEAVE US A MESSAGE</p>
                  <div class="contact-page__form-box">
                     <form action="assets/inc/sendemail.php" class="contact-page__form contact-form-validated" novalidate="novalidate">
                        <div class="row">
                           <div class="col-xl-12">
                              <div class="contact-page__input-box">
                                 <h3 class="contact-page__input-title">Full Name *</h3>
                                 <input type="text" placeholder="Jhon Smith" name="name" />
                              </div>
                           </div>
                           <div class="col-xl-6">
                              <div class="contact-page__input-box">
                                 <h3 class="contact-page__input-title">Email *</h3>
                                 <input type="email" placeholder="e.g:" name="email" />
                              </div>
                           </div>
                           <div class="col-xl-6">
                              <div class="contact-page__input-box">
                                 <h3 class="contact-page__input-title">Phone Number *</h3>
                                 <input type="text" placeholder="+1 (00)" name="Phone" />
                              </div>
                           </div>
                           <div class="col-xl-12">
                              <div class="contact-page__input-box">
                                 <h3 class="contact-page__input-title">subject*</h3>
                                 <div class="contact-page__showing-sort">
                                    <select class="selectpicker" aria-label="Default select example">
                                       <option selected>Select ...</option>
                                       <option value="1">Sort by popular-01</option>
                                       <option value="2">Sort by popular-02</option>
                                       <option value="3">Sort by popular-03</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-12">
                              <div class="contact-page__input-box text-message-box">
                                 <h3 class="contact-page__input-title">Message <span>(Oprional)</span></h3>
                                 <textarea name="message" placeholder="Type here..."></textarea>
                              </div>
                              <div class="contact-page__btn-box">
                                 <button type="submit" class="thm-btn contact-page__btn">
                                    <span class="fas fa-paper-plane"></span>SEND MESSAGE
                                 </button>
                              </div>
                           </div>
                        </div>
                     </form>
                     <div class="result"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--Contact Page End-->


</main>



<?php
get_footer();
