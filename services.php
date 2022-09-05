<?php /* Template Name: Services Page */ ?>
<?php get_header();?>
<!-- Bread Cum -->
<?php get_template_part( '/template-parts/template-breadcum' ); ?>
   <!-- Services Part Two Part -->
<div class="mt-5 whtie-bg-acf">
   <div class="mt-5 mt-20">
      <?php get_template_part( '/template-parts/template-servicesTwo' ) ?>
   </div>
</div>
   <!-- SErvices Part One Part -->
<?php get_template_part( '/template-parts/template-servicesOne' ) ?>
   <!-- Pricing Part -->
<?php get_template_part( '/template-parts/template-pricing' ) ?>
          <!-- CTA Part -->
<?php get_template_part( '/template-parts/template-cta' ) ?>
<?php get_footer(); ?>     