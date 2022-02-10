<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use Cake\Network\Exception\NotFoundException;

/**
 * VastusCategories Controller
 *
 * @property \App\Model\Table\VastusCategories $VastusCategories
 */
class VastusCategoriesController extends AppController{

   
    
   public function index(){ 
      $this->set('vastuscategories', $this->paginate($this->VastusCategories->find()->order(['id'=>'desc'])));
      $this->set('_serialize', ['vastuscategories']);
   }


   public function add(){
      $vastusCategory = $this->VastusCategories->newEntity();
      if ($this->request->is('post')) {
         $this->loadComponent('Upload');

         /**************Listing Image**************/
         $destinationlimage = realpath('../webroot/img/listingimage/') . '/';
         $resultval="" ;
         $file = $this->request->data['listing_image'];
         if($file['name']!=""){ 
            $resultval = $this->Upload->uploadimg($file,$destinationlimage,'',157,102); 
         }
         $this->request->data['listing_image']=$resultval;
         /**************Listing Image**************/

         /**************Banner Image**************/
         $destinationbimage = realpath('../webroot/img/bannerimage/') . '/';
         $resultvalbann="" ;
         $file = $this->request->data['banner_image'];
         if($file['name']!=""){ 
            $resultvalbann = $this->Upload->uploadimg($file,$destinationbimage,'',157,102); 
         }
         $this->request->data['banner_image']=$resultvalbann;
         /**************Banner Image**************/

         /**************Merged Image**************/
         $destinationmimage = realpath('../webroot/img/mergedimage/') . '/';
         $resultvalmer="" ;
         $file = $this->request->data['merged_image'];
         if($file['name']!=""){ 
            $resultvalmer = $this->Upload->uploadimg($file,$destinationmimage,'',157,102); 
         }
         $this->request->data['merged_image']=$resultvalmer;
         /**************Merged Image**************/

         $vastuCategory = $this->VastusCategories->patchEntity($vastusCategory, $this->request->data);
         if ($this->VastusCategories->save($vastuCategory)) {
            $this->Flash->success('The Vastu category has been saved.');
            return $this->redirect(['action' => 'index']);
         } else {
            $this->Flash->error('The Vastu category could not be saved. Please, try again.');
         }
      }
      $this->set(compact('vastusCategory'));
      $this->set('_serialize', ['vastusCategory']);
   }

   public function edit($id = null){
      
      $vastusCategory = $this->VastusCategories->get($id, [
         'contain' => []
      ]);
        
      if ($this->request->is(['patch', 'post', 'put'])) {
         $this->loadComponent('Upload');

         /**************Listing Image**************/
         $destinationlimage = realpath('../webroot/img/listingimage/') . '/';
         $resultval="" ;
         if($this->request->data['listing_image_new']['size']!=0){
            @unlink($destinationlimage.$this->request->data['listing_image']);
            $file = $this->request->data['listing_image_new'];
            $resultval = $this->Upload->uploadimg($file,$destinationlimage,'',157,102); 
            $this->request->data['listing_image']=$resultval;
         }
         /**************Listing Image**************/

         /**************Banner Image**************/
         $destinationbimage = realpath('../webroot/img/bannerimage/') . '/';
         $resultvalbann="" ;
         if($this->request->data['banner_image_new']['size']!=0){
            @unlink($destinationbimage.$this->request->data['banner_image']);
            $file = $this->request->data['banner_image_new'];
            $resultvalbann = $this->Upload->uploadimg($file,$destinationbimage,'',157,102); 
            $this->request->data['banner_image']=$resultvalbann;
         }
         /**************Banner Image**************/


         /**************Merged Image**************/
         $destinationbmermage = realpath('../webroot/img/mergedimage/') . '/';
         $resultvalmer="" ;
         if($this->request->data['merged_image_new']['size']!=0){
            @unlink($destinationbmermage.$this->request->data['merged_image']);
            $file = $this->request->data['merged_image_new'];
            $resultvalmer = $this->Upload->uploadimg($file,$destinationbmermage,'',157,102); 
            $this->request->data['merged_image']=$resultvalmer;
         }
         /**************Merged Image**************/

         $vastuCategory = $this->VastusCategories->patchEntity($vastusCategory, $this->request->data);
         if ($this->VastusCategories->save($vastuCategory)) {
            $this->Flash->success('The Vastu category has been saved.');
            return $this->redirect(['action' => 'index']);
         } else {
            $this->Flash->error('The Vastu category could not be saved. Please, try again.');
         }
      }
      $this->set(compact('vastusCategory'));
      $this->set('_serialize', ['vastusCategory']);
   }

   public function delete($id = null){
      $vastuCategory = $this->VastusCategories->get($id);
      if ($this->VastusCategories->delete($vastuCategory)) {
         $this->Flash->success('The Vastu category has been deleted.');
      } else {
         $this->Flash->error('The Vastu category could not be deleted. Please, try again.');
      }
      return $this->redirect(['controller' => 'VastusCategories','action' => 'index']);
   }

   function ajaxswapprioritynew(){
      $this->autoRender = false;
      
      $connection = ConnectionManager::get('default');
      
      if ($this->request->is('ajax')) {            
         if(isset($this->request->data["priority"]) && isset($this->request->data["VastuCatId"])){
            $count = count($this->request->data["VastuCatId"]);
            
            for($i=0;$i<$count;$i++){
               $sql = "UPDATE vastu_categories set ".$this->request->data["column"]."='".$this->request->data["priority"][$i]."' where id='".$this->request->data["VastuCatId"][$i]."'";
               $connection->execute($sql);
            }
            echo "success";
         }else{
            echo "Something went wrong";die;
         }
      }      
   }
}
