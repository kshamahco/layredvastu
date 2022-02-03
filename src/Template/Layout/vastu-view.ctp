<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo $this->element('common-part'); ?>
  <link rel="stylesheet" href="<?= SITE_PATH ?>css/inner_style.css">
  <title><?= $VastuData[0]['seo_title']; ?></title>
  <meta name="description" content="<?= $VastuData[0]['seo_description']; ?>" />
  <link rel="canonical" href="<?= SITE_PATH ?>">
</head>

<body>
  	<?php echo $this->element('header'); ?>
  	<main>
		<section class="container-fluid position-relative">
			<div class="inner_bg">
				<div class="roundbg">
					<svg class="fill-body" viewBox="0 0 500 150" preserveAspectRatio="none">
						<path d="M0,150 L0,40 Q250,150 500,40 L580,150 Z"></path>
					</svg>
				</div>
			</div>
			<div class="video_sec">
				<div class="container-xl">
					<div class="ratio ratio-21x9 ">
						<? if($VastuData[0]['video_url']){ ?>
							<iframe width="100%" height="" src="<?= $VastuData[0]['video_url'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<? } ?>
					</div>
				</div>
			</div>
		</section>

		<section class="m_content">
			<div class="container-xl">
				<div class="row">
					<div class="col-lg-7">
						<h1><?= $VastuData[0]['heading_1']; ?></h1>
						<p><strong><?= $VastuData[0]['short_post']; ?></strong></p>
						<div class="m_content__heading">
							<h2><?= $VastuData[0]['heading_2']; ?></h2>
						</div>
						<?= $VastuData[0]['first_para']; ?>
						<img src="<?= SITE_PATH.'img/listingimage/'.$VastuData[0]['listing_image'] ?>" class="img-fluid w-100" alt="<?= $VastuData[0]['name']; ?>">
						<?= $VastuData[0]['second_para']; ?>
						<blockquote>
							<?= $VastuData[0]['third_para']; ?>
						</blockquote>
						<?= $VastuData[0]['fourth_para']; ?>
						<div class="m_content__heading">
							<h3><?= $VastuData[0]['fifth_para']; ?></h3>
						</div>
						<?= $VastuData[0]['sixth_para']; ?>
					</div>
					<div class="col-lg-4 offset-lg-1">
						<?php echo $this->element('main-form'); ?>

						<? if($SimilarVastuData){ ?>
							<div class="simi_con">
								<h4>Similar Vastu Service</h4>
									<? foreach ($SimilarVastuData as $singleSimilarVastuData) { ?>
										<figure>
											<img src="<?= SITE_PATH.'img/listingimage/'.$singleSimilarVastuData['vastu_listing_image'] ?>" class="img-fluid lazy" alt="<?= $singleSimilarVastuData['vastuname']; ?>">
											<figcaption>
												<h5><?= $singleSimilarVastuData['vastuname']; ?></h5>
												<p><?= $singleSimilarVastuData['vastushortpost']; ?></p>
												<a href="<?= SITE_PATH.$singleSimilarVastuData['vastucategoryurl'].'/'.$singleSimilarVastuData['vastu_url'] ?>" class="stretched-link">Read More...</a>
											</figcaption>
										</figure>
									<? } ?>
							</div>
						<? } ?>
					</div>
				</div>
			</div>
		</section>
	</main>
  	<?php echo $this->element('footer'); ?>
</body>

</html>