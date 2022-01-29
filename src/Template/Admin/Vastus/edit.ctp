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
   <?= $this->Form->create($vastus); ?>
    <fieldset>
      <legend><?= __('Add Vastu') ?></legend>
      <?php
         echo '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
         echo "<tr><td>Vastu Category</td><td>".$this->Form->input('category_id', ['options' =>$VastusCategories,'label'=>false,'class'=>'form-control','required'=>true,'empty' => 'Select Category'])."</td>
         </tr>";
         echo "<tr><td>Name</td><td>".$this->Form->input('name',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>URL</td><td>".$this->Form->input('url',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>h1</td><td>".$this->Form->input('heading_1',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>h2</td><td>".$this->Form->input('heading_2',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>Short Post</td><td>".$this->Form->input('short_post',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>Post</td><td>".$this->Form->input('post',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>Seo Title</td><td>".$this->Form->input('seo_title',array('label'=>false,'class'=>'form-control'))."</td></tr>";
         echo "<tr><td>Seo Description</td><td>".$this->Form->input('seo_description',array('label'=>false,'class'=>'form-control'))."</td></tr>";  
         echo '</table>';
      ?>
   </fieldset>
   <?= $this->Form->button(__('Submit')) ?>
   <?= $this->Form->end() ?>
</div>
