<section class="decision_sec" id="decision">
  <div class="h2">DECISION CORNER</div>
  <div class="h4">Do You Want a deal of Investment? Just let us know!!</div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="decision__left">
          <img src="<?= _BASEURL_ ?>images/ask_any_question.svg" class="img-fluid" alt="Ask Any Question">
          <div class="h6">Let Us Serve You Beyond</div>
          <a href="javascript:void(Tawk_API.toggle())" class="btn btn-outline-secondary" onclick='schedule_click("Ask Question","Ask Question","Ask Question");'>Ask&nbsp;Any&nbsp;Question</a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="decision__right">
          <img src="<?= _BASEURL_ ?>images/schedule_meeting.svg" class="img-fluid" alt="Ask Any Question">
          <div class="h6">Talk For Right Investment</div>
          <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#modalSchedule" onclick='schedule_click("Schedule","Schedule","Schedule");'>Schedule&nbsp;Now</button>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="modal fade" id="modalSchedule" tabindex="-1" role="document" aria-labelledby="modalSchedule" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="sche_id">
        <div class="mcontent">
          <div class="mcontent__heading">Talk To Real Estate Professional</div>
          <? /*<ul>
            <li>Have you been searching for the right property for your investment?</li>
            <li>Buying property takes strenuous efforts to find out the best property.</li>
            <li>Relax! <?= $project->heading1 ?> Will serve you unbiased advice on all leading real estate properties and you enjoy the best property assistance.</li>
          </ul>*/ ?>
        </div>
        <div class="poup_form">
          <div class="form__heading">EXPRESS YOUR INTEREST</div>
          <div class="messages" id="contact-div" style="display: none;">
            <a href="#" class="closeMessage"></a>
            <p id="post_status"></p>
          </div>
          <form role="form" name="form1" method="post" class="addEnquiry" onSubmit="return validate(true);">
            <div class="form-group">
              <span class="invalid_name" style="display : none; color : #f50606;">Please enter valid name.</span>
              <input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="" required>
            </div>

            <? if(isset($project[0]['c_cnumber']) && $project[0]['c_cnumber']){
                $pnumber = $project[0]['c_cnumber'];
            }else{
                $pnumber = '';
            } ?>

            <input type="hidden" name="project_number" value="<?= $pnumber; ?>" readonly="readonly">

            <div class="form-group">
              <span class="invalid_email" style="display : none; color : #f50606;">Please enter valid Email.</span>
              <input type="email" name="email" class="form-control" placeholder="Enter email" value="" required>
            </div>

            <input type="hidden" name="pname" value="<?= $project[0]['heading1'] ?>" />
            <input type="hidden" name="roundrobinstatus" value="<?= $project[0]['round_robin'] ?>" />
            <div class="form-group">
              <select name="country" class="form-control country" onchange="countrycode(this.options[this.selectedIndex].value)" required>
                <option value="">Select Country</option>
              </select>
            </div>

            <div class="form-group">
              <span class="invalid_phone" style="display : none; color : #f50606;">Please enter valid Phone Number.</span>
              <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text phonecode"></span></div>
                <input type="tel" name="phone" placeholder="Phone No." class="form-control" value="" required>
              </div>
            </div>

            <input type="hidden" name="comment" value="I need to know more about this project." />
            <div class="text-center">
              <input type="submit" name="Submit" class="btn btn-primary btn-block addenqsubmit" id="special-submit" value="Schedule Now">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>