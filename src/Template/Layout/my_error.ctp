<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<?php  echo $this->element('common-hco'); ?>
	<title>404 Oops! Page Not Found!</title>
	<style>
	    .aside_btn {
	      display: none !important;
	    }
	    .footer_top{
			display:none;
		}

		footer {
			background-color: transparent;
		}
	</style>
</head>
	<body>
		<?php  echo $this->element('header-inner'); ?>
		 	<main>
			    <section class="inner_page">
			      <div class="container">
			        <div class="row">
			          <div class="col-lg-12">
			            <div class="four04">
			              <div class="h1"><i class="fas fa-frown"></i> <br />Oops! <span>Page Not Found!</span></div>
			              <p>The page you are looking for was moved, removed, renamed or might never existed.</p>
			            </div>
			          </div>
			        </div>
			      </div>
			    </section>
		  	</main>
	  	<?php  //echo $this->element('footer'); ?>
	</body>
</html>