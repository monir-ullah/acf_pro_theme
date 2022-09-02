<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
      <!-- END nav -->
      <div class="hero-wrap">
         <div class="home-slider owl-carousel">
            <?php 
               $acf_theme_sliders = get_field('acf_theme_sliders', 'option');
               foreach($acf_theme_sliders as $single_slider){ ?>                            
                  <div class="slider-item" style="background-image:url(<?php echo $single_slider['single_slider_image']; ?>);">
                     <div class="overlay"></div>
                     <div class="container">
                        <div class="row no-gutters slider-text align-items-center justify-content-center">
                           <div class="col-md-8 ftco-animate">
                              <div class="text w-100 text-center">
                                 <?php 
                                   $single_slider__subtitle = $single_slider['single_slider__subtitle'];
                                   $single_slider__title = $single_slider['single_slider__title'];
                                   $single_slider__button_text = $single_slider['single_slider__button_text'];
                                   $single_slider__button_url = $single_slider['single_slider__button_url'];
                                 ?>
                                 <?php 
                                    if($single_slider__subtitle){ ?>
                                          <h2><?php echo $single_slider__subtitle; ?></h2>
                                       <?php
                                    }
                                 ?>
                                 <?php 
                                    if($single_slider__title){ ?>
                                        <h1 class="mb-4"><?php echo $single_slider__title; ?></h1>
                                       <?php
                                    }
                                 ?>
                                 <?php 
                                    if($single_slider__button_text){ ?>
                                         <p><a href="<?php echo $single_slider__button_url; ?>" class="btn btn-white"><?php echo $single_slider__button_text; ?></a></p>
                                       <?php
                                    }
                                 ?>
                               
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php
               }
            ?>
         </div>
      </div>
      
      <!-- Services Part One -->
      <?php get_template_part( '/template-parts/template-servicesOne' ) ?>

      <section class="ftco-section bg-light ftco-no-pt">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                  <div class="d-block">
                     <div class="icon d-flex mr-2">
                        <span class="flaticon-accounting-1"></span>
                     </div>
                     <div class="media-body">
                        <h3 class="heading">Accounting</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                  <div class="d-block">
                     <div class="icon d-flex mr-2">
                        <span class="flaticon-tax"></span>
                     </div>
                     <div class="media-body">
                        <h3 class="heading">Tax, Compliance &amp; Payroll</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                  <div class="d-block">
                     <div class="icon d-flex mr-2">
                        <span class="flaticon-loan"></span>
                     </div>
                     <div class="media-body">
                        <h3 class="heading">Financial Services</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                  <div class="d-block">
                     <div class="icon d-flex mr-2">
                        <span class="flaticon-budget"></span>
                     </div>
                     <div class="media-body">
                        <h3 class="heading">Growth &amp; Funding Access</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-counter bg-light ftco-no-pt" id="section-counter">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                     <div class="text">
                        <strong class="number" data-number="50">0</strong>
                     </div>
                     <div class="text">
                        <span>Years of Experienced</span>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                     <div class="text">
                        <strong class="number" data-number="8500">0</strong>
                     </div>
                     <div class="text">
                        <span>Cases Completed</span>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                     <div class="text">
                        <strong class="number" data-number="20">0</strong>
                     </div>
                     <div class="text">
                        <span>Awards Won</span>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                     <div class="text">
                        <strong class="number" data-number="50">0</strong>
                     </div>
                     <div class="text">
                        <span>Expert Consultant</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section testimony-section bg-light">
         <div class="overlay"></div>
         <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
               <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
                  <span class="subheading">Testimonies</span>
                  <h2>Happy Clients &amp; Feedbacks</h2>
               </div>
            </div>
            <div class="row ftco-animate">
               <div class="col-md-12">
                  <div class="carousel-testimony owl-carousel ftco-owl">
                     <div class="item">
                        <div class="testimony-wrap py-4">
                           <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                           <div class="text">
                              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                              <div class="d-flex align-items-center">
                                 <div class="user-img" style="background-image: url(assets/images/person_1.jpg)"></div>
                                 <div class="pl-3">
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="testimony-wrap py-4">
                           <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                           <div class="text">
                              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                              <div class="d-flex align-items-center">
                                 <div class="user-img" style="background-image: url(assets/images/person_2.jpg)"></div>
                                 <div class="pl-3">
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="testimony-wrap py-4">
                           <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                           <div class="text">
                              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                              <div class="d-flex align-items-center">
                                 <div class="user-img" style="background-image: url(assets/images/person_3.jpg)"></div>
                                 <div class="pl-3">
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="testimony-wrap py-4">
                           <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                           <div class="text">
                              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                              <div class="d-flex align-items-center">
                                 <div class="user-img" style="background-image: url(assets/images/person_1.jpg)"></div>
                                 <div class="pl-3">
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="testimony-wrap py-4">
                           <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                           <div class="text">
                              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                              <div class="d-flex align-items-center">
                                 <div class="user-img" style="background-image: url(assets/images/person_2.jpg)"></div>
                                 <div class="pl-3">
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section ftco-no-pt bg-light ftco-faqs">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="img-faqs w-100">
                     <div class="img mb-4 mb-sm-0" style="background-image:url(assets/images/about-2.jpg);">
                     </div>
                     <div class="img img-2 mb-4 mb-sm-0" style="background-image:url(assets/images/about-1.jpg);">
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 pl-lg-5">
                  <div class="heading-section mb-5 mt-5 mt-lg-0">
                     <span class="subheading">FAQs</span>
                     <h2 class="mb-3">Frequently Asks Questions</h2>
                     <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
                     <div class="card">
                        <div class="card-header p-0" id="headingOne">
                           <h2 class="mb-0">
                              <button href="#collapseOne" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                 <p class="mb-0">How to fixed a problem?</p>
                                 <i class="fa" aria-hidden="true"></i>
                              </button>
                           </h2>
                        </div>
                        <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
                           <div class="card-body py-3 px-0">
                              <ol>
                                 <li>Far far away, behind the word mountains</li>
                                 <li>Consonantia, there live the blind texts</li>
                                 <li>When she reached the first hills of the Italic Mountains</li>
                                 <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                 <li>Separated they live in Bookmarksgrove right</li>
                              </ol>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header p-0" id="headingTwo" role="tab">
                           <h2 class="mb-0">
                              <button href="#collapseTwo" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
                                 <p class="mb-0">How to manage your business loans?</p>
                                 <i class="fa" aria-hidden="true"></i>
                              </button>
                           </h2>
                        </div>
                        <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
                           <div class="card-body py-3 px-0">
                              <ol>
                                 <li>Far far away, behind the word mountains</li>
                                 <li>Consonantia, there live the blind texts</li>
                                 <li>When she reached the first hills of the Italic Mountains</li>
                                 <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                 <li>Separated they live in Bookmarksgrove right</li>
                              </ol>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header p-0" id="headingThree" role="tab">
                           <h2 class="mb-0">
                              <button href="#collapseThree" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                                 <p class="mb-0">How to grow your investments funds?</p>
                                 <i class="fa" aria-hidden="true"></i>
                              </button>
                           </h2>
                        </div>
                        <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo">
                           <div class="card-body py-3 px-0">
                              <ol>
                                 <li>Far far away, behind the word mountains</li>
                                 <li>Consonantia, there live the blind texts</li>
                                 <li>When she reached the first hills of the Italic Mountains</li>
                                 <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                 <li>Separated they live in Bookmarksgrove right</li>
                              </ol>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header p-0" id="headingFour" role="tab">
                           <h2 class="mb-0">
                              <button href="#collapseFour" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
                                 <p class="mb-0">What are those requirements for businesses?</p>
                                 <i class="fa" aria-hidden="true"></i>
                              </button>
                           </h2>
                        </div>
                        <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingTwo">
                           <div class="card-body py-3 px-0">
                              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section">
         <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
               <div class="col-md-7 heading-section text-center ftco-animate">
                  <span class="subheading">News &amp; Blog</span>
                  <h2>Latest news from our blog</h2>
               </div>
            </div>
            <div class="row d-flex">
               <div class="col-md-4 d-flex ftco-animate">
                  <div class="blog-entry align-self-stretch">
                     <a href="blog-single.html" class="block-20 rounded" style="background-image: url('assets/images/image_1.jpg');">
                     </a>
                     <div class="text p-4">
                        <div class="meta mb-2">
                           <div><a href="#">March 31, 2020</a></div>
                           <div><a href="#">Admin</a></div>
                           <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 d-flex ftco-animate">
                  <div class="blog-entry align-self-stretch">
                     <a href="blog-single.html" class="block-20 rounded" style="background-image: url('assets/images/image_2.jpg');">
                     </a>
                     <div class="text p-4">
                        <div class="meta mb-2">
                           <div><a href="#">March 31, 2020</a></div>
                           <div><a href="#">Admin</a></div>
                           <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 d-flex ftco-animate">
                  <div class="blog-entry align-self-stretch">
                     <a href="blog-single.html" class="block-20 rounded" style="background-image: url('assets/images/image_3.jpg');">
                     </a>
                     <div class="text p-4">
                        <div class="meta mb-2">
                           <div><a href="#">March 31, 2020</a></div>
                           <div><a href="#">Admin</a></div>
                           <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
<?php get_footer(); ?>