<?php get_header(); ?>
<!-- Bread Cum -->
<?php get_template_part( '/template-parts/template-breadcum' ); ?>
      <section class="ftco-section">
         <div class="container">
            <div class="row d-flex">
            <?php 
               $blog_args = array(
                  'post_type' => 'post',
                  'order'     => 'DESC',
                  'posts_per_page'=>-1,
               );
               $blog_query = new WP_Query( $blog_args );
               while($blog_query->have_posts()){
                  $blog_query->the_post(); ?>
                  <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                           <a href="<?php echo get_the_permalink(); ?>" class="block-20 rounded" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
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
            <div class="row mt-5">
               <div class="col text-center">
                  <div class="block-27">
                     <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
<?php get_footer(); ?>

