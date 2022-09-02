<section class="ftco-counter bg-light ftco-no-pt" id="section-counter">
         <div class="container">
            <div class="row">
                <?php 
                    $counter_repeater = get_field('counter_repeater', 'option');
                    if($counter_repeater){
                        foreach($counter_repeater as $single_counter){ ?>
                            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <?php 
                                            if($single_counter['counter_text']){ ?>
                                                <strong class="number" data-number="<?php echo $single_counter['counter_number'];?>"><?php echo $single_counter['counter_number'];?></strong>
                                              <?php  
                                            }
                                        ?> 
                                    </div>
                                    <div class="text">
                                        <?php 
                                            if($single_counter['counter_text']){ ?>
                                                  <span><?php echo $single_counter['counter_text']  ?></span>
                                              <?php  
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                          <?php  
                        }
                    }
                ?>
            </div>
         </div>
      </section>