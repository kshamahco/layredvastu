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
   <?= $this->Form->create($vastusCategory,["type"=>"file"]); ?>
    <fieldset>
      <legend><?= __('Edit Vastu Category') ?></legend>
      <?php
         
         echo '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
         echo "<tr><td>Category URL</td><td>".$this->Form->input('category_url',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>Name</td><td>".$this->Form->input('name',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>Seo Title</td><td>".$this->Form->input('seo_title',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>Seo Description</td><td>".$this->Form->input('seo_description',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>h1</td><td>".$this->Form->input('heading_1',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>h2</td><td>".$this->Form->input('heading_2',array('label'=>false,'class'=>'form-control'))."</td></tr>";

         /**************Listing Image**************/
         echo "<tr><td>Listing Image</td><td>".$this->Form->input('listing_image_new',['type'=>'file','label'=>false])."<br>";
         if($vastusCategory['listing_image']){
            echo "<a href='".IMG_PATH.'listingimage/'.$vastusCategory['listing_image']."' target='_blank'>".$this->Html->image(IMG_PATH.'listingimage/'.$vastusCategory['listing_image'], ['width' =>'250','height' =>'100'])."&nbsp;&nbsp;&nbsp;View</a></td></tr>";
         }
         echo $this->Form->input('listing_image',["type"=>"hidden"]);
         /**************Listing Image**************/

         echo "<tr><td>Video Url</td><td>".$this->Form->input('video_url',array('label'=>false,'class'=>'form-control'))."</td></tr>";

         /**************Banner Image**************/
         echo "<tr><td>Banner Image</td><td>".$this->Form->input('banner_image_new',['type'=>'file','label'=>false])."<br>";
         if($vastusCategory['banner_image']){
            echo "<a href='".IMG_PATH.'bannerimage/'.$vastusCategory['banner_image']."' target='_blank'>".$this->Html->image(IMG_PATH.'bannerimage/'.$vastusCategory['banner_image'], ['width' =>'250','height' =>'100'])."&nbsp;&nbsp;&nbsp;View</a></td></tr>";
         }
         echo $this->Form->input('banner_image',["type"=>"hidden"]);
         /**************Banner Image**************/

         /**************Merged Image**************/
         echo "<tr><td>Merged Image</td><td>".$this->Form->input('merged_image_new',['type'=>'file','label'=>false])."<br>";
         if($vastusCategory['merged_image']){
            echo "<a href='".IMG_PATH.'mergedimage/'.$vastusCategory['merged_image']."' target='_blank'>".$this->Html->image(IMG_PATH.'mergedimage/'.$vastusCategory['merged_image'], ['width' =>'250','height' =>'100'])."&nbsp;&nbsp;&nbsp;View</a></td></tr>";
         }
         echo $this->Form->input('merged_image',["type"=>"hidden"]);
         /**************Merged Image**************/

         echo "<tr><td>Description</td><td>".$this->Form->input('description',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo '</table>';
      ?>
   </fieldset>
   <?= $this->Form->button(__('Submit')) ?>
   <?= $this->Form->end() ?>
</div>
