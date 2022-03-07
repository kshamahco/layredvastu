<style type="text/css">
   label[for=status-inactive]{
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
   <li class="breadcrumb-item active">Vastu Edit</li>
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
      <legend><?= __('Add Vastu') ?></legend>
      <?php
         echo '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
         echo "<tr><td>Name</td><td>".$this->Form->input('name',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>URL</td><td>".$this->Form->input('url',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>H1</td><td>".$this->Form->input('heading_1',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>H2</td><td>".$this->Form->input('heading_2',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>Post</td><td>".$this->Form->input('post',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>Seo Title</td><td>".$this->Form->input('seo_title',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>Seo Desc</td><td>".$this->Form->input('seo_description',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         /**************Listing Image**************/
         echo "<tr><td>Listing Image<td>".$this->Form->input('listing_image',['type'=>'file','label'=>false])."</tr>";
         /**************Listing Image**************/

         /**************Banner Image**************/         
         echo "<tr><td>Banner Image<td>".$this->Form->input('banner_image',['type'=>'file','label'=>false])."</tr>";
         /**************Banner Image**************/     

         echo "<tr><td>Status</td><td colspan='3'><div class='radio_align'>".$this->Form->input('status',['label'=>false,'type'=>'radio','options' => ['active'=>'Active','inactive'=>'Inactive']])."</div></td></tr>"; 
         echo "<tr><td>Mark as similar</td><td colspan='3'><div class='radio_align'>".$this->Form->input('mark_as_similar',['label'=>false,'type'=>'radio','options' => ['yes'=>'Yes','no'=>'No']])."</div></td></tr>"; 
         echo '</table>';
      ?>
   </fieldset>
   <?= $this->Form->button(__('Submit')) ?>
   <?= $this->Form->end() ?>
</div>
<?php 
   echo $this->SetupEditor->setupEditor('post'); 
?>
