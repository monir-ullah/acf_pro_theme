<section class="ftco-section ftco-no-pt bg-light">
   <div class="container">
      <div class="row d-flex no-gutters">
            <?php 
               $services_part_one_image = get_field('services_part_one_image', 'option');
               $services_part_one_subtitle = get_field('services_part_one_subtitle', 'option');
               $services_part_one_title = get_field('services_part_one_title', 'option');
               if($services_part_one_image){ ?>
                  <div class="col-md-6 d-flex">
                     <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(<?php echo $services_part_one_image;  ?>);">
                     </div>
                  </div>
                  <?php 
               }
            ?>              
         <div class="col-md-6 pl-md-5 py-md-5">
            <?php 
               if($services_part_one_title){ ?>

                  <div class="heading-section pl-md-4 pt-md-5">
                     <?php 
                     if($services_part_one_subtitle){ ?>
                        <span class="subheading"><?php echo $services_part_one_subtitle;  ?></span>
                        <?php
                     } ?>                    
                     <h2 class="mb-4"><?php echo $services_part_one_title;  ?></h2>
                  </div>

                  <?php
               }                    
            ?> 
            <?php 
               $services_part_one_repeater = get_field('services_part_one_repeater', 'option');
               foreach($services_part_one_repeater as $signle_service){ ?>
                  <div class="services-2 w-100 d-flex">
                     <div class="icon d-flex align-items-center justify-content-center">
                        <?php
                           if($signle_service['services_part_one_repeater_icon']){ ?>
                              <i class="fa <?php echo $signle_service['services_part_one_repeater_icon']; ?>"></i>
                            <?php
                           }
                        ?>
                     </div>
                     <div class="text pl-4">
                        <?php
                           if($signle_service['services_part_one_repeater_title']){ ?>
                              <h4><?php echo $signle_service['services_part_one_repeater_title']; ?></h4>
                            <?php
                           }
                        ?>
                        <?php
                           if($signle_service['services_part_one_repeater_desc']){ ?>
                              <p><?php echo $signle_service['services_part_one_repeater_desc']; ?></p>
                            <?php
                           }
                        ?>  
                     </div>
                  </div>
                <?php
               }
            ?> 
         </div>
      </div>
   </div>
</section>
