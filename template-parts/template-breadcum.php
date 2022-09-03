<?php  $id = get_queried_object_id(); ?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php if(has_post_thumbnail($id)){echo get_the_post_thumbnail_url($id);} ?>');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-end">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo get_the_title($id); ?> <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread"><?php echo get_the_title($id); ?></h1>
        </div>
    </div>
    </div>
</section>