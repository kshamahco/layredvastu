<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use Cake\Network\Exception\NotFoundException;

/**
 * Vastus Controller
 *
 * @property \App\Model\Table\BlogsTable $Vastus
 */
class VastusController extends AppController{

   
    
   public function index(){ 
      $this->paginate = [
         'contain' => ['VastusCategories']
      ];
      $this->set('vastus', $this->paginate($this->Vastus->find()->order(['vastus.id'=>'desc'])));
      $this->set('_serialize', ['vastus']);
   }

   public function add(){

      $vastus = $this->Vastus->newEntity();
      if ($this->request->is('post')) {
         $vastusData = $this->Vastus->patchEntity($vastus, $this->request->data);
         if ($this->Vastus->save($vastusData)) {
            $this->Flash->success('The Vastu has been saved.');
            return $this->redirect(['action' => 'index']);
         } else {
            $this->Flash->error('The Vastu could not be saved. Please, try again.');
         }
      }

      $VastusCategories = $this->Vastus->VastusCategories->find('list');
      $this->set(compact('vastus','VastusCategories'));
      $this->set('_serialize', ['vastus']);
   }


   public function edit($id = null){

      $vastus = $this->Vastus->get($id, [
         'contain' => []
      ]);
        
      if ($this->request->is(['patch', 'post', 'put'])) {
         
         $vastusData = $this->Vastus->patchEntity($vastus, $this->request->data);
         if ($this->Vastus->save($vastusData)) {
             $this->Flash->success('The Vastu has been saved.');
             return $this->redirect(['action' => 'index']);
         } else {
             $this->Flash->error('The Vastu could not be saved. Please, try again.');
         }
      }
      $VastusCategories = $this->Vastus->VastusCategories->find('list');
      $this->set(compact('vastus','VastusCategories'));
      $this->set('_serialize', ['vastus']);

   }

   public function delete($id = null){
      $vastu = $this->Vastus->get($id);
      
        if ($this->Vastus->delete($vastu)) {
         
            $this->Flash->success('The Vastu has been deleted.');
        } else {
            $this->Flash->error('The Vastu could not be deleted. Please, try again.');
        }
        return $this->redirect(['controller' => 'Vastus','action' => 'index']);
   }

    
}
