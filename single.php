<?php get_header(); ?>
<!-- Bread Cum -->
<?php get_template_part( '/template-parts/template-breadcum' ); ?>
      <section class="ftco-section ftco-degree-bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 ftco-animate">
                  <p>
                     <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                  </p>
                  <h2 class="mb-3"><?php the_title(); ?></h2>
                  <div class="single-post"><?php the_content(); ?></div>
                  <div class="tag-widget post-tag-container mb-5 mt-5">
                     <div class="tagcloud">
                     <?php
                        $posttags = get_the_tags();
                        if ($posttags) {
                           foreach($posttags as $tag) { ?>
                              <a href="#" class="tag-cloud-link"><?php echo $tag->name; ?></a>
                           <?php
                           }
                        }
                        ?>    
                     </div>
                  </div>
                  <?php
                     $user = wp_get_current_user();
                  ?>
                  <div class="about-author d-flex p-4 bg-light">
                     <div class="bio mr-5">
                        <?php 
                           if ( $user ) :
                              ?>
                              <img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
                           <?php endif; 
                        ?>
                     </div>
                     <div class="desc">
                        <h3><?php echo get_the_author_meta( 'display_name', $user->ID );?></h3>
                        <p><?php echo get_the_author_meta( 'user_description', $user->ID );?></p>
                     </div>
                  </div>
                  <div class="pt-5 mt-5">
                     <div class="custom-comment-acf">
                        <?php 
                           if ( comments_open() || get_comments_number() ) :
                              comments_template();
                           endif;
                        ?>
                     </div>
                  </div>
               </div>
               <!-- .col-md-8 -->
               <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
                  <div class="sidebar-box ftco-animate">
                     <?php
                        if(is_active_sidebar("recent-blog-sidebar-1")){
                           dynamic_sidebar("recent-blog-sidebar-1");
                        }
                     ?>
                  </div>
                  <div class="sidebar-box ftco-animate">
                     <?php 
                        if(is_active_sidebar('footer-3')){
                           dynamic_sidebar('footer-3' );
                        }
                     ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
<?php get_footer(); ?>
