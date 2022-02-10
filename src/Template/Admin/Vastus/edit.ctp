<style type="text/css">
   label[for=ping-on-home-no]{
      margin-left: 21px;
   }

   label[for=mark-as-similar-no]{
      margin-left: 21px;
   }
</style>
<script src="<?= _BASEURL_.'js/ckeditor/ckeditor.js' ?>"></script>
<ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="#">Dashboard</a>
   </li>
   <li class="breadcrumb-item active">Vastu Add</li>
</ol>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Vastu Categories'), ['action' => 'index']) ?></li></li>
    </ul>
</div>
<div class="VastusCategories form large-10 medium-9 columns form-group container">
   <?= $this->Form->create($vastus,["type"=>"file"]); ?>
    <fieldset>
        <legend><?= __('Edit Vastu') ?></legend>
        <?php
            echo '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
            echo "<tr><td>Vastu Category</td><td>".$this->Form->input('category_id', ['options' =>$VastusCategories,'label'=>false,'class'=>'form-control','required'=>true,'empty' => 'Select Category'])."</td>
         </tr>";
            echo "<tr><td>Name</td><td>".$this->Form->input('name',array('label'=>false,'class'=>'form-control'))."</td></tr>";
            echo "<tr><td>URL</td><td>".$this->Form->input('url',array('label'=>false,'class'=>'form-control'))."</td></tr>";
            echo "<tr><td>h1</td><td>".$this->Form->input('heading_1',array('label'=>false,'class'=>'form-control'))."</td></tr>";
            echo "<tr><td>h2</td><td>".$this->Form->input('heading_2',array('label'=>false,'class'=>'form-control'))."</td></tr>";
            echo "<tr><td>Short Post</td><td>".$this->Form->input('short_post',array('label'=>false,'class'=>'form-control'))."</td></tr>";
            echo "<tr><td>First Paragraph</td><td>".$this->Form->input('first_para',array('label'=>false,'class'=>'form-control'))."</td></tr>";
            /**************First Para Image**************/
            echo "<tr><td>First Para Image</td><td>".$this->Form->input('first_para_image_new',['type'=>'file','label'=>false])."<br>";
            if($vastus['first_para_image']){
                echo "<a href='".IMG_PATH.'vastuimage/'.$vastus['first_para_image']."' target='_blank'>".$this->Html->image(IMG_PATH.'vastuimage/'.$vastus['first_para_image'], ['width' =>'250','height' =>'100'])."&nbsp;&nbsp;&nbsp;View</a></td></tr>";
            }
            echo $this->Form->input('first_para_image',["type"=>"hidden"]);
            /**************First Para Image**************/
            
            echo "<tr><td>Second Paragraph</td><td>".$this->Form->input('second_para',array('label'=>false,'class'=>'form-control'))."</td></tr>";
            
            /**************Second Para Image**************/
            echo "<tr><td>Second Para Image</td><td>".$this->Form->input('second_para_image_new',['type'=>'file','label'=>false])."<br>";
            if($vastus['second_para_image']){
                echo "<a href='".IMG_PATH.'vastuimage/'.$vastus['second_para_image']."' target='_blank'>".$this->Html->image(IMG_PATH.'vastuimage/'.$vastus['second_para_image'], ['width' =>'250','height' =>'100'])."&nbsp;&nbsp;&nbsp;View</a></td></tr>";
            }
            echo $this->Form->input('second_para_image',["type"=>"hidden"]);
            /**************Second Para Image**************/
            
            echo "<tr><td>Third Paragraph</td><td>".$this->Form->input('third_para',array('label'=>false,'class'=>'form-control'))."</td></tr>";
            
            /**************Third Para Image**************/
            echo "<tr><td>Third Para Image</td><td>".$this->Form->input('third_para_image_new',['type'=>'file','label'=>false])."<br>";
            if($vastus['third_para_image']){
                echo "<a href='".IMG_PATH.'vastuimage/'.$vastus['third_para_image']."' target='_blank'>".$this->Html->image(IMG_PATH.'vastuimage/'.$vastus['third_para_image'], ['width' =>'250','height' =>'100'])."&nbsp;&nbsp;&nbsp;View</a></td></tr>";
            }
            echo $this->Form->input('third_para_image',["type"=>"hidden"]);
            /**************Third Para Image**************/
            
            echo "<tr><td>Fourth Paragraph</td><td>".$this->Form->input('fourth_para',array('label'=>false,'class'=>'form-control'))."</td></tr>";
            /**************Fourth Para Image**************/
            echo "<tr><td>Fourth Para Image</td><td>".$this->Form->input('fourth_para_image_new',['type'=>'file','label'=>false])."<br>";
            if($vastus['fourth_para_image']){
                echo "<a href='".IMG_PATH.'vastuimage/'.$vastus['fourth_para_image']."' target='_blank'>".$this->Html->image(IMG_PATH.'vastuimage/'.$vastus['fourth_para_image'], ['width' =>'250','height' =>'100'])."&nbsp;&nbsp;&nbsp;View</a></td></tr>";
            }
            echo $this->Form->input('fourth_para_image',["type"=>"hidden"]);
            /**************Fourth Para Image**************/
            
            
            echo "<tr><td>Fifth Paragraph</td><td>".$this->Form->input('fifth_para',array('label'=>false,'class'=>'form-control'))."</td></tr>";
            /**************Fifth Para Image**************/
            echo "<tr><td>Fifth Para Image</td><td>".$this->Form->input('fifth_para_image_new',['type'=>'file','label'=>false])."<br>";
            if($vastus['fifth_para_image']){
                echo "<a href='".IMG_PATH.'vastuimage/'.$vastus['fifth_para_image']."' target='_blank'>".$this->Html->image(IMG_PATH.'vastuimage/'.$vastus['fifth_para_image'], ['width' =>'250','height' =>'100'])."&nbsp;&nbsp;&nbsp;View</a></td></tr>";
            }
            echo $this->Form->input('fifth_para_image',["type"=>"hidden"]);
            /**************Fifth Para Image**************/
            
            echo "<tr><td>Sixth Paragraph</td><td>".htmlspecialchars('<p>You must consider the services of a Vastu expert, to help you with the placement of rooms and items in your home. However, to help you out, here is a quick summary:</p>')."<br>".
            htmlspecialchars('<ul>')."<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".
            htmlspecialchars('<li><i class="fa-thin fa-hand-back-point-right"></i> Do not place the staircase in the north direction. It may cause financial difficulties.</li>')."<br>".
            htmlspecialchars('</ul>').$this->Form->input('sixth_para',array('label'=>false,'class'=>'form-control'))."</td></tr>";
            /**************Sixth Para Image**************/
            echo "<tr><td>Sixth Para Image</td><td>".$this->Form->input('sixth_para_image_new',['type'=>'file','label'=>false])."<br>";
            if($vastus['sixth_para_image']){
                echo "<a href='".IMG_PATH.'vastuimage/'.$vastus['sixth_para_image']."' target='_blank'>".$this->Html->image(IMG_PATH.'vastuimage/'.$vastus['sixth_para_image'], ['width' =>'250','height' =>'100'])."&nbsp;&nbsp;&nbsp;View</a></td></tr>";
            }
            echo $this->Form->input('sixth_para_image',["type"=>"hidden"]);
            /**************Sixth Para Image**************/
            
            
            echo "<tr><td>Seo Title</td><td>".$this->Form->input('seo_title',array('label'=>false,'class'=>'form-control'))."</td></tr>";
            /**************Listing Image**************/
            echo "<tr><td>Listing Image</td><td>".$this->Form->input('listing_image_new',['type'=>'file','label'=>false])."<br>";
            if($vastus['listing_image']){
                echo "<a href='".IMG_PATH.'listingimage/'.$vastus['listing_image']."' target='_blank'>".$this->Html->image(IMG_PATH.'listingimage/'.$vastus['listing_image'], ['width' =>'250','height' =>'100'])."&nbsp;&nbsp;&nbsp;View</a></td></tr>";
            }
            echo $this->Form->input('listing_image',["type"=>"hidden"]);
            /**************Listing Image**************/

            echo "<tr><td>Video Url</td><td>".$this->Form->input('video_url',array('label'=>false,'class'=>'form-control'))."</td></tr>";

            echo "<tr><td>Ping On Index Page</td><td colspan='3'><div class='radio_align'>".$this->Form->input('ping_on_home',['label'=>false,'type'=>'radio','options' => ['yes'=>'Yes','no'=>'No']])."</div></td></tr>";  

            echo "<tr><td>Mark as similar</td><td colspan='3'><div class='radio_align'>".$this->Form->input('mark_as_similar',['label'=>false,'type'=>'radio','options' => ['yes'=>'Yes','no'=>'No']])."</div></td></tr>"; 
            echo '</table>';
        ?>
    </fieldset>
   <?= $this->Form->button(__('Submit')) ?>
   <?= $this->Form->end() ?>
</div>
<?php 
   echo $this->SetupEditor->setupEditor('first_para'); 
   echo $this->SetupEditor->setupEditor('second_para'); 
   echo $this->SetupEditor->setupEditor('third_para'); 
   echo $this->SetupEditor->setupEditor('fourth_para'); 
   echo $this->SetupEditor->setupEditor('sixth_para');
?>
