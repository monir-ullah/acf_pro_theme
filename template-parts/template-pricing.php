<section class="ftco-section bg-light">
    <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
        <?php 
            $pricing_section_subtitle = get_field('pricing_section_subtitle', 'option');
            $pricing_section_title = get_field('pricing_section_title', 'option');
            if($pricing_section_subtitle){ ?>
                <span class="subheading"><?php echo $pricing_section_subtitle; ?></span>
                <?php
            }
            if($pricing_section_title){ ?>
                    <h2><?php echo $pricing_section_title; ?></h2>
                <?php
            }
        ?>  
        </div>
    </div>
    <div class="row">
        <?php 
            $pricing_section_repeater = get_field('pricing_section_repeater', 'option');
            if($pricing_section_repeater){
                foreach($pricing_section_repeater as $signle_pricing){ ?>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="block-7">
                            <div class="text-center">
                                <span class="excerpt d-block"><?php echo $signle_pricing['pricing_single_repeater_title']; ?></span>
                                <span class="price"><sup><?php echo $signle_pricing['pricing_single_repeater_currency']; ?></sup> <span class="number"><?php echo $signle_pricing['pricing_single_repeater_price']; ?></span> <sub>/<?php echo $signle_pricing['pricing_single_repeater_time']; ?></sub></span>
                                <ul class="pricing-text mb-5">
                                    <?php 
                                       $pricing_single_features_repeater = $signle_pricing['pricing_single_features_repeater'];
                                       foreach($pricing_single_features_repeater as $single_features){ ?>
                                            <li><span class="fa fa-check mr-2"></span><?php echo $single_features['features_title']; ?></li>
                                        <?php
                                       }
                                    ?>
                                </ul>
                                <a href="<?php echo $signle_pricing['pricing_single_button_url']; ?>#" class="btn btn-primary d-block px-2 py-3"><?php echo $signle_pricing['pricing_single_button_text']; ?></a>
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