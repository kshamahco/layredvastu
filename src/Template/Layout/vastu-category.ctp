<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo $this->element('common-part'); ?>
  <link rel="stylesheet" href="<?= SITE_PATH ?>css/others_style.css">
  <title><?= $VastuCatList[0]['seo_title']; ?></title>
  <meta name="description" content="<?= $VastuCatList[0]['seo_description']; ?>" />
  <link rel="canonical" href="<?= SITE_PATH ?>">
</head>

<body>
  	<?php echo $this->element('header'); ?>
  	<main>
		<section class="container-fluid position-relative">
			<div class="inner_bg" style="background-image: url('<?= SITE_PATH.'img/bannerimage/'.$VastuCatList[0]['banner_image'] ?>');">
				<div class="roundbg">
					<svg class="fill-body" viewBox="0 0 500 150" preserveAspectRatio="none">
						<path d="M0,150 L0,40 Q250,150 500,40 L580,150 Z"></path>
					</svg>
				</div>
			</div>
		</section>

		<section class="inner_content">
			<div class="container-xl">
				<div class="row">
					<figure class="col-lg-6 offset-lg-1 order-lg-last figname">
						<img src="<?= SITE_PATH.'img/mergedimage/'.$VastuCatList[0]['merged_image'] ?>" class="img-fluid w-100" alt="">
					</figure>
					<div class="col-lg-5">
						<h1><?= $VastuCatList[0]['heading_1']; ?></h1>
						<p><strong><?= $VastuCatList[0]['desc_heading']; ?></strong></p>
						<? if($VastuCatList[0]['video_url']){ ?>
							<div class="tbtn">
								<div class="vidbtn">
									<a class="fancybox" data-fancybox-type="iframe" href="<?= $VastuCatList[0]['video_url'] ?>" rel="0"><span><i class="fa-brands fa-youtube"></i></span> <cite>Watch Video</cite>
									</a>
								</div>
							</div>
						<? } ?>
						<p><?= $VastuCatList[0]['description']; ?></p>
						<a href="">Read More...</a>
					</div>
				</div>
			</div>
			</div>
		</section>


		<section class="p_list">
			<div class="container-xl">
				<div class="col-lg-12">
					<h2><?= $VastuCatList[0]['heading_2']; ?></h2>
				</div>
				<div class="row">
					<? foreach ($Vastus as $singleVastus) { ?>
						<div class="col-lg-3">
							<figure data-aos="zoom-in-up" data-aos-delay="300">
								<img src="<?= SITE_PATH.'img/listingimage/'.$singleVastus['listing_image'] ?>" class="img-fluid w-100" alt="<?= $singleVastus['name']; ?>">
								<figcaption>
									<h5><?= $singleVastus['name']; ?></h5>
									<p><?= $singleVastus['short_post']; ?></p>
									<a href="<?= SITE_PATH.$category_url.'/'.$singleVastus['url'] ?>" class="stretched-link">Read More...</a>
								</figcaption>
							</figure>
						</div>
					<? } ?>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<nav class="mt-lg-5">
							<ul class="pagination justify-content-center">
								<li class="page-item disabled">
									<a class="page-link" href="#" aria-label="Previous">
										<span aria-hidden="true">&laquo;</span>
									</a>
								</li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
									<a class="page-link" href="#" aria-label="Next">
										<span aria-hidden="true">&raquo;</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
	</main>
  	<?php echo $this->element('footer'); ?>
</body>

</html>