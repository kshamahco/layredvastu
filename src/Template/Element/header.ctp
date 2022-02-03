<?
   use Cake\Datasource\ConnectionManager;
   $connection = ConnectionManager::get('default');
?>
<header>
   <div class="container-fluid">
      <div class="topa">
         <div class="container-xl">
            <div class="row">
               <div class="col">
                  <ul class="topa__left">
                     <? if($staticdata[0]['phone']){ ?>
                        <li><a href="tel:+91<?= $staticdata[0]['phone'] ?>"><i class="fa-regular fa-phone"></i><span><?= $staticdata[0]['phone']; ?></span></a></li>
                     <? } 
                     if($staticdata[0]['email']){ ?>
                        <li><a href=""><i class="fa-solid fa-envelope"></i> <span><?= $staticdata[0]['email']; ?></span></a></li>
                     <? } ?>
                  </ul>
               </div>
               <div class="col">
                  <ul class="topa__right">
                     <? if($staticdata[0]['utube_url']){ ?>
                        <li><a href="<?= $staticdata[0]['utube_url'] ?>"><i class="fa-brands fa-youtube"></i></a></li>
                     <? } 
                     if($staticdata[0]['facebook_url']){ ?>
                        <li><a href="<?= $staticdata[0]['facebook_url'] ?>"><i class="fa-brands fa-facebook-square"></i></a></li>
                     <? } 
                     if($staticdata[0]['whatsapp_no']){ ?>
                        <li><a href="https://api.whatsapp.com/send?phone=+91<?= $staticdata[0]['whatsapp_no'] ?>&amp;text=Hi%20Content." rel="nofollow"><i class="fa-brands fa-whatsapp"></i></a></li>
                     <? } 
                     if($staticdata[0]['twiter_url']){ ?>
                        <li><a href="<?= $staticdata[0]['twiter_url'] ?>"><i class="fa-brands fa-twitter"></i></a></li>
                     <? } 
                     if($staticdata[0]['insta_url']){ ?>
                        <li><a href="<?= $staticdata[0]['insta_url'] ?>"><i class="fa-brands fa-instagram"></i></a></li>
                     <? } ?>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <nav class="navbar navbar-light bg-light navbar-expand-lg sticky-top">
      <div class="container-xl">
         <a class="navbar-brand" href="<?= SITE_PATH ?>">
            <img src="<?= SITE_PATH.'img/logo/'.$staticdata[0]['logo'] ?>" alt="<?= $staticdata[0]['logo_alt'] ?>">
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
               <div class="offcanvas-title" id="offcanvasNavbarLabel">
                  <a class="navbar-brand" href="<?= SITE_PATH ?>">
                     <img src="<?= SITE_PATH.'img/logo/'.$staticdata[0]['logo'] ?>" alt="<?= $staticdata[0]['logo_alt'] ?>">
                  </a>
               </div>
               <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
               <div class="m-auto"></div>
               <ul class="navbar-nav justify-content-start">
                  <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="<?= SITE_PATH ?>"><i class="fa-solid fa-house"></i></a>
                  </li>

                  <? foreach ($vastucategory as $singlevastucategory) { ?>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?= SITE_PATH.$singlevastucategory['category_url'] ?>" id="offcND" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         <?= $singlevastucategory['name'] ?></a>
                        <ul class="dropdown-menu" aria-labelledby="offcND">
                           <? $vastusubcategory = $connection->execute("SELECT id,url,name FROM vastus where category_id='".$singlevastucategory['id']."' ORDER by id DESC");
                           foreach ($vastusubcategory as $singlevastusubcategory) { ?>
                              <li><a class="dropdown-item" href="<?= SITE_PATH.$singlevastucategory['category_url'].'/'.$singlevastusubcategory['url'] ?>"><?= $singlevastusubcategory['name'] ?></a></li>
                           <? } ?>
                           <li><hr class="dropdown-divider"></li>
                           <li><a class="dropdown-item" href="<?= SITE_PATH.$singlevastucategory['category_url'] ?>">More <?= $singlevastucategory['name'] ?></a></li>
                        </ul>
                     </li>
                  <? } ?>
               </ul>
            </div>
         </div>
      </div>
   </nav>
</header>