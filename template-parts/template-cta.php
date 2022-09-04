<section class="ftco-section ftco-no-pb ftco-no-pt bg-secondary">
    <div class="container py-5">
    <div class="row">
        <div class="col-md-7 d-flex align-items-center">
            <?php 
                $cta_text = get_field('cta_text','option');
                if($cta_text){ ?>
                    <h2 class="mb-3 mb-sm-0" style="color:black; font-size: 22px;"><?php echo $cta_text; ?></h2>
                 <?php
                }
            ?>
        </div>
        <div class="col-md-5 d-flex align-items-center">
            <div  class="subscribe-form">

                <?php 
                   echo do_shortcode('[contact-form-7 id="149" title="Contact form 1"]');
                ?>
                <!-- <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
                </div> -->
            </div>
        </div>
    </div>
    </div>
</section>