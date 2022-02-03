<ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="#">Dashboard</a>
   </li>
   <li class="breadcrumb-item active">Vastu Category Edit</li>
</ol>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Vastu Categories'), ['action' => 'index']) ?></li></li>
    </ul>
</div>
<div class="VastusCategories form large-10 medium-9 columns form-group container">
   <?= $this->Form->create($staticInfo,["type"=>"file"]); ?>
    <fieldset>
      <legend><?= __('Edit Vastu Category') ?></legend>
      <?php
         echo '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
         echo "<tr><td>Facebook URL</td><td>".$this->Form->input('facebook_url',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>You Tube Url</td><td>".$this->Form->input('utube_url',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>Twiter Url</td><td>".$this->Form->input('twiter_url',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>Insta Url</td><td>".$this->Form->input('insta_url',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>Phone</td><td>".$this->Form->input('phone',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>WhatsApp No</td><td>".$this->Form->input('whatsapp_no',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>Email</td><td>".$this->Form->input('email',array('label'=>false,'class'=>'form-control'))."</td></tr>";

         /**************Logo**************/
         echo "<tr><td>Logo</td><td>".$this->Form->input('logo_new',['type'=>'file','label'=>false])."<br>";
         if($staticInfo['logo']){
            echo "<a href='".IMG_PATH.'logo/'.$staticInfo['logo']."' target='_blank'>".$this->Html->image(IMG_PATH.'logo/'.$staticInfo['logo'], ['width' =>'250','height' =>'100'])."&nbsp;&nbsp;&nbsp;View</a></td></tr>";
         }
         echo $this->Form->input('logo',["type"=>"hidden"]);
         /**************Logo**************/
         echo "<tr><td>Logo Alt</td><td>".$this->Form->input('logo_alt',array('label'=>false,'class'=>'form-control'))."</td></tr>";

         echo "<tr><td>Tawk To Chat</td><td>".$this->Form->input('tawkto',array('label'=>false,'class'=>'form-control'))."</td></tr>";         
         echo '</table>';
      ?>
   </fieldset>
   <?= $this->Form->button(__('Submit')) ?>
   <?= $this->Form->end() ?>
</div>
