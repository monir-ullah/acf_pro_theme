<section class="ftco-section testimony-section bg-light">
         <div class="overlay"></div>
         <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
               <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
                <?php 
                    $testimonial_section_sub_title = get_field('testimonial_section_sub_title', 'option');
                    $testimonial_section__title = get_field('testimonial_section__title', 'option');
                    if($testimonial_section_sub_title){ ?>
                         <span class="subheading"><?php echo  $testimonial_section_sub_title;?></span>
                     <?php
                    }
                    if($testimonial_section__title){ ?>
                         <h2><?php echo  $testimonial_section__title;?></h2>
                     <?php
                    }
                ?> 
               </div>
            </div>
            <div class="row ftco-animate">
               <div class="col-md-12">
                  <div class="carousel-testimony owl-carousel ftco-owl">
                    <?php 
                       $testimonial_group = get_field('testimonial_group','option');
                       $single_testimonial_repeater = $testimonial_group['single_testimonial_repeater'];
                       foreach($single_testimonial_repeater as $signle_testimonial){ ?>
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <?php
                                        $single_testimonial_desc = $signle_testimonial['single_testimonial_desc'];
                                        if($single_testimonial_desc){ ?>
                                            <p class="mb-4"><?php echo $single_testimonial_desc;  ?></p>
                                            <?php
                                        }
                                    ?>
                                    <div class="d-flex align-items-center">
                                        <?php
                                            $single_testimonial_client_image = $signle_testimonial['single_testimonial_client_image'];
                                            if($single_testimonial_client_image){ ?>
                                                <div class="user-img" style="background-image: url(<?php echo $single_testimonial_client_image;  ?>)"></div>
                                                <?php
                                            }
                                        ?>
                                        
                                        <div class="pl-3">                                            
                                            <?php
                                               $single_testimonial_client_name = $signle_testimonial['single_testimonial_client_name'];
                                                if($single_testimonial_client_name){ ?>
                                                   <p class="name"><?php echo $single_testimonial_client_name;  ?></p>
                                                 <?php
                                                }
                                            ?>
                                            <?php
                                               $single_testimonial_client_designation = $signle_testimonial['single_testimonial_client_designation'];
                                                if($single_testimonial_client_designation){ ?>
                                                    <span class="position"><?php echo $single_testimonial_client_designation;  ?></span>
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
            </div>
         </div>
      </section>