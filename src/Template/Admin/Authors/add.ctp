<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Authors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="authors form large-10 medium-9 columns">
    <?= $this->Form->create($author,['type'=>'file']); ?>
    <fieldset>
        <legend><?= __('Add Author') ?></legend>
        <?php
            echo $this->Form->input('user_name');
            echo $this->Form->input('password');
            echo $this->Form->input('name');
            echo $this->Form->input('email');
            echo $this->Form->input('status',['type'=>'radio','options'=>['active'=>'Active','deactive'=>'Deactive']]);
            echo $this->Form->input('occupation');
            echo $this->Form->input('about_user');
            echo $this->Form->input('facebook');
            echo $this->Form->input('twitter');
            echo $this->Form->input('googleplus');
            echo $this->Form->input('pintrest');
            echo $this->Form->input('linkedin');
            echo $this->Form->input('flicker');
            echo $this->Form->input('photo',['type'=>'file']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
