<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use Cake\Network\Exception\NotFoundException;

/**
 * StaticInformations Controller
 *
 * @property \App\Model\Table\StaticInformations $StaticInformations
 */
class StaticInformationsController extends AppController{

   
    
   public function index(){ 
      $this->set('StaticInformations', $this->paginate($this->StaticInformations->find()->order(['id'=>'desc'])));
      $this->set('_serialize', ['StaticInformations']);
   }   

   public function edit($id = null){
      
      $staticInfo = $this->StaticInformations->get($id, [
         'contain' => []
      ]);
        
      if ($this->request->is(['patch', 'post', 'put'])) {
         $this->loadComponent('Upload');

         /**************Logo**************/
         $destinationlimage = realpath('../webroot/img/logo/') . '/';
         $resultval="" ;
         if($this->request->data['logo_new']['size']!=0){
            @unlink($destinationlimage.$this->request->data['logo']);
            $file = $this->request->data['logo_new'];
            $resultval = $this->Upload->uploadimg($file,$destinationlimage,'',157,102); 
            $this->request->data['logo']=$resultval;
         }
         /**************Logo**************/

         $staticinformation = $this->StaticInformations->patchEntity($staticInfo, $this->request->data);
         if ($this->StaticInformations->save($staticinformation)) {
            $this->Flash->success('The Vastu category has been saved.');
            return $this->redirect(['action' => 'index']);
         } else {
            $this->Flash->error('The Vastu category could not be saved. Please, try again.');
         }
      }
      $this->set(compact('staticInfo'));
      $this->set('_serialize', ['staticInfo']);
   }
}

?>