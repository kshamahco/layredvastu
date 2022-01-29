<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="http://server:81/kshama/onemidtowndelhi.com/assets/images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="http://server:81/kshama/onemidtowndelhi.com/css/main.css">
	<title>Dlfmidtown - NEW APARTMENTS AT SHIVAJI MARG, MOTI NAGAR</title>
	<meta name="description" content="DLF Mid Town Delhi a new apartment at Shivaji Marg, Moti Nagar offers 2 & 3 BHK apartment with world class facilities and amenities">
	<link rel="canonical" href="http://server:81/kshama/onemidtowndelhi.com/" />
</head>

<body>
	<main>
		<section class="pdf_bg" style="background-image: url('http://server:81/kshama/onemidtowndelhi.com/webroot/images/master-plan.jpg');">

		</section>
	</main>

	<div class="modal fade" id="ftrForm" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content shadow">
				<div class="modal-header">
				</div>
				<div class="modal-body mob_form">
					<div class="mcontent">
						<div class="h3">Express Your Interest!!</div>
						<div class="mmessages" id="modalcontact-div" style="display:none;">
							<div id="modalpost_status"></div>
						</div>
					</div>
					<div class="poup_form">
						<form role="form" name="form1" method="post" class="addEnquiry" onSubmit="return validate(true);">
							<div class="mb-3">
								<span class="invalid_name" style="display : none; color : #f50606;">Please enter valid name.</span>
								<input type="text" name="name" class="form-control" placeholder="Name" required>
							</div>

							<div class="mb-3">
								<span class="invalid_email" style="display : none; color : #f50606;">Please enter valid Email.</span>
								<input type="email" name="email" class="form-control" placeholder="Email">
							</div>


							<input type="hidden" name="project_number" value="" readonly="readonly">


							<input type="hidden" name="pname" value="DLF One Midtown Delhi" />

							<div class="mb-3">
								<select name="country" onchange="countrycode(this.options[this.selectedIndex].value)" class="form-control country">
									<option value="0">Select Country</option>
								</select>
							</div>

							<input type="hidden" name="comment" value="I need to know more about this..">


							<div class="mb-3">
								<span class="invalid_phone" style="display : none; color : #f50606;">Please enter valid Phone Number.</span>
								<div class="input-group">
									<div class="input-group-prepend"><span class="input-group-text phonecode"></span></div>
									<input type="tel" name="phone" placeholder="Phone No." class="form-control phone" value="" required="required">
								</div>
							</div>
							<button type="submit" name="Submit" class="btn btn-primary btn-block addenqsubmit" id="modalcontact-form-btn"> SUBMIT</button>
						</form>

						<div class="pol_con">
							<div class="our_pro"><span>We Deliver</span></div>
							<ul>
								<li><i class="far fa-check-circle"></i><span>Assured<br> Privacy</span></li>
								<li><i class="fas fa-headset"></i><span>Expert<br> Consultation</span></li>
								<li><i class="fas fa-car-alt"></i><span>Free<br> Site Visit</span></li>
								<li><i class="fas fa-rupee-sign"></i><span>Best<br> Price</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" integrity="sha256-ybRkN9dBjhcS2qrW1z+hfCxq+1aBdwyQM5wlQoQVt/0=" crossorigin="anonymous" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<script type="text/javascript" src="http://server:81/kshama/onemidtowndelhi.com/webroot/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#ftrForm').modal({
				backdrop: 'static',
				keyboard: false
			});
		})
	</script>
	<script src="http://server:81/kshama/onemidtowndelhi.com/webroot/js/global.js"></script>

	<script type="text/javascript">
		$(".addEnquiry").submit(function(e) {
			e.preventDefault();
			$(".addenqsubmit").attr('disabled', true);
			$.ajax({
				url: "http://server:81/kshama/onemidtowndelhi.com/Properties/SubmitPopupForm/",
				type: 'POST',
				contentType: false,
				processData: false,
				data: new FormData(this),
				success: function(data1) {
					$(".addenqsubmit").attr('disabled', false);

					if (data1 == "invalid_name") {

						$(".invalid_name").show();
						$(".invalid_email").hide();
						$(".invalid_phone").hide();
					} else if (data1 == "invalid_email") {

						$(".invalid_name").hide();
						$(".invalid_email").show();
						$(".invalid_phone").hide();

					} else if (data1 == "invalid_phone") {

						$(".invalid_name").hide();
						$(".invalid_email").hide();
						$(".invalid_phone").show();

					} else if (data1 == "blank_comment") {
						$(".invalid_name").hide();
						$(".invalid_email").hide();
						$(".invalid_phone").hide();
						$(".fail").show();
					} else if (data1 == "fail") {
						$(".invalid_name").hide();
						$(".invalid_email").hide();
						$(".invalid_phone").hide();
						$(".fail").show();
					} else {

						window.location.href = 'http://server:81/kshama/onemidtowndelhi.com/thank-you/';

					}
				},
				error: function() {
					swal("", "Network Error", "error");
					$(".addenqsubmit").attr('disabled', false);
				}
			});
		});

		$(".initiatectoc").submit(function(e) {
			e.preventDefault();
			$(".top-email").attr('disabled', true);
			$.ajax({
				url: "http://server:81/kshama/onemidtowndelhi.com/Properties/InitiateCallOnGroup/",
				type: 'POST',
				contentType: false,
				processData: false,
				data: new FormData(this),
				success: function(result) {
					$(".top-email").attr('disabled', false);

					if (result == "invalid_phone") {
						//alert("invalid_phone");
						$(".valid_phone").hide();
						$(".invalid_phone").show();
					} else {
						$(".valid_phone").show();
						$(".invalid_phone").hide();
					}
				},
				error: function() {
					swal("", "Network Error", "error");
					$(".top-email").attr('disabled', false);
				}
			});
		});
	</script>

</body>

</html>