
      <footer class="footer">
         <div class="container-fluid px-lg-5">
            <div class="row">
               <div class="col-md-9 py-5">
                  <div class="row">
                     <div class="col-md-4 mb-md-0 mb-4">
                        <?php 

                           $footer_about_us_heading_text = get_field('footer_about_us_heading_text','option');
                           $footer_about_us_textarea = get_field('footer_about_us_textarea','option');
                           $footer_about_social_media_repeater = get_field('footer_about_social_media_repeater','option');
                           $footer_copy_right = get_field('footer_copy_right','option');
                           if($footer_about_us_heading_text){ ?>
                              <h2 class="footer-heading"><?php echo $footer_about_us_heading_text; ?></h2>
                            <?php
                           }
                           if($footer_about_us_heading_text){ ?>
                             <p><?php echo $footer_about_us_textarea; ?></p>
                            <?php
                           }
                        ?>
                        <ul class="ftco-footer-social p-0">
                           <?php 
                              if($footer_about_social_media_repeater){
                                 foreach($footer_about_social_media_repeater as $single_social){ ?>
                                    <a href="<?php echo $single_social['footer_social_media_link'];?>"><i class="fa <?php echo $single_social['footer_social_media_icon'];?>"></i></a>
                                  <?php
                                 }
                              }
                           ?>
                        </ul>
                     </div>
                     <div class="col-md-8">
                        <div class="row justify-content-center">
                           <div class="col-md-12 col-lg-10">
                              <div class="row">
                                 <div class="col-md-4 mb-md-0 mb-4">
                                    <?php
                                       if(is_active_sidebar('footer-2')){
                                          dynamic_sidebar('footer-2' );
                                       }
                                    ?>
                                 </div>
                                 <div class="col-md-4 mb-md-0 mb-4">
                                    <?php 
                                       if(is_active_sidebar('footer-1')){
                                          dynamic_sidebar('footer-1' );
                                       }
                                    ?>
                                 </div>
                                 <div class="col-md-4 mb-md-0 mb-4">
                                    <?php 
                                       if(is_active_sidebar('footer-3')){
                                          dynamic_sidebar('footer-3' );
                                       }
                                    ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row mt-md-5">
                     <div class="col-md-12">
                        <p class="copyright">
                           <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                           <?php   
                              if($footer_copy_right){ 
                                 echo $footer_copy_right;
                              } 
                           ?>
                           <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
                  <?php
                     $footer_contact_from_text_heading = get_field('footer_contact_from_text_heading','option');
                     if($footer_contact_from_text_heading){ ?>
                        <h2 class="footer-heading"><?php echo $footer_contact_from_text_heading; ?></h2>
                      <?php
                     }
                  ?>
                  <div  class="form-consultation">
                     <?php 
                        echo do_shortcode('[contact-form-7 id="164" title="Footer_Contact Form"]');
                     ?>
                     <!-- <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                     </div>
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                     </div>
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                     </div>
                     <div class="form-group">
                        <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="form-control submit px-3">Send A Message</button>
                     </div> -->
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- loader -->
      <div id="ftco-loader" class="show fullscreen">
         <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
         </svg>
      </div>
      <?php wp_footer(); ?>
   </body>
</html>

