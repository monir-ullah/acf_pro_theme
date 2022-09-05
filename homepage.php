<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

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

   <!-- Counter Part Two -->
   <?php get_template_part( '/template-parts/template-counter' ) ?>
   
   <!-- Testimonial Part Two -->
   <?php get_template_part( '/template-parts/template-testimonial' ) ?>
   
   <!-- FAQ Part -->
   <?php get_template_part( '/template-parts/template-faq' ) ?>

   <!-- Blog Part -->
   <?php get_template_part( '/template-parts/template-blog' ) ?>

   <!-- CTA Part -->
   <?php get_template_part( '/template-parts/template-cta' ) ?>

   <!-- Pricing Part -->
   <?php get_template_part( '/template-parts/template-pricing' ) ?>
         
<?php get_footer(); ?>