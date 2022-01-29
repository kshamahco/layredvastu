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
            <li class="breadcrumb-item active">Static Information</li>
         </ol>
         <div class="container-fluid">
             <h3><?= __('Actions') ?></h3>
         </div>
         <div class="card mb-3">
            <div class="card-header">
               <i class="fas fa-table"></i>
               Static Information
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                        <tr>
                           <th>Id</th>
                           <th>Facebook Url</th>
                           <th>You tube Url</th>
                           <th>twiter Url</th>
                           <th>Insta Url</th>
                           <th>Phone</th>
                           <th>Email</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tfoot>
                        <tr>
                           <th>Id</th>
                           <th>Facebook Url</th>
                           <th>You tube Url</th>
                           <th>twiter Url</th>
                           <th>Insta Url</th>
                           <th>Phone</th>
                           <th>Email</th>
                           <th>Action</th>
                        </tr>
                     </tfoot>
                     <tbody>
                        <?php foreach ($StaticInformations as $StaticInfo): ?>
                        <tr>
                           <td><?= $this->Number->format($StaticInfo->id) ?></td>
                           <td><?= $StaticInfo->facebook_url ;?></td>
                           <td><?= $StaticInfo->utube_url ;?></td>
                           <td><?= h($StaticInfo->twiter_url) ?></td>
                           <td><?= h($StaticInfo->insta_url) ?></td>
                           <td><?= h($StaticInfo->phone) ?></td>
                           <td><?= h($StaticInfo->email) ?></td>
                           <td class="actions">
                              <?= $this->Html->link(__('Edit'), ['action' => 'edit', $StaticInfo->id]) ?>
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