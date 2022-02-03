<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Thank You</title>
  <?php  echo $this->element('common-part'); ?>
  <link rel="stylesheet" href="<?= ROOT_PATH ?>webroot/css/others_style.css">
  <style>
    .ftr_enqsec {
      display: none !important;
    }
  </style>

</head>
<body>
<?php  echo $this->element('header'); ?>
 	<main>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="thnk_con text-center">
            <i class="fa-duotone fa-thumbs-up"></i>
            <div class="h1 text-success">Thank You</div>
            <div class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, necessitatibus?</p>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php  echo $this->element('footer'); ?>

</body>
</html>