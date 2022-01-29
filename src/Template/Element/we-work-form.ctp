<div class="wework_content__inner">
  <div class="messages" id="modalcontact-div" style="display:none;">
    <div class="text-center">
      <div id="modalpost_status"></div>
    </div>
  </div>
  <div class="poup_form">
    <div class="form_heading">EXPRESS YOUR INTEREST</div>
    <div class="form-group">
      <span class="invalid_name" style="display : none; color : #f50606;">Please enter valid name.</span>
      <input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="" required>
    </div>

    <div class="form-group">
      <span class="invalid_email" style="display : none; color : #f50606;">Please enter valid Email.</span>
      <input type="email" name="email" class="form-control" placeholder="Enter email" value="" >
    </div>

    <? if(isset($project[0]['c_cnumber']) && $project[0]['c_cnumber']){
        $pnumber = $project[0]['c_cnumber'];
    }else{
        $pnumber = '';
    } ?>

    <input type="hidden" name="project_number" value="<?= $pnumber; ?>" readonly="readonly">

    <input type="hidden" name="pname" value="<?= $project[0]['heading1'] ?>" />
    <input type="hidden" name="roundrobinstatus" value="<?= $project[0]['round_robin'] ?>" />
    <div class="form-group">
      <select name="country" class="form-control country" onchange="countrycode(this.options[this.selectedIndex].value)" required>
        <option value="">Country</option>
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
      <input type="submit" name="Submit" class="btn btn-primary btn-block we-work-form" id="special-submit" value="SUBMIT">
    </div>
  </div>
</div>