<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?=trim($title)?></title>
<meta name="description" content="<?=trim($seo_description)?>">
<?php  echo $this->element('common-hco'); ?>
<link rel="canonical" href="<?=ROOT_PATH?>" />
</head>
<body>
<? echo $this->element('projects-details');?>
<main class="main_wrapper">
<section class="container">
<div class="row">
<?php echo $this->element('inner-header'); ?>
<div class="col-md-9 order-md-first">
<div class="pp_content">
<?php  echo $this->fetch('content'); ?>

</div>
</div>
</div>
</section>
</main>
<footer class="footer">
<div class="container-fluid">
<?php  echo $this->element('main-form'); ?>
</div>
</footer>
<?php  echo $this->element('footer-home'); ?>
<script type="text/javascript">
$(document).ready(function() {$("html,body").delay(500).animate({scrollTop:$('.pp_content').offset().top}, 500);});
</script>
<script type="text/javascript" src="<?=ROOT_PATH?>js/global.js"></script>
</body>
</html>