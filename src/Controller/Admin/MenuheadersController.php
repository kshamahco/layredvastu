<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Menuheaders Controller
 *
 * @property \App\Model\Table\MenuheadersTable $Menuheaders
 */
class MenuheadersController extends AppController{

    
   public function index(){
      $this->set('menuheaders', $this->paginate($this->Menuheaders));
      $this->set('_serialize', ['menuheaders']);
   }

   
   public function view($id = null){
      $menuheader = $this->Menuheaders->get($id, [
         'contain' => ['Menus']
      ]);
      $this->set('menuheader', $menuheader);
      $this->set('_serialize', ['menuheader']);
   }

   
   public function add(){
      $menuheader = $this->Menuheaders->newEntity();
      if ($this->request->is('post')) {
         $menuheader = $this->Menuheaders->patchEntity($menuheader, $this->request->data);
         if ($this->Menuheaders->save($menuheader)) {
            $this->Flash->success('The menuheader has been saved.');
            return $this->redirect(['action' => 'index']);
         } else {
            $this->Flash->error('The menuheader could not be saved. Please, try again.');
         }
      }
      $this->set(compact('menuheader'));
      $this->set('_serialize', ['menuheader']);
   }

    
   public function edit($id = null){
      $menuheader = $this->Menuheaders->get($id, [
         'contain' => []
      ]);
      if ($this->request->is(['patch', 'post', 'put'])) {
         $menuheader = $this->Menuheaders->patchEntity($menuheader, $this->request->data);
         if ($this->Menuheaders->save($menuheader)) {
            $this->Flash->success('The menuheader has been saved.');
            return $this->redirect(['action' => 'index']);
         } else {
            $this->Flash->error('The menuheader could not be saved. Please, try again.');
         }
      }
      $this->set(compact('menuheader'));
      $this->set('_serialize', ['menuheader']);
   }

   
   public function delete($id = null){
      $this->request->allowMethod(['post', 'delete']);
      $menuheader = $this->Menuheaders->get($id);
      if ($this->Menuheaders->delete($menuheader)) {
         $this->Flash->success('The menuheader has been deleted.');
      } else {
         $this->Flash->error('The menuheader could not be deleted. Please, try again.');
      }
      return $this->redirect(['action' => 'index']);
   }
}
