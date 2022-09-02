<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
      <!-- END nav -->
      <div class="hero-wrap">
         <div class="home-slider owl-carousel">
            <?php 
               $acf_theme_sliders = get_field('acf_theme_sliders', 'option');
               foreach($acf_theme_sliders as $single_slider){ ?>                            
                  <div class="slider-item" style="background-image:url(<?php echo $single_slider['single_slider_image']; ?>);">
                     <div class="overlay"></div>
                     <div class="container">
                        <div class="row no-gutters slider-text align-items-center justify-content-center">
                           <div class="col-md-8 ftco-animate">
                              <div class="text w-100 text-center">
                                 <?php 
                                   $single_slider__subtitle = $single_slider['single_slider__subtitle'];
                                   $single_slider__title = $single_slider['single_slider__title'];
                                   $single_slider__button_text = $single_slider['single_slider__button_text'];
                                   $single_slider__button_url = $single_slider['single_slider__button_url'];
                                 ?>
                                 <?php 
                                    if($single_slider__subtitle){ ?>
                                          <h2><?php echo $single_slider__subtitle; ?></h2>
                                       <?php
                                    }
                                 ?>
                                 <?php 
                                    if($single_slider__title){ ?>
                                        <h1 class="mb-4"><?php echo $single_slider__title; ?></h1>
                                       <?php
                                    }
                                 ?>
                                 <?php 
                                    if($single_slider__button_text){ ?>
                                         <p><a href="<?php echo $single_slider__button_url; ?>" class="btn btn-white"><?php echo $single_slider__button_text; ?></a></p>
                                       <?php
                                    }
                                 ?>
                               
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php
               }
            ?>
         </div>
      </div>

      <!-- Services Part One -->
      <?php get_template_part( '/template-parts/template-servicesOne' ) ?>

      <!-- Services Part Two -->
      <?php get_template_part( '/template-parts/template-servicesTwo' ) ?>

      <!-- Services Part Two -->
      <?php get_template_part( '/template-parts/template-counter' ) ?>
      
      <!-- Services Part Two -->
      <?php get_template_part( '/template-parts/template-testimonial' ) ?>
      
      <!-- FAQ Part -->
      <?php get_template_part( '/template-parts/template-faq' ) ?>
      
      

      <section class="ftco-section">
         <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
               <div class="col-md-7 heading-section text-center ftco-animate">
                  <span class="subheading">News &amp; Blog</span>
                  <h2>Latest news from our blog</h2>
               </div>
            </div>
            <div class="row d-flex">
               <div class="col-md-4 d-flex ftco-animate">
                  <div class="blog-entry align-self-stretch">
                     <a href="blog-single.html" class="block-20 rounded" style="background-image: url('assets/images/image_1.jpg');">
                     </a>
                     <div class="text p-4">
                        <div class="meta mb-2">
                           <div><a href="#">March 31, 2020</a></div>
                           <div><a href="#">Admin</a></div>
                           <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 d-flex ftco-animate">
                  <div class="blog-entry align-self-stretch">
                     <a href="blog-single.html" class="block-20 rounded" style="background-image: url('assets/images/image_2.jpg');">
                     </a>
                     <div class="text p-4">
                        <div class="meta mb-2">
                           <div><a href="#">March 31, 2020</a></div>
                           <div><a href="#">Admin</a></div>
                           <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 d-flex ftco-animate">
                  <div class="blog-entry align-self-stretch">
                     <a href="blog-single.html" class="block-20 rounded" style="background-image: url('assets/images/image_3.jpg');">
                     </a>
                     <div class="text p-4">
                        <div class="meta mb-2">
                           <div><a href="#">March 31, 2020</a></div>
                           <div><a href="#">Admin</a></div>
                           <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
<?php get_footer(); ?>