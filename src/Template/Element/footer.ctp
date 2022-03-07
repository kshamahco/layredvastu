<?
   use Cake\Datasource\ConnectionManager;
   $connection = ConnectionManager::get('default');
?>
<footer>
   <div class="container-fluid">
      <div class="ftr_bg">
         <svg class="fill-body rotate-180" width="100%" height="150" viewBox="0 0 500 150" preserveAspectRatio="none">
           <path d="M0,150 L0,40 Q250,150 500,40 L580,150 Z"></path>
         </svg>
         <div class="container-xl">
            <div class="row">
               <? foreach ($vastucategory as $singlevastucategory) { ?>
                  <div class="col-md-2">
                     <div class="footer_heading"><?= $singlevastucategory['name'] ?></div>
                     <ul class="common_link">
                        <? $vastusubcategory = $connection->execute("SELECT id,url,name FROM vastus where category_id='".$singlevastucategory['id']."' ORDER by id DESC");
                        foreach ($vastusubcategory as $singlevastusubcategory) { ?>
                          <li data-aos="fade-right" data-aos-delay="300"><a href="<?= SITE_PATH.$singlevastucategory['category_url'].'/'.$singlevastusubcategory['url'] ?>"><i class="fa-thin fa-hand-back-point-right"></i> <?= $singlevastusubcategory['name'] ?></a></li>
                        <? } ?> 
                     </ul>
                  </div>        
               <? } ?>
               <div class="col-md-2">
                  <div class="footer_heading">Other Services</div>
                  <ul class="common_link">
                     <? foreach ($pingVastu as $singlepingVastu) { ?>
                        <li data-aos="fade-right" data-aos-delay="300"><a href="<?= SITE_PATH.$singlepingVastu['vastucategoryurl'].'/'.$singlepingVastu['vastu_url'] ?>"><i class="fa-thin fa-hand-back-point-right"></i> <?= $singlepingVastu['vastuname']; ?></a></li>
                     <? } ?>
                  </ul>
               </div>
               <div class="col-md-2">
                  <div class="footer_heading">Common Links</div>
                  <ul class="common_link">
                    <li data-aos="fade-right" data-aos-delay="300"><a href="<?= SITE_PATH ?>"><i class="fa-thin fa-hand-back-point-right"></i> Home</a></li>
                    <li data-aos="fade-right" data-aos-delay="300"><a href="<?= SITE_PATH.'about-us' ?>"><i class="fa-thin fa-hand-back-point-right"></i> About Us</a></li>
                    <li data-aos="fade-right" data-aos-delay="300"><a href="<?= SITE_PATH.'contact-us' ?>"><i class="fa-thin fa-hand-back-point-right"></i> Contact us</a></li>
                    <li data-aos="fade-right" data-aos-delay="300"><a href="<?= SITE_PATH.'disclaimer' ?>"><i class="fa-thin fa-hand-back-point-right"></i> Disclaimer</a></li>
                  </ul>
               </div>
               <div class="col-lg-12">
                  <div class="copyright">Copyright &copy; <span id="curr_date"></span> | All Rights Reserved | <a href="<?= SITE_PATH.'disclaimer' ?>">Disclaimer</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>

<div class="aside_btn">
  <button class="moreopt btn"><i class="fas fa-ellipsis-v"></i></button>
  <div class="d-grid w-100">
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ftrForm" id="enquireNowButton">Enquire Now</button>
  </div>
</div>
<div class="display_popup">
  <ul>
    <li><a href="tel:+91<?= $staticdata[0]['phone'] ?>"><i class="fa-light fa-phone"></i> <span>Call Now</span></a></li>
    <li><a href="https://api.whatsapp.com/send?phone=+91<?= $staticdata[0]['whatsapp_no'] ?>&amp;text=Greetings%20from%20Layered%20Vastu.%20Feel%20free%20to%20submit%20your%20question,%20and%20we%20will%20be%20in%20touch%20shortly." rel="nofollow"><i class="fa-brands fa-whatsapp"></i> <span>Whatsapp Now</span></a></li>
  </ul>
</div>

<div class="modal fade" id="ftrForm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </button>
      </div>
      <div class="modal-body">
        <div class="mcontent">
          <div class="h3">Send Your Query</div>
          <div class="mmessages" id="modalcontact-div" style="display:none;">
            <div id="modalpost_status"></div>
          </div>
        </div>
        <div class="poup_form">
          <form action="" class="form-floating">
            <div class="mb-3 form-floating">
              <input type="text" name="name" id="fName" class="form-control" placeholder="Your Name" required>
              <label for="fName">Your Name</label>
            </div>
            <div class="mb-3 form-floating">
              <input type="email" name="email" id="
      fEmail" class="form-control" placeholder="Enter email" required>
              <label for="fEmail">Email address</label>
            </div>
            <div class="mb-3 form-floating">
              <input type="tel" name="phone" id="fmNumber" placeholder="Phone No." class="form-control" value="" required>
              <label for="fmNumber">Phone No.</label>
            </div>

            <div class="mb-3 form-floating">
              <textarea class="form-control" placeholder="Leave a comment here" id="ftArea"></textarea>
              <label for="ftArea">Comments</label>
            </div>

            <div class="d-grid">
              <button class="btn btn-primary" type="submit">SEND A MESSAGE</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Koh+Santepheap:wght@400;700&display=swap" rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha256-Vzbj7sDDS/woiFS3uNKo8eIuni59rjyNGtXfstRzStA=" crossorigin="anonymous" />
<script type="text/javascript" src="<?= SITE_PATH ?>js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="<?= SITE_PATH ?>node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init();
</script>
<script>
  $(".fancybox").fancybox({
    type: "iframe",
  });
</script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script type="text/javascript" src="<?= SITE_PATH ?>js/scrolling-nav.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>


<script>
  $('.moreopt').on('click scroll', function(e) {
    $('.display_popup').stop(true).slideToggle(20);
  });
  $(document).on('click scroll', function(e) {
    if (!$(e.target).closest('.moreopt').length) {
      $('.display_popup').stop(true).slideUp(20)
    }
  })
</script>

<script type="text/javascript">
   $(".contactform").submit(function(e) {
    e.preventDefault();
    $(".addenqsubmit").attr('disabled', true);
    $.ajax({
      url: "<?= SITE_PATH ?>SubmitPopupForm/",
      type: 'POST',
      contentType: false,
      processData: false,
      data: new FormData(this),
      success: function(data1) {
         $(".addenqsubmit").attr('disabled', false);
         if (data1 == "invalid_name") {
            $(".invalid_name").show();
            $(".invalid_email").hide();
            $(".invalid_phone").hide();
            $(".invalid_comment").hide();
         } else if (data1 == "invalid_email") {
            $(".invalid_name").hide();
            $(".invalid_email").show();
            $(".invalid_phone").hide();
            $(".invalid_comment").hide();
         } else if (data1 == "invalid_phone") {
            $(".invalid_name").hide();
            $(".invalid_email").hide();
            $(".invalid_phone").show();
            $(".invalid_comment").hide();
         } else if (data1 == "blank_comment") {
            $(".invalid_name").hide();
            $(".invalid_email").hide();
            $(".invalid_phone").hide();
            $(".invalid_comment").show();
         } else {
            window.location.href = '<?= SITE_PATH ?>thank-you/';
         }
      },
      error: function() {
        $(".addenqsubmit").attr('disabled', false);
      }
    });
   });
</script>