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
                <? $vastusubcategory = $connection->execute("SELECT id,url,name FROM vastus where category_id='" . $singlevastucategory['id'] . "' ORDER by id DESC");
                foreach ($vastusubcategory as $singlevastusubcategory) { ?>
                  <li data-aos="fade-right" data-aos-delay="300"><a href="<?= SITE_PATH . $singlevastucategory['category_url'] . '/' . $singlevastusubcategory['url'] ?>"><i class="fa-thin fa-hand-back-point-right"></i> <?= $singlevastusubcategory['name'] ?></a></li>
                <? } ?>
              </ul>
            </div>
          <? } ?>
          <div class="col-md-2">
            <div class="footer_heading">Other Services</div>
            <ul class="common_link">
              <? foreach ($pingVastu as $singlepingVastu) { ?>
                <li data-aos="fade-right" data-aos-delay="300"><a href="<?= SITE_PATH . $singlepingVastu['vastucategoryurl'] . '/' . $singlepingVastu['vastu_url'] ?>"><i class="fa-thin fa-hand-back-point-right"></i> <?= $singlepingVastu['vastuname']; ?></a></li>
              <? } ?>
            </ul>
          </div>
          <div class="col-md-2">
            <div class="footer_heading">Common Links</div>
            <ul class="common_link">
              <li data-aos="fade-right" data-aos-delay="300"><a href="<?= SITE_PATH ?>"><i class="fa-thin fa-hand-back-point-right"></i> Home</a></li>
              <li data-aos="fade-right" data-aos-delay="300"><a href="<?= SITE_PATH . 'about-us' ?>"><i class="fa-thin fa-hand-back-point-right"></i> About Us</a></li>
              <li data-aos="fade-right" data-aos-delay="300"><a href="<?= SITE_PATH . 'contact-us' ?>"><i class="fa-thin fa-hand-back-point-right"></i> Contact us</a></li>
              <li data-aos="fade-right" data-aos-delay="300"><a href="<?= SITE_PATH . 'disclaimer' ?>"><i class="fa-thin fa-hand-back-point-right"></i> Disclaimer</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright">Copyright &copy; <span id="curr_date"></span> | All Rights Reserved | <a href="<?= SITE_PATH . 'disclaimer' ?>">Disclaimer</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

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