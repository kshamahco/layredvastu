<style>
   .overview{width:100%}
</style>
<div id="wrapper">
   <div id="content-wrapper">
      <div class="container-fluid">
         <ol class="breadcrumb">
            <li class="breadcrumb-item">
               <a href="<?=SITE_PATH?>admin/users/welcome/">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Page</li>
         </ol>
         <h3><?= __('Actions') ?></h3>
         <ul class="side-nav">
            <li><?= $this->Html->link(__('New Page'), ['action' => 'add']) ?></li>
         </ul>

         <div class="card mb-3">
            <div class="card-header">
               <i class="fas fa-table"></i>
               Page List
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                        <tr>
                           <th>Id</th>
                           <th>Seo Title</th>
                           <th>Seo Desc</th>
                           <th>Heading 1</th>
                           <th>Heading 2</th>
                           <th>Actions</th>
                        </tr>
                     </thead>
                     <tfoot>
                        <tr>
                           <th>Id</th>
                           <th>Seo Title</th>
                           <th>Seo Desc</th>
                           <th>Heading 1</th>
                           <th>Heading 2</th>
                           <th>Actions</th>
                        </tr>
                     </tfoot>
                     <tbody>
                        <?php foreach ($pages as $page): ?>
                        <tr>
                           <td><?= $this->Number->format($page->id) ?></td>
                           <td><?= h($page->seo_title) ?></td>
                           <td><?= h($page->seo_description) ?></td>
                           <td><?= h($page->heading_1) ?></td>
                           <td><?= h($page->heading_2) ?></td>
                           <td class="actions">
                           <?= $this->Html->link(__('Edit'), ['action' => 'edit', $page->id]) ?>
                           </td>
                        </tr>
                        <?php endforeach; ?>
                     </tbody>
                  </table>

               </div> 
            </div> 
         </div>
</div>
