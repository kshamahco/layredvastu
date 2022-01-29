<? /*<header class="header">
  <nav class="navbar navbar-expand-lg navbar-default navbar-fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="<?= _BASEURL_ ?>webroot/images/logo.png" class="d-inline-block align-top" alt="DLF One Midtown"></a>
<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
</button>
<div class="navbar-collapse collapse" id="navbarCollapse">
  <ul class="navbar-nav ml-auto">
    <li><a href="#home">Home</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#testimonials">Testimonials</a></li>
    <li><a href="#team">Team</a></li>
    <li><a href="#portfolio">Work</a></li>
    <li><a href="#features">Features</a></li>
    <li><a href="#pricing">Pricing</a></li>
    <li class="discover-link"><a href="#contact" class="discover-btn">Contact Us</a></li>
  </ul>
</div>
</div>
</nav>
</header>*/ ?>

<header class="header">
  <nav class="navbar navbar-expand-lg navbar-default fixed-top" id="header">
    <div class="container-xl">
      <a class="navbar-brand" href="<?= _BASEURL_ ?>"><img src="<?= IMG_PATH ?>property/logo/<?= $project[0]['property_logo'] ?>" class="d-inline-block align-top" alt="<?= $project[0]['property_logo_alt_tag'] ?>"></a>
      <? /*<a class="navbar-brand" href="<?= _BASEURL_ ?>"><b>One MidTown</b></a>*/ ?>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
      </button>
      <div class="navbar-collapse collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="#home" class="nav-link js-scroll-trigger">Home</a></li>
          <? if(count($keyhighlight) >0 || $project[0]['overview']!=''){ ?>
          <li class="nav-item"><a href="#overview" class="nav-link js-scroll-trigger">Overview</a></li>
          <? } ?>

          <? if(count($proPricelist) >0){ ?>
          <li class="nav-item"><a href="#priceList" class="nav-link js-scroll-trigger">Prices</a></li>
          <? } ?>

          <li class="nav-item"><a href="#ameniid" class="nav-link js-scroll-trigger">Amenities</a></li>
          <? if($project[0]['location_image']!='' || $project[0]['master_image']!='' || $project[0]['numbering_image']!=''){ ?>
          <li class="nav-item"><a href="#localities" class="nav-link js-scroll-trigger">Localities</a></li>
          <? } ?>
          <?/*
          <li class="nav-item"><a href="#floorPlan" class="nav-link js-scroll-trigger">Floor Plan</a></li>
          */?>
          <? if(count($Prgallery)>0 || $project[0]['gallery_description']!=''){ ?>
            <li class="nav-item"><a href="#gallId" class="nav-link js-scroll-trigger">Gallery</a></li>
          <? } ?>
          <li class="nav-item"><a href="#faqId" class="nav-link js-scroll-trigger">FAQ</a></li>
          <li class="nav-item"><a href="#decision" class="nav-link js-scroll-trigger">Decision</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>