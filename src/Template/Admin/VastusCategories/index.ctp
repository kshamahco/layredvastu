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
            <li class="breadcrumb-item active">Vastu Category</li>
         </ol>
         <div class="container-fluid">
             <h3><?= __('Actions') ?></h3>
             <ul class="side-nav">
               <li><?= $this->Html->link(__('New Vastu Category'), ['action' => 'add']) ?></li>
                
             </ul>
         </div>
         <div class="card mb-3">
            <div class="card-header">
               <i class="fas fa-table"></i>
               Vastu Category List
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                        <tr>
                           <th>Id</th>
                           <th>Cat Url</th>
                           <th>Name</th>
                           <th>h1</th>
                           <th>h2</th>
                           <th>Seo Title</th>
                           <th>Seo Desc</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tfoot>
                        <tr>
                           <th>Id</th>
                           <th>Cat Url</th>
                           <th>Name</th>
                           <th>h1</th>
                           <th>h2</th>
                           <th>Seo Title</th>
                           <th>Seo Desc</th>
                           <th>Action</th>
                        </tr>
                     </tfoot>
                     <tbody>
                        <?php foreach ($vastuscategories as $VastuCategory): ?>
                        <tr>
                           <td><?= $this->Number->format($VastuCategory->id) ?></td>
                           <td><?= $VastuCategory->category_url ;?></td>
                           <td><?= $VastuCategory->name ;?></td>
                           <td><?= h($VastuCategory->heading_1) ?></td>
                           <td><?= h($VastuCategory->heading_2) ?></td>
                           <td><?= h($VastuCategory->seo_title) ?></td>
                           <td><?= h($VastuCategory->seo_description) ?></td>
                           <td class="actions">
                              <?= $this->Html->link(__('Edit'), ['action' => 'edit', $VastuCategory->id]) ?>
                              <?= $this->Form->postLink(__('Delete'), ['controller' => 'VastusCategories','action' => 'delete', $VastuCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $VastuCategory->id)]) ?>
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