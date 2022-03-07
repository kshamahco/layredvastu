<style>
   .overview{width:100%}

   .paginator .pagination li:not(:first-child, :last-child){
      width: 10px;
      margin-left: 10px;
      margin-right: 10px;
   }

   .next{
      margin-left: 10px;
   }
</style>
<div id="wrapper">
   <div id="content-wrapper">
      <div class="container-fluid">
         <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Blog</li>
         </ol>
         <div class="container-fluid">
             <h3><?= __('Actions') ?></h3>
             <ul class="side-nav">
               <li><?= $this->Html->link(__('New Blog'), ['action' => 'add']) ?></li>
                
             </ul>
         </div>
         <div class="card mb-3">
            <div class="card-header">
               <i class="fas fa-table"></i>
               Blog List
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                        <tr>
                           <th>Id</th>
                           <th>Name</th>
                           <th>Url</th>
                           <th>H1</th>
                           <th>H2</th>
                           <th>Seo Title</th>
                           <th>Seo Desc</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tfoot>
                        <tr>
                           <th>Id</th>
                           <th>Name</th>
                           <th>Url</th>
                           <th>h1</th>
                           <th>h2</th>
                           <th>Seo Title</th>
                           <th>Seo Desc</th>
                           <th>Action</th>
                        </tr>
                     </tfoot>
                     <tbody>
                        <?php foreach ($blogs as $Singleblogs): ?>
                        <tr>
                           <td><?= $this->Number->format($Singleblogs->id) ?></td>
                           <td><?= $Singleblogs->name ;?></td>
                           <td><?= $Singleblogs->url ;?></td>
                           <td><?= h($Singleblogs->heading_1) ?></td>
                           <td><?= h($Singleblogs->heading_2) ?></td>
                           <td><?= h($Singleblogs->seo_title) ?></td>
                           <td><?= h($Singleblogs->seo_description) ?></td>
                           <td class="actions">
                              <?= $this->Html->link(__('Edit'), ['action' => 'edit', $Singleblogs->id]) ?>
                              <?= $this->Form->postLink(__('Delete'), ['controller' => 'Blogs','action' => 'delete', $Singleblogs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $Singleblogs->id)]) ?>
                           </td>
                        </tr>
                        <?php endforeach; ?>
                     </tbody>
                  </table>
                  <div class="paginator">
                     <ul class="pagination">
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                     </ul>
                     <p><?= $this->Paginator->counter() ?></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>