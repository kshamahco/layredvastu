<ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="#">Dashboard</a>
   </li>
   <li class="breadcrumb-item active">Page Edit</li>
</ol>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Page'), ['action' => 'index']) ?></li></li>
    </ul>
</div>
<div class="VastusCategories form large-10 medium-9 columns form-group container">
   <?= $this->Form->create($page,["type"=>"file"]); ?>
    <fieldset>
      <legend><?= __('Edit Page') ?></legend>
      <?php
         
         echo '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
         
         echo "<tr><td>Name</td><td>".$this->Form->input('url_display',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>Seo Title</td><td>".$this->Form->input('seo_title',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>Seo Description</td><td>".$this->Form->input('seo_description',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>H1</td><td>".$this->Form->input('heading_1',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>H2</td><td>".$this->Form->input('heading_2',array('label'=>false,'class'=>'form-control'))."</td></tr>";

         /**************Listing Image**************/
         echo "<tr><td>Listing Image</td><td>".$this->Form->input('listing_image_new',['type'=>'file','label'=>false])."<br>";
         if($page['listing_image']){
            echo "<a href='".IMG_PATH.'listingimage/'.$page['listing_image']."' target='_blank'>".$this->Html->image(IMG_PATH.'listingimage/'.$page['listing_image'], ['width' =>'250','height' =>'100'])."&nbsp;&nbsp;&nbsp;View</a></td></tr>";
         }
         echo $this->Form->input('listing_image',["type"=>"hidden"]);
         /**************Listing Image**************/

         echo "<tr><td>Video Url</td><td>".$this->Form->input('video_url',array('label'=>false,'class'=>'form-control'))."</td></tr>";

         /**************Banner Image**************/
         echo "<tr><td>Banner Image</td><td>".$this->Form->input('banner_image_new',['type'=>'file','label'=>false])."<br>";
         if($page['banner_image']){
            echo "<a href='".IMG_PATH.'bannerimage/'.$page['banner_image']."' target='_blank'>".$this->Html->image(IMG_PATH.'bannerimage/'.$page['banner_image'], ['width' =>'250','height' =>'100'])."&nbsp;&nbsp;&nbsp;View</a></td></tr>";
         }
         echo $this->Form->input('banner_image',["type"=>"hidden"]);
         /**************Banner Image**************/

         
         echo "<tr><td>Description Heading</td><td>".$this->Form->input('desc_heading',array('label'=>false,'class'=>'form-control'))."</td></tr>";

         echo "<tr><td>Description</td><td>".$this->Form->input('description',array('label'=>false,'class'=>'form-control'))."</td></tr>";

         echo "<tr><td>Blog Seo Title</td><td>".$this->Form->input('blog_seo_title',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>Blog Seo Description</td><td>".$this->Form->input('blog_seo_description',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo '</table>';
      ?>
   </fieldset>
   <?= $this->Form->button(__('Submit')) ?>
   <?= $this->Form->end() ?>
</div>
