<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo $this->element('common-part'); ?>
  <link rel="stylesheet" href="<?= SITE_PATH ?>css/style.css">
  <title><?= $pages[0]['seo_title']; ?></title>
  <meta name="description" content="<?= $pages[0]['seo_description']; ?>" />
  <link rel="canonical" href="<?= SITE_PATH ?>">
</head>

<body>
  <?php echo $this->element('header'); ?>
  <main>
      <section class="container-fluid position-relative">
         <div class="hmbanner" style="background-image: url('<?= SITE_PATH.'img/bannerimage/'.$pages[0]['banner_image'] ?>');">
            <div class="roundbg">
               <svg class="fill-body" viewBox="0 0 500 150" preserveAspectRatio="none">
                  <path d="M0,150 L0,40 Q250,150 500,40 L580,150 Z"></path>
               </svg>
            </div>
         </div>
         <div class="hcontent">
            <div class="container-xl">
               <div class="row">
                  <div class="col-lg-7">
                     <div class="hcontent__left">
                        <small>Ensure Happiness And Prosperity Through Vastu</small>
                        <h1><?= $pages[0]['heading_1']; ?></h1>
                        <div class="lead mb-3"><?= $pages[0]['desc_heading']; ?></div>
                        <div class="tbtn">
                           <button class="btn btn-warning">Get Started</button>
                           <? if($pages[0]['video_url']){ ?>
                              <div class="vidbtn">
                                 <a href="<?= $pages[0]['video_url'] ?>">
                                    <span><i class="fa-brands fa-youtube"></i></span> <cite>Watch Video</cite>
                                 </a>
                              </div>
                           <? } ?>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 offset-lg-1">
                     <?php echo $this->element('main-form'); ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="abt_sec">
         <div class="container-xl">
            <div class="row">
               <div class="col-lg-5">
                  <figure data-aos="fade-right" data-aos-delay="300">
                     <img src="<?= SITE_PATH.'img/listingimage/'.$pages[0]['listing_image'] ?>" class="img-fluid w-100" alt="<?= $pages[0]['heading_1']; ?>">
                  </figure>
               </div>
               <div class="col-lg-6 offset-lg-1">
                  <div class="abt_sec__content" data-aos="fade-up" data-aos-delay="500">
                     <small>About</small>
                     <h2><?= $pages[0]['heading_2']; ?></h2>
                     <div class="exp">
                        <div class="exp__icon"><img src="<?= SITE_PATH ?>img/experience.png" alt="Vastu Experience"></div>
                        15 Years Of Experience With
                        <span>Vastu Related Services</span>
                     </div>
                     <blockquote>
                        <p><?= $pages[0]['description']; ?></p>
                     </blockquote>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, voluptatibus.</p>
                     <a href="about-us.php">Read More...</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="serv_bg">
         <div class="container-xl">
            <div class="row">
               <div class="col-lg-12">
                  <small>Services</small>
                  <div class="h2">Select Your Vastu Service</div>
                  <div class="swiper top_serve">
                     <div class="swiper-wrapper">
                        <? foreach ($vastucategory as $singlevastucategory) { ?>
                           <figure class="swiper-slide" data-aos="zoom-in-up" data-aos-delay="300" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">
                              <a href="<?= SITE_PATH.$singlevastucategory['category_url'] ?>" class="stretched-link">
                                 <img src="<?= SITE_PATH.'img/listingimage/'.$singlevastucategory['listing_image'] ?>" class="img-fluid w-100" alt="<?= $singlevastucategory['name'] ?>">
                                 <figcaption><?= $singlevastucategory['name'] ?> <i class="fa-thin fa-arrow-right-long"></i></figcaption>
                              </a>
                           </figure>
                        <? } ?>
                     </div>
                     <div class="swiper-button-prev"></div>
                     <div class="swiper-button-next"></div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="oth_serv">
         <div class="container-xl">
            <div class="row">
               <div class="col-lg-12">
                  <small>Other Services</small>
                  <div class="h2">Vastu for House</div>
                  <div class="swiper oth_serv__slider">
                     <div class="swiper-wrapper">
                        <? foreach ($pingVastu as $singlepingVastu) { ?>
                           <figure class="swiper-slide" data-aos="zoom-in-up" data-aos-delay="300">
                              <img src="<?= SITE_PATH.'img/listingimage/'.$singlepingVastu['vastu_listing_image'] ?>" class="img-fluid w-100" alt="<?= $singlepingVastu['vastuname']; ?>">
                              <figcaption>
                                 <h5><?= $singlepingVastu['vastuname']; ?></h5>
                                 <p><?= $singlepingVastu['vastushortpost']; ?></p>
                                 <a href="<?= SITE_PATH.$singlepingVastu['vastucategoryurl'].'/'.$singlepingVastu['vastu_url'] ?>" class="stretched-link">Read More...</a>
                              </figcaption>
                           </figure>
                        <? } ?>
                     </div>
                     <div class="swiper-button-prev"></div>
                     <div class="swiper-button-next"></div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="h_why">
         <div class="container-xl">
            <div class="row justify-content-center">
               <div class="col-lg-12">
                  <div class="h_why__inner">
                     <small>Layered Vastu</small>
                     <div class="h3">Why Choose Us?</div>
                     <div class="swiper h_why__inner__slider">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide" data-aos="fade-right" data-aos-delay="300">
                              <i class="fa-regular fa-indian-rupee-sign"></i>
                              <label>Affordable</label>
                              <p>The main door direction is like the ‘mouth of human body.</p>
                           </div>

                           <div class="swiper-slide" data-aos="fade-right" data-aos-delay="300">
                              <i class="fa-regular fa-handshake"></i>
                              <label>Happy Customers</label>
                              <p>Use all techniques to have faster & better results.</p>
                           </div>

                           <div class="swiper-slide" data-aos="fade-right" data-aos-delay="300">
                              <i class="fa-duotone fa-sparkles"></i>
                              <label>Special Attention</label>
                              <p>Being Astro-Vasstu consultant we do customized vaastu for family.</p>
                           </div>

                           <div class="swiper-slide" data-aos="fade-right" data-aos-delay="300">
                              <i class="fa-regular fa-indian-rupee-sign"></i>
                              <label>Affordable</label>
                              <p>The main door direction is like the ‘mouth of human body.</p>
                           </div>

                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>
  <?php echo $this->element('footer'); ?>
  <script>
      const swipFirst = new Swiper('.top_serve', {
         slidesPerView: 1,
         spaceBetween: 20,
         navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
         },
         breakpoints: {
            640: {
               slidesPerView: 2
            },
            768: {
               slidesPerView: 2
            },
            1024: {
               slidesPerView: 3
            }
         }
      });

      const swipSecond = new Swiper('.oth_serv__slider', {
         slidesPerView: 1,
         spaceBetween: 20,
         navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
         },
         breakpoints: {
            640: {
               slidesPerView: 2
            },
            768: {
               slidesPerView: 3
            },
            1024: {
               slidesPerView: 4
            }
         }
      });

      const swipThird = new Swiper('.h_why__inner__slider', {
         slidesPerView: 1,
         spaceBetween: 20,
         navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
         },
         breakpoints: {
            640: {
               slidesPerView: 2
            },
            768: {
               slidesPerView: 3
            }
         }
      });
   </script>
</body>

</html>