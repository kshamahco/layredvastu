<div class="rt_form">
  	<div class="form_heading">Send Your Query</div>
  	<form method="post" name="form1" class="form-floating contactform">
	    <div class="mb-3 form-floating">
	    	<span class="invalid_name" style="display : none; color : #f50606;">Please enter valid name.</span>
	      	<input type="text" name="name" id="fName" class="form-control" placeholder="Your Name" required>
	      	<label for="fName">Your Name</label>
	    </div>
	    <div class="mb-3 form-floating">
	    	<span class="invalid_email" style="display : none; color : #f50606;">Please enter valid Email.</span>
	      	<input type="email" name="email" id="fEmail" class="form-control" placeholder="Enter email" required>
	      	<label for="fEmail">Email address</label>
	    </div>
	    <div class="mb-3 form-floating">
	    	<span class="invalid_phone" style="display : none; color : #f50606;">Please enter valid Phone Number.</span>
	      	<input type="tel" name="phone" id="fmNumber" placeholder="Phone No." class="form-control" required>
	      	<label for="fmNumber">Phone No.</label>
	    </div>

	    <div class="mb-3 form-floating">
	    	<span class="invalid_comment" style="display : none; color : #f50606;">Please enter valid Comment.</span>
	      	<textarea class="form-control" name="comment" placeholder="Leave a comment here" id="ftArea" required></textarea>
	      	<label for="ftArea">Comments</label>
	    </div>

	    <div class="d-grid">
	      	<button type="submit" class="btn btn-primary addenqsubmit" type="submit">SEND A MESSAGE</button>
	    </div>
  	</form>
</div>