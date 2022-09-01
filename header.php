<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <?php wp_head(); ?>
   </head>
   <body <?php body_class(); ?>>
      <div class="wrap">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="bg-wrap">
                     <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                           <?php
                              $header_contact_info = get_field('header_contact_info','option');
                              $header_infos =  $header_contact_info['header_contact_information'];
                           ?>
                           <?php 
                              if($header_infos){ ?>
                                    <p class="mb-0 phone pl-md-2">
                                      <?php  foreach($header_infos as $info){ ?>
                                          <a href="#" class="mr-3"><i class="fa <?php echo $info['info_icon'];?> mr-2"></i><?php echo $info['info_text'] ?></a> 
                                          <?php
                                        } 
                                       ?>
                                    </p>
                                 <?php
                              }
                           ?> 
                        </div>
                        <div class="col-md-6 d-flex justify-content-md-end">
                           <?php 
                              $header_social = get_field('header_social','option');
                              $header_social_repeater = $header_social['header_social_repeater'];
                              if($header_social_repeater){ ?>
                                 <div class="social-media">
                                    <p class="mb-0 d-flex">
                                       <?php 
                                          foreach($header_social_repeater as $single_social){
                                             
                                             $header_social_icon = $single_social['header_social_icon'];
                                             $header_social_link = $single_social['header_social_link'];
                                             if($header_social_icon){ ?>
                                                <a href="<?php echo $header_social_link;?>" class="d-flex align-items-center justify-content-center"><i class="fa <?php echo $header_social_icon;?>"></i></a>
                                              <?php
                                             }
                                          } 
                                       ?>
                                    </p>
                                 </div>
                               <?php
                              }
                           ?>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
         <div class="container">
            <!-- This is for logo -->
            <a class="navbar-brand" href="index.html">
               <?php 
                  if ( has_custom_logo() ){
                     the_custom_logo();
                  }else{
                     echo get_bloginfo('name');
                  }
               ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="fa fa-bars"></span> Menu
            </button>
            <?php 
               wp_nav_menu( array(
                  'menu'           => '', // Do not fall back to first non-empty menu.
                  'menu_class'        => "navbar-nav ml-auto",
                  'theme_location' => 'primary_menu',
                  'container_class'   => "collapse navbar-collapse", 
                  'container_id'      => "ftco-nav", 
               
               ) );

            ?>
         </div>
      </nav>