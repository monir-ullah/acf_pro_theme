<section class="ftco-section bg-light ftco-no-pt">
    <div class="container">
        <div class="row">
            <?php 
                $services_part_two_repeater = get_field('services_part_two_repeater', 'option');
                if($services_part_two_repeater){
                    foreach($services_part_two_repeater as $signle_service_two){ ?>
                        <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                            <div class="d-block">
                                <div class="icon d-flex mr-2">
                                   <?php 
                                        if($signle_service_two['services_part_two_repeater_icon']){ ?>
                                            <i class="fa <?php echo $signle_service_two['services_part_two_repeater_icon']; ?>"></i>
                                        <?php  
                                        }
                                    ?>
                                </div>
                                <div class="media-body">
                                    <?php 
                                        if($signle_service_two['services_part_two_repeater_title']){ ?>
                                        <h3 class="heading"><?php echo $signle_service_two['services_part_two_repeater_title']; ?></h3>
                                        <?php  
                                        }
                                    ?>
                                    <?php 
                                        if($signle_service_two['services_part_two_repeater_desc']){ ?>
                                            <p><?php echo $signle_service_two['services_part_two_repeater_desc']; ?></p>
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