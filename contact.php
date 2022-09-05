<?php /* Template Name: Contact Page */ ?>
<?php get_header();?>
<!-- Bread Cum -->
<?php get_template_part( '/template-parts/template-breadcum' ); ?>
      <section class="ftco-section bg-light">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-12">
                  <div class="wrapper">
                     <div class="row no-gutters">
                        <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                           <div class="contact-wrap w-100 p-md-5 p-4">
                              <?php 
                                 $contact_heading_second = get_field('contact_heading_second', 'option');
                                 $contact_text_area_second = get_field('contact_text_area_second', 'option');
                                 if($contact_heading_second){ ?>
                                     <h3 class="mb-4"><?php echo $contact_heading_second;?></h3>
                                  <?php
                                 }
                              ?>
                              <div id="form-message-warning" class="mb-4"></div>
                              <?php 
                              
                                 if($contact_text_area_second){ ?>
                                     <div id="form-message-success" class="mb-4"><?php echo $contact_text_area_second;?></div>
                                    <?php
                                 }
                              ?>
                              <div  id="contactForm" class="contactForm">
                                 <?php echo do_shortcode('[contact-form-7 id="184" title="Contact Page"]'); ?>
                                 <!-- <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="label" for="name">Full Name</label>
                                          <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="label" for="email">Email Address</label>
                                          <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label class="label" for="subject">Subject</label>
                                          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label class="label" for="#">Message</label>
                                          <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <input type="submit" value="Send Message" class="btn btn-primary">
                                          <div class="submitting"></div>
                                       </div>
                                    </div>
                                 </div> -->
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                           <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                              <?php
                                 $contact_heading_first = get_field('contact_heading_first', 'option');
                                 $contact_text_area = get_field('contact_text_area', 'option');
                                 $contact_page_info_repeater = get_field('contact_page_info_repeater', 'option');
                                 if($contact_heading_first){ ?>
                                    <h3 class="mb-4"><?php echo $contact_heading_first;?></h3>
                                  <?php
                                 }
                                 if($contact_text_area){ ?>
                                    <p class="mb-4"><?php echo $contact_text_area;?></p>
                                  <?php
                                 }
                                 if($contact_page_info_repeater){
                                    foreach($contact_page_info_repeater as $single_contact){ 
                                          $contact_info_icon = $single_contact['contact_info_icon'];
                                          $contact_info_text = $single_contact['contact_info_text'];
                                       ?>
                                       <div class="dbox w-100 d-flex align-items-start">
                                          <div class="icon d-flex align-items-center justify-content-center">
                                             <span><i class="fa <?php echo $contact_info_icon; ?>"></i></span>
                                          </div>
                                          <div class="text pl-3 mt-2">
                                             <p><?php echo $contact_info_text; ?></p>
                                          </div>
                                       </div>
                                     <?php
                                    }
                                 }
                              ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div id="map" class="map"></div>
      
         <!-- CTA Part -->
   <?php get_template_part( '/template-parts/template-cta' ) ?>
<?php get_footer(); ?>     
