<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<?php  echo $this->element('common-part'); ?>
	<title>404 Oops! Page Not Found!</title>
	<link rel="stylesheet" href="<?= SITE_PATH ?>css/others_style.css">
</head>
	<body>
		<?php  echo $this->element('header'); ?>
		 	<main>
			    <div class="container">
			      <div class="row justify-content-center">
			        <div class="col-lg-8">
			          <div class="four04 text-center">
			            <img src="<?= SITE_PATH ?>error-img.svg" class="img-fluid" alt="">
			            <div class="h1">404</div>
			            <div class="lead">Page not found</div>
			            <p>That's an error. The requested URL / Webiste was not found on this server.</p>
			            <div>
			              <a href="<?= SITE_PATH ?>" class="btn btn-outline-primary">Go Back Home</a>
			            </div>
			          </div>
			        </div>
			      </div>
			    </div>
		  	</main>
		<?php  echo $this->element('footer'); ?>
	</body>
</html>