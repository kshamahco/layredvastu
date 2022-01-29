<div id="dev_id"><div class="form_area"><div class="form_heading">Get In Touch</div>
<?php //echo $msg->display();?>
<form role="form"  name="form1" method="post" onSubmit="return validate(true);">
<div class="row">
<div class="col-lg-2 col-sm-4 mb-3"><input type="text" name="name" class="form-control form-control-sm rounded-0" placeholder="Enter Your Name" required></div>

<div class="col-lg-2 col-sm-4 pl-md-0 mb-3"><input type="email" name="email" class="form-control rounded-0" placeholder="Enter email" required></div>

<div class="col-lg-2 col-sm-4 pl-md-0 mb-3"><select name="country" id="country" onchange="countrycode(this.options[this.selectedIndex].value)" class="form-control rounded-0" required><option value="">Select Country</option></select></div>

<div class="col-lg-2 col-sm-4 mb-3"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text rounded-0" id="phonecode"></span></div><input type="tel" name="phone" placeholder="Phone No." class="form-control rounded-0" value="" required onkeyup="valid_mob(this,'name')" onblur="valid_mob(this,'name')"></div></div>
<input type="hidden" name="comment" value="I need to know more about this project" />

<div class="col-lg-2 col-sm-4 pl-md-0 mb-3"><input type="submit" name="Submit" class="btn btn btn-outline-light btn-block" value="Submit"></div>
</div>
</form>