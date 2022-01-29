<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo $this->element('common-hco'); ?>
  <title><?= trim($title) ?></title>
  <meta name="description" content="<?= trim($seo_description) ?>">
  <link rel="canonical" href="<?= ROOT_PATH ?>" />
  <?
  function custom_echo($x, $length)
  {
    if (strlen($x) <= $length) {
      echo $x;
    } else {
      $y = substr($x, 0, $length) . '...';
      echo $y;
    }
  }

  use Cake\Datasource\ConnectionManager;

  $connection = ConnectionManager::get('default');
  //echo "<pre>"; print_r($project);
  ?>
</head>

<body>
  <?php echo $this->element('header'); ?>
  <main>
    <section class="home_sec" id="home">
      <div class="container-xl">
        <div class="row">
          <figure class="col-lg-6 px-0 offset-lg-1 order-lg-1 brn_img">
            <? foreach ($ProBanner as $singleBanner) { ?>
              <img src="<?= _BASEURL_ ?>img/banner/orig/<?= $singleBanner['photo']; ?>" class="img-fluid" alt="<?= $singleBanner['name']; ?>">
            <? } ?>
          </figure>
          <div class="col-lg-5">
            <div class="home_left">
              <h1><?= $project[0]['heading1']; ?></h1>
              <div class="location text-muted"><?= $project[0]['location_text']; ?></div>
              <div class="price"><i class="fas fa-rupee-sign">&nbsp;</i><?= $project[0]['price']; ?> </div>
              <p><?= $project[0]['small_info']; ?></p>
              <form role="form" name="form1" method="post" class="initiatectoc">
                <span class="invalid_cphone" style="display : none; color : #f50606;">Please enter valid Phone Number.</span>
                <b><span class="valid_phone" style="display : none; color: green;">One of our team member will contact you shortly.</span></b>
                <div class="input-group mb-3 forcallnowsubmitform">
                  <input type="number" class="form-control" placeholder="Enter Mobile Number" name="phoneForCall" aria-describedby="top-email">
                  <input type="hidden" name="roundrobinforcallnow" value="<?= $project[0]['round_robin'] ?>">
                  <input type="hidden" name="projectnameforcallnow" value="<?= $project[0]['heading1'] ?>">
                  <input type="hidden" name="utm_source" value="<?= utm_source ?>">
                  <div class="input-group-append">
                    <button class="btn btn-primary forcallnowsubmit" type="submit" id="top-email" onclick="callFunction('Call Now Click','Call Now Click','Call Now Click');">Call Now!</button>
                  </div>
                </div>
              </form>
              <div class="sp_tag"><i class="fas fa-gifts"></i> Best Discount & Offer In Every Booking.</div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <? if ($project[0]['rera_number']) { ?><div class="prera"><span>Rera No. - </span><?= $project[0]['rera_number'] ?></div><? } ?>
            <div class="config">
              <? if ($project[0]['bhk']) { ?>
                <div class="config_items">
                  <label>Unit Type</label> <span><?= $project[0]['bhk']; ?></span>
                </div>
              <? }
              if ($project[0]['area']) { ?>
                <div class="config_items">
                  <label>Size</label><span><?= $project[0]['area']; ?></span>
                </div>
              <? }
              if ($project[0]['availability']) { ?>
                <div class="config_items">
                  <?= $project[0]['availability']; ?>
                </div>
              <? }
              if ($project[0]['project_status']) { ?>
                <div class="config_items">
                  <label>Project Status</label> <span><?= $project[0]['project_status']; ?></span>
                </div>
              <? }
              if ($project[0]['completion']) { ?>
                <div class="config_items">
                  <label>Completion</label> <span><?= $project[0]['completion']; ?></span>
                </div>
              <? } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <? if (count($keyhighlight) > 0) { ?>
      <section class="overview_sec" id="overview">
        <div class="container-xl">
          <div class="row">
            <div class="col-lg-7">
              <div class="highlights">
                <h2><?= $project[0]['heading2']; ?></h2>
                <div class="h5">Key highlights</div>
                <ul>
                  <? foreach ($keyhighlight as $singleKeyHighlight) { ?>
                    <li><i class="fas fa-check-square"></i> <?= $singleKeyHighlight['highlight']; ?></li>
                  <? } ?>
                </ul>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="description">
                <?= $project[0]['overview']; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
    <? } ?>
    <? if (count($proPricelist) > 0) { ?>
      <section class="price_sec" id="priceList">
        <div class="container-xl">
          <div class="row">
            <div class="col-lg-12">
              <div class="h1">Price</div>
              <p><strong><?= $project[0]['price_list_desc']; ?></strong></p>
              <div class="price_slide swiper-container">
                <div class="swiper-wrapper">
                  <? foreach ($proPricelist as $singlePriceList) { ?>
                    <div class="swiper-slide">
                      <? if ($singlePriceList['unit'] != '') { ?>
                        <div class="type"><?= $singlePriceList['unit']; ?>Unit Type</div>
                      <? } ?>
                      <div class="price">
                        <? if ($singlePriceList['price'] != '') { ?><i class="fas fa-rupee-sign"></i>
                        <? echo $singlePriceList['price'];
                        } ?>
                      </div>
                      <? if ($singlePriceList['size'] != '') { ?>
                        <div class="area">Super Area <span><?= $singlePriceList['size'] ?></span></div>
                      <? } ?>
                      <? if ($singlePriceList['carpet_area'] != '') { ?>
                        <div class="area">Carpet Area <span><?= $singlePriceList['carpet_area'] ?></span></div>
                      <? } ?>
                      <div class="enq_btn">
                        <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#ftrForm">Enquire Now</button>
                      </div>
                    </div>
                  <? } ?>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <? } ?>
    <section class="hww_sec">
      <div class="container-xl">
        <div class="row">
          <div class="col-lg-12">
            <div class="main">
              <div class="h2">How We Works</div>
              <div class="h5">Your Dream Home is Just a Few Clicks & Scrolls Away!</div>
              <div class="main__inner">
                <div class="first"></div>
                <div class="row no-gutters justify-content-center">
                  <div class="col-md-4"></div>
                  <div class="how_work__inner bdr_top bdr_right bdr_bottom col-md-4 mtop">
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#downloadForm">
                      <div class="work_main text-right">
                        <i class="fas fa-download"></i>
                        Download
                        <strong>Click here to download the latest information about the project.</strong>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="row no-gutters justify-content-center">
                  <div class="how_work__inner bdr_top bdr_left bdr_bottom col-md-4 mtop1">
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#consulForm">
                      <div class="work_main text-left">
                        <i class="far fa-handshake"></i>
                        Consultant
                        <strong>Consult With Our Dedicated Executives For Every Query In Mind.</strong>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-4"></div>
                </div>
                <div class="row no-gutters justify-content-center">
                  <div class="col-md-4"></div>
                  <div class="how_work__inner bdr_top bdr_right bdr_bottom col-md-4 mtop2 bdr_radi_left_b">
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#SitevisitForm">
                      <div class="work_main text-right">
                        <i class="fas fa-car-alt" aria-hidden="true"></i>
                        Site Visit
                        <strong>Get A Deep Knowledge Of The Site With Our Executive.</strong>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="row no-gutters justify-content-center">
                  <div class="how_work__inner bdr_top bdr_left col-md-4 mtop1">
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#BestdealForm">
                      <div class="work_main text-left">
                        <i class="fas fa-gifts" aria-hidden="true"></i>
                        Best Deal
                        <strong>Enjoy Special Festive Or Seasonal Offers.</strong>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-4"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="ameni_sec" id="ameniid">
      <div class="row no-gutters">
        <figure class="col-lg-6 order-lg-1">
          <img src="<?= _BASEURL_ ?>images/amenities/amenities.webp" alt="Amenity Of <?= $project[0]['heading1'] ?>" class="img-fluid">
        </figure>
        <div class="col-lg-6">
          <div class="ameni_main">
            <? //echo "<pre>"; print_r($project);die; 
            ?>
            <div class="h1">Amenities of <?= $project[0]['heading1']; ?></div>
            <p><strong><?= $project[0]['amenities_heading']; ?></strong></p>
            <p><?= $project[0]['amenities_desc']; ?></p>
            <div class="ameni_slide">
              <div class="swiper-wrapper">
                <? foreach ($proamenity as $singleProAmenity) { ?>
                  <div class="swiper-slide">
                    <img src="<?= _BASEURL_ ?>images/amenities/<?= $singleProAmenity['image'] ?>" alt="<?= str_replace(array("-", ".svg"), " ", $singleProAmenity['image']) ?>">
                    <label><?= $singleProAmenity['amenity_name'] ?></label>
                  </div>
                <? } ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <? if ($project[0]['location_image'] != '' || $project[0]['master_image'] != '' || $project[0]['numbering_image'] != '') { ?>
      <section class="loca_sec" id="localities">
        <div class="container-xl">
          <div class="row">
            <div class="col-lg-12">
              <div class="tabs_area">
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <? if ($project[0]['location_image']) { ?>
                      <a class="nav-item nav-link active" id="location-tab" data-toggle="tab" href="#location" role="tab" aria-controls="location" aria-selected="true">Localities</a>
                    <? } ?>
                    <?/*
                    <? if ($project[0]['master_image']) { ?>
                      <a class="nav-item nav-link" id="masterplan-tab" data-toggle="tab" href="#masterplan" role="tab" aria-controls="masterplan" aria-selected="false">Master Plan</a>
                    <? } ?>
                    */ ?>
                    <? if ($project[0]['numbering_image']) { ?>
                      <a class="nav-item nav-link" id="masterplan-tab" data-toggle="tab" href="#numberplan" role="tab" aria-controls="masterplan" aria-selected="false">Numbering Plan</a>
                    <? } ?>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="location" role="tabpanel" aria-labelledby="location-tab">
                    <div class="row">
                      <? if ($project[0]['location_image']) { ?>
                        <figure class="col-md-6 order-md-1">
                          <div class="tabs_inner map-responsive">
                            <a href="<?= IMG_PATH ?>property/location_map/<?= $project[0]['location_image']; ?>" data-fancybox="location-map" data-caption="<?= $project[0]['location_alt_tag']; ?>"><img src="<?= IMG_PATH ?>property/location_map/<?= $project[0]['location_image'] ?>" class="img-fluid lazy" alt="<?= $project[0]['location_alt_tag']; ?>">
                              <figcaption>Location Map of <?= $project[0]['heading1']; ?> </figcaption>
                            </a>
                          </div>
                        </figure>
                      <? } ?>
                      <div class="col-md-6">
                        <div class="tabs_inner">
                          <div class="h2">Project Localities</div>
                          <p><?= $project[0]['location_detail']; ?></p>
                          <ul>
                            <? foreach ($proLocConnectivity as $singleproLocConnectivity) {
                              echo $singleproLocConnectivity['location_heading'];
                            } ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?/*
                  <? if ($project[0]['master_image']) { ?>
                    <div class="tab-pane fade" id="masterplan" role="tabpanel" aria-labelledby="masterplan-tab">
                      <div class="tabs_inner image_bg">
                        <a href="<?= IMG_PATH ?>property/master_plan/<?= $project[0]['master_image'] ?>" data-fancybox="location-map" data-caption="<?= $project[0]['master_alt_tag']; ?>"><img src="<?= IMG_PATH ?>property/master_plan/<?= $project[0]['master_image'] ?>" class="img-fluid lazy" alt="<?= $project[0]['master_alt_tag'] ?>">
                          <figcaption>Master Plan of <?= $project[0]['heading1']; ?> </figcaption>
                        </a>
                      </div>
                    </div>
                  <? } ?>
                  */ ?>
                  <? if ($project[0]['numbering_image']) { ?>
                    <div class="tab-pane fade" id="numberplan" role="tabpanel" aria-labelledby="numberplan-tab">
                      <div class="tabs_inner image_bg">
                        <a href="<?= IMG_PATH ?>property/numbering_plan/<?= $project[0]['numbering_image'] ?>" data-fancybox="location-map" data-caption="<?= $project[0]['numbering_alt_tag']; ?>"><img src="<?= IMG_PATH ?>property/numbering_plan/<?= $project[0]['numbering_image'] ?>" class="img-fluid lazy" alt="<?= $project[0]['numbering_alt_tag']; ?>">
                          <figcaption>Numerbering Plan of <?= $project[0]['heading1']; ?> </figcaption>
                        </a>
                      </div>
                    </div>
                  <? } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <? } ?>
    <? if ($project[0]['floor_description']) { ?>
      <section class="floor_sec" id="floorPlan">
        <div class="container-xl">
          <div class="h2"><small>Floor Plan of </small><?= $project[0]['heading1']; ?></div>
          <p><?= $project[0]['floor_description']; ?></p>
        </div>
        <div class="floor_after_tit">
          <div class="container-xl">
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <? $i = 1;
                foreach ($floorCategory as $fetchAllCategory) { ?>
                  <a class="nav-item nav-link <? if ($i == 1) {
                                                echo " active";
                                              } ?>" data-toggle="tab" href="#size<?= $fetchAllCategory['floor_category_id'] ?>" role="tab" aria-controls="size1" aria-selected="true"><?= $fetchAllCategory['name'] ?></a>
                <? $i++;
                } ?>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <? $j = 1;
              foreach ($floorCategory as $fetchAllCategory) { ?>
                <div class="tab-pane fade show <? if ($j == 1) {
                                                  echo " show active";
                                                } ?>" id="size<?= $fetchAllCategory['floor_category_id'] ?>" role="tabpanel">
                  <div class="floor_plan">
                    <div class="swiper-wrapper">
                      <? $FloorDesc =  $connection->execute("SELECT * from floor_plans where floor_category_id='" . $fetchAllCategory['floor_category_id'] . "' and property_id='" . $project[0]['id'] . "'");
                      foreach ($FloorDesc as $singleFloorDesc) {
                        $alt = explode("_", $singleFloorDesc['photo']); ?>
                        <figure class="flr_list swiper-slide">
                          <a href="<?= IMG_PATH ?>property/floor/orig/<?= $singleFloorDesc['photo'] ?>" data-fancybox="gallery" data-caption="1 BHK"><img data-src="<?= IMG_PATH ?>property/floor/orig/<?= $singleFloorDesc['photo'] ?>" class="img-fluid lazy" alt="1 BHK">
                            <figcaption>
                              <div class="h3"><?= $singleFloorDesc['name'] ?></div>
                              <?/*

                              <? if ($singleFloorDesc['price']) { ?><div class="price"><i class="fas fa-rupee-sign"></i> <?= $singleFloorDesc['price'] ?> </div><? } ?>
                              <div class="fsub">
                                <? if ($singleFloorDesc['bhk']) { ?><div class="fsub__inner">BHK -<span><?= $singleFloorDesc['bhk'] ?></span></div><? } ?>
                                <? if ($singleFloorDesc['study_room']) { ?><div class="fsub__inner">Study Room -<span><?= $singleFloorDesc['study_room'] ?></span></div><? } ?>
                                <? if ($singleFloorDesc['servent_room']) { ?><div class="fsub__inner">Servent Room -<span><?= $singleFloorDesc['servent_room'] ?></span></div><? } ?>
                                <? if ($singleFloorDesc['lounge']) { ?><div class="fsub__inner">Lounge -<span><?= $singleFloorDesc['lounge'] ?></span></div><? } ?>
                              </div>
                              <div class="fsub">
                                <? if ($singleFloorDesc['toilet']) { ?><div class="fsub__inner">Toilets -<span><?= $singleFloorDesc['toilet'] ?></span></div><? } ?>
                                <? if ($singleFloorDesc['balcony']) { ?><div class="fsub__inner">Balcony -<span><?= $singleFloorDesc['balcony'] ?></span></div><? } ?>
                                <? if ($singleFloorDesc['parking']) { ?><div class="fsub__inner">Parking -<span><?= $singleFloorDesc['parking'] ?></span></div><? } ?>
                                <? if ($singleFloorDesc['facing']) { ?><div class="fsub__inner">Facing -<span><?= $singleFloorDesc['facing'] ?></span></div><? } ?>
                              </div>
                              <div class="fsub1">
                                <? if ($singleFloorDesc['carpet']) { ?><div class="fsub1__inner">Carpet Area -<span><?= $singleFloorDesc['carpet'] ?></span></div><? } ?>
                                <? if ($singleFloorDesc['balcony_area']) { ?><div class="fsub1__inner">Balcony Area -<span><?= $singleFloorDesc['balcony_area'] ?></span></div><? } ?>
                                <? if ($singleFloorDesc['saleable_area']) { ?><div class="fsub1__inner">Saleable Area -<span><?= $singleFloorDesc['saleable_area'] ?></span></div><? } ?>
                              </div>
                              <? if ($singleFloorDesc['description']) { ?>
                                <div class="des">
                                  <div class="des__heading">Description</div>
                                  <p><?= $singleFloorDesc['description'] ?></p>
                                </div>
                              <? } ?>
                              */ ?>
                            </figcaption>
                          </a>
                        </figure>
                      <? } ?>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                  </div>
                </div>
              <? $j++;
              } ?>
            </div>
          </div>
        </div>
        </div>
      </section>
    <? } ?>
    <? if (count($Prgallery) > 0 || $project[0]['gallery_description'] != '') { ?>
      <section class="gall_sec" id="gallId">
        <div class="gall_1st">
          <div class="container-xl">
            <div class="h2"><small>Gallery</small><?= $project[0]['heading1']; ?></div>
            <p><strong><?= $project[0]['gallery_description']; ?></p>
          </div>
        </div>
        <div class="gall_2nd">
          <div class="container-fluid">
            <div class="gall_slider">
              <div class="swiper-wrapper">
                <? //echo "<pre>"; print_r($Prgallery);die; 
                ?>
                <? foreach ($Prgallery as $SinglePrgallery) {
                  $galAlt = explode("_", $SinglePrgallery['image']); ?>
                  <figure class="gall_list swiper-slide">
                    <a href="<?= IMG_PATH . 'property/gallery/orig/' . $SinglePrgallery['image'] ?>" data-fancybox="gallery" data-caption="<?= trim(ucfirst(str_replace(array("-", ".jpg"), " ", $galAlt[1]))) ?>">
                      <img data-src="<?= IMG_PATH . 'property/gallery/orig/' . $SinglePrgallery['image'] ?>" class="lazy img-fluid" alt="<?= trim(ucfirst(str_replace(array("-", ".jpg"), " ", $galAlt[1]))) ?>">
                    </a>
                  </figure>
                <? } ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </section>
    <? } ?>
    <? /*<section class="bg-light py-lg-5 pt-4 pb-3">
      <div class="container-xl">
        <div class="row">
          <div class="col-lg-12">
            <div class="h2">About DLF</div>
            <p>DLF LTD. is one of India’s leading real estate developers headquartered in Gurgaon Haryana. The company embarked on its remarkable journey 70+ Years back in the year 1946 with a clear vision and mission to meet the aspiration of millions by offering quality homes. In the last 7 decades, the company has established itself as a distinct & successful brand on the Indian real estate map.</p>
            <p>By leveraging their experience in development capabilities and capital management strategies, they have developed a diversified business portfolio of asset classes including integrated townships, luxurious communities, corporate offices, and retail across the National Capital Region (NCR), different cities of India. Their landmark developments are a testament to the company's reputation as a builder who cares for its investors.</p>
          </div>
        </div>
      </div>
    </section>*/ ?>
    <? if (count($faqs) > 0) { ?>
      <section class="faq_sec" id="faqId">
        <div class="container-xl">
          <div class="h1">Frequently Asked Questions</div>
          <div class="row">
            <div class="col-lg-12">
              <div itemscope="" itemtype="http://schema.org/FAQPage">
                <div class="comp-accordion">
                  <div class="accordion-list">
                    <? $i = 0;
                    foreach ($faqs as $singleFaq) { ?>
                      <div itemscope itemprop="mainEntity" itemtype="http://schema.org/Question" class="acc-item <? if ($i == 0) {
                                                                                                                    echo " active";
                                                                                                                  } else {
                                                                                                                    echo "";
                                                                                                                  } ?>">
                        <h6 itemprop="name text" class="acc-title"><?= $singleFaq['question']; ?>
                          <span class="icon-expand"><img src="<?= _BASEURL_ ?>images/acc-expand.svg" alt="expand"></span>
                        </h6>
                        <div itemprop="acceptedAnswer" itemscope="" itemtype="http://schema.org/Answer">
                          <div itemprop="text" class="acc-desc"><?= $singleFaq['answer']; ?></div>
                        </div>
                      </div>
                    <? $i++;
                    } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <? } ?>
    <?php echo $this->element('decision-corner');
    ?>
    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="ph_ad1">
              <a href="<?= ROOT_PATH ?>why-invest-in-dlf-one-midtown/" target="_blank" class="stretched-link"></a>
              <figure><img src="<?= ROOT_PATH ?>images/dlf-one-mid-town-ads.webp" class="img-fluid lazy" width="420" height="210" alt="Moti Nagar Delhi With High Investment Potential "></figure>
              <div class="innercont">
                <div class="hding_inner">
                  <div class="h4">Moti Nagar Delhi With High Investment Potential </div>
                  <div class="h6">Best Region with outstanding infrastructure and excellent ROI</div>
                </div>
                <div class="ads_btn">
                  <button class="btn btn-warning"><i class="fas fa-chevron-right"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="modal fade" id="downloadForm" tabindex="-1">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content wework_content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <? /*<div class="mcontent">
              <div class="mcontent__heading"><i class="fas fa-download"></i> Download</div>
              <p>By filling this form you can download the accurate information of the project through E-brochure.</p>
              <ul>
                <li>Master Plan</li>
                <li>Floor Plan</li>
                <li>Location Map</li>
              </ul>
            </div>*/ ?>
            <form role="form" name="form1" method="post" class="addEnquiry">
              <input type="hidden" name="event_cat" class="event_cat" value="download">
              <?php echo $this->element('we-work-form'); ?>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="consulForm" tabindex="-1">
      <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
        <div class="modal-content wework_content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <? /*<div class="mcontent">
              <div class="mcontent__heading"><i class="far fa-handshake"></i> Consultant</div>
              <p>We are trusted by buyers, builders, and sellers. We are an authorized channel partner for DLF Limited. Here you will get the best advice on:-</p>
              <ul>
                <li>Unit facing, floor rise, and apartment type.</li>
                <li>Home loan, down payment and payment plan.</li>
                <li>Or any other questions in your mind. </li>
              </ul>
            </div>*/ ?>
            <form role="form" name="form1" method="post" class="addEnquiry">
              <input type="hidden" name="event_cat" class="event_cat" value="consultant">
              <?php echo $this->element('we-work-form'); ?>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="SitevisitForm" tabindex="-1">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content wework_content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <? /*<div class="mcontent">
              <div class="mcontent__heading"><i class="fas fa-car-alt"></i> Site Visit</div>
              <p>The site visit is very important for homebuyers to enhance the understanding of real construction practice. With our doorstep site visit service you will get a deep understanding about:-</p>
              <ul>
                <li>Construction Quality</li>
                <li>Actual sizes of the rooms</li>
                <li>Site Area</li>
                <li>Familiarity with neighborhood</li>
              </ul>
            </div>*/ ?>
            <form role="form" name="form1" method="post" class="addEnquiry">
              <input type="hidden" name="event_cat" class="event_cat" value="SiteVisitFormSubmit">
              <?php echo $this->element('we-work-form'); ?>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="BestdealForm" tabindex="-1">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content wework_content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="sche_id">
            <? /*<div class="mcontent">
              <div class="mcontent__heading"><i class="fas fa-gifts"></i> Best Deal</div>
              <p>We know that you are here for the best deal and so we are. By filling this form you will get the best deals by:-</p>
              <ul>
                <li>Best Deals</li>
                <li>Periodic/Festival Offers</li>
                <li>Best unit in your budget</li>
              </ul>
            </div>*/ ?>
            <form role="form" name="form1" method="post" class="addEnquiry">
              <input type="hidden" name="event_cat" class="event_cat" value="BestDeal">
              <?php echo $this->element('we-work-form'); ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php echo $this->element('footer'); ?>
  <script type="text/javascript" src="<?= _BASEURL_ ?>webroot/js/scrolling-nav.js"></script>
  <script>
    $(document).ready(function() {
      $(".comp-accordion .acc-title").on("click", function() {
        if ($(this).closest(".acc-item").hasClass("active")) {
          $(this).closest(".acc-item").removeClass("active");
        } else {
          $(".comp-accordion .acc-item").removeClass("active");
          $(this).closest(".acc-item").addClass("active");
        }
      });
    });
    var mySwiper = new Swiper('.price_slide', {
      // Optional parameters
      loop: true,
      slidesPerView: 1,
      spaceBetween: 30,
      centeredSlides: true,
      // longSwipesRatio: 2.5,
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
    var myAmeni = new Swiper('.ameni_slide', {
      // Optional parameters
      loop: true,
      slidesPerView: 1,
      spaceBetween: 30,
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
      // autoplay: {
      //   delay: 2500,
      //   disableOnInteraction: false,
      // },
      breakpoints: {
        640: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
    var myFloor = new Swiper('.floor_plan', {
      // Optional parameters
      // loop: true,
      slidesPerView: 1,
      spaceBetween: 30,
      centeredSlides: true,
      speed: 1e3,
      // autoplay: {
      //  delay: 3e3
      // },
      observer: true,
      observeParents: true,
      // longSwipesRatio: 2.5,
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
    var PGallery = new Swiper(".gall_slider", {
      slidesPerView: 1,
      // loop: false,
      // centeredSlides: true,
      spaceBetween: 30,
      speed: 1e3,
      autoplay: {
        delay: 3e3
      },
      pagination: {
        el: ".swiper-pagination",
        type: "bullets",
        clickable: true
      },
      breakpoints: {
        1024: {
          slidesPerView: 4,
        },
      }
    });
  </script>
</body>

</html>