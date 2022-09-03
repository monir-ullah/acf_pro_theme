<section class="ftco-section">
         <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
               <div class="col-md-7 heading-section text-center ftco-animate">
                    <?php
                        $blog_section_sub_title = get_field('blog_section_sub_title', 'option');
                        $blog_section_title = get_field('blog_section_title', 'option');
                        if($blog_section_sub_title){ ?>
                            <span class="subheading"><?php echo $blog_section_sub_title; ?></span>
                         <?php
                        }
                        if($blog_section_title){ ?>
                            <h2><?php echo $blog_section_title; ?></h2>
                         <?php
                        }
                    ?>
               </div>
            </div>
            <div class="row d-flex">
                <?php 
                    $blog_args = array(
                        'post_type' => 'post',
                        'order'     => 'DESC',
                        'posts_per_page'=>3,
                    );
                    $blog_query = new WP_Query( $blog_args );
                    while($blog_query->have_posts()){
                        $blog_query->the_post(); ?>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch">
                                <a href="blog-single.html" class="block-20 rounded" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                                </a>
                                <div class="text p-4">
                                    <div class="meta mb-2">
                                    <div><a href="#"><?php echo get_the_date('F d, Y');?></a></div>
                                    <div><a href="#"><?php echo get_the_author_nickname( );?></a></div>
                                    <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> <?php echo get_comments_number(); ?></a></div>
                                    </div>
                                    <h3 class="heading"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                </div>
                            </div>
                        </div>
                        <?php
                        wp_reset_postdata();
                    }
                ?>
            </div>
         </div>
      </section>