<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title><? print_r(trim($seo_title));?></title>
		<meta name="description" content="<? print_r(trim($seo_description));?>">
		<link rel="canonical" href="<? print_r($canonical);?>">
		
		<?php  echo $this->element('common-hco'); ?>
		<style>
		    .aside_btn {
		      display: none !important;
		    }
	  	</style>
	</head>
	<body>
		<?php  echo $this->element('header-inner'); ?>
			<main class="inner_page">
			    <div class="container">
			      <div class="row">
			        <div class="col-lg-12">
			          <div class="dis_con">
			            <div class="dis_heading">Disclaimer</div>
			            <p><strong>Disclaimer :</strong> This website is in the process of being updated. By accessing this website, the viewer confirms that the information including brochures and marketing collaterals on this website are solely for informational purposes only and the viewer has not relied on this information for making any booking/purchase in any project of the Company. Nothing on this website, constitutes advertising, marketing, booking, selling or an offer for sale, or invitation to purchase a unit in any project by the Company. The Company is not liable for any consequence of any
			              action taken by the viewer relying on such material / information on this website.</p>
			          </div>
			        </div>
			      </div>
			    </div>
			</main>
		<?php  echo $this->element('footer'); ?>
	</body>
</html>