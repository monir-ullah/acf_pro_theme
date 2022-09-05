<?php /* Template Name: About Page */ ?>
<?php get_header();?>
<!-- Bread Cum -->
<?php get_template_part( '/template-parts/template-breadcum' ); ?>

<!-- Counter Part Two -->
<div class="mt-5 whtie-bg-acf">
   <div class="mt-5 mt-20">
      <?php get_template_part( '/template-parts/template-counter' ) ?>
   </div>
</div>
   
 <!-- Testimonial Part Two -->
<?php get_template_part( '/template-parts/template-testimonial' ) ?>

   <!-- FAQ Part -->
<?php get_template_part( '/template-parts/template-faq' ) ?>
   <!-- CTA Part -->

<?php get_template_part( '/template-parts/template-cta' ) ?>


<?php get_footer(); ?>     