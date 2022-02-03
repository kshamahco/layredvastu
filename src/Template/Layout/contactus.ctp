<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="description" content="">
		<link rel="canonical" href="">
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
				        <div class="col-lg-5">
				          	<div class="con_left">
					            <h1>Contact</h1>
					            <ul>
					              	<li><i class="fa-solid fa-address-card"></i> <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore, officiis?</span></li>
					              	<? if($staticdata[0]['phone']){ ?>
					              		<li><a href="tel:+91<?= $staticdata[0]['phone'] ?>"><i class="fa-light fa-circle-phone"></i> <span><?= $staticdata[0]['phone']; ?></span> </a></li>
					          		<? } 
					          		if($staticdata[0]['email']){ ?>
					              		<li><a href=""><i class="fa-light fa-envelope-dot"></i> <span><?= $staticdata[0]['email']; ?></span> </a> </li>
					              	<? } ?>
					              	<li><i class="fa-regular fa-alarm-clock"></i> <span>Mon – Fri: 10:00 am – 20:00 pm</span></li>
					              	<li><i class="fa-light fa-globe"></i> <span>www.layredvastu.com</span></li>
					            </ul>
					            <div class="h5 mt-5">Follow us:</div>
					            <ol>
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
					              		<li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
					              	<? } ?>
					            </ol>
				          	</div>
				        </div>
				        <div class="col-lg-6 offset-lg-1">
				          	<div class="con_right">
				            	<?php echo $this->element('main-form'); ?>
				          	</div>
				        </div>
			      	</div>
			    </div>
			</main>
		<?php echo $this->element('footer'); ?>
	</body>
</html>