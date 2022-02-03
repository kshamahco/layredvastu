<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="description" content="">
		<link rel="canonical" href="<? print_r($canonical);?>">
		<?php  echo $this->element('common-part'); ?>
		<link rel="stylesheet" href="<?= SITE_PATH ?>css/others_style.css" />
	</head>
	<style>
	    .ftr_enqsec {
	      display: none !important;
	    }
	</style>
	<body>
		<?php echo $this->element('header'); ?>
			<main>
			    <div class="container-xl">
			      <div class="row justify-content-center">
			        <div class="col-lg-12">
			          <div class="disclaimer">
			            <div class="h3">Disclaimer</div>
			            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni in corporis illum! Perspiciatis architecto eius fugiat placeat quisquam, exercitationem quasi ut commodi tenetur quod, voluptates at! Modi vel sed consectetur molestias? Consequuntur fugit officiis voluptatum?</p>
			            <ul>
			              <li>Lorem ipsum dolor sit amet.</li>
			              <li>Lorem ipsum dolor sit amet.</li>
			              <li>Lorem ipsum dolor sit amet.</li>
			            </ul>
			            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui dolorem delectus voluptates quo quae quaerat nam ad exercitationem, commodi possimus?</p>
			          </div>
			        </div>
			      </div>
			    </div>
			</main>
		<?php echo $this->element('footer'); ?>
	</body>
</html>