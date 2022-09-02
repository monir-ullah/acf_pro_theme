<section class="ftco-section ftco-no-pt bg-light ftco-faqs">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                    <div class="img-faqs w-100">
                        <?php 
                            $faq_image_group = get_field('faq_image_group', 'option');
                            $faq_first_image = $faq_image_group['faq_first_image'];
                            $faq_second_image = $faq_image_group['faq_second_image'];
                            if($faq_first_image){ ?>
                                <div class="img mb-4 mb-sm-0" style="background-image:url(<?php echo $faq_first_image ?>);"></div>
                             <?php
                            }
                            if($faq_second_image){ ?>
                                <div class="img img-2 mb-4 mb-sm-0" style="background-image:url(<?php echo $faq_second_image ?>);"></div>
                             <?php
                            }
                        ?>  
                    </div>
                </div>
               <div class="col-lg-6 pl-lg-5">
                  <div class="heading-section mb-5 mt-5 mt-lg-0">
                     <?php 
                        $faq_heading_text = get_field('faq_heading_text', 'option');
                        $faq_heading_sub_title = $faq_heading_text['faq_heading_sub_title'];
                        $faq_heading_title = $faq_heading_text['faq_heading_title'];
                        $faq_heading_desc = $faq_heading_text['faq_heading_desc'];
                        if($faq_heading_sub_title){ ?>
                             <span class="subheading"><?php echo $faq_heading_sub_title; ?></span>
                        <?php
                        }
                        if($faq_heading_title){ ?>
                          <h2 class="mb-3"><?php echo $faq_heading_title; ?></h2>
                        <?php
                        }
                        if($faq_heading_desc){ ?>
                            <p><?php echo $faq_heading_desc; ?></p>
                        <?php
                        }
                     ?>
                  </div>
                  <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
                    <?php 
                        $faq_repeater_group = get_field('faq_repeater_group', 'option');
                        $faq_repeater = $faq_repeater_group['faq_repeater'];
                        $i = 0;
                        if( $faq_repeater ){
                            foreach($faq_repeater as $signle_faq){ $i++?>
                                <div class="card">
                                    <div class="card-header p-0" id="heading<?php echo $i;?>">
                                    <h2 class="mb-0">
                                        <button href="#collapse<?php echo $i;?>" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="true" aria-controls="collapse<?php echo $i;?>">
                                            <p class="mb-0"><?php echo $signle_faq['faq_repeater_titile'];?></p>
                                            <i class="fa" aria-hidden="true"></i>
                                        </button>
                                    </h2>
                                    </div>
                                    <div class="collapse <?php if($i==1){echo "show";};?>" id="collapse<?php echo $i;?>" role="tabpanel" aria-labelledby="heading<?php echo $i;?>">
                                    <div class="card-body py-3 px-0">
                                        <?php echo $signle_faq['faq_repeater_text_area'];?>
                                    </div>
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
</section>