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
      $this->set('vastus', $this->paginate($this->Vastus->find()->order(['Vastus.id'=>'desc'])));
      $this->set('_serialize', ['vastus']);
   }

   public function add(){

      $vastus = $this->Vastus->newEntity();
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

            $this->loadComponent('Upload');
         
            $destinationvastuimage = realpath('../webroot/img/vastuimage/') . '/';
            /**************First Para Image**************/
            $firstresultval="" ;
            if($this->request->data['first_para_image_new']['size']!=0){
                @unlink($destinationvastuimage.$this->request->data['first_para_image']);
                $file = $this->request->data['first_para_image_new'];
                $firstresultval = $this->Upload->uploadimg($file,$destinationvastuimage,'',157,102); 
                $this->request->data['first_para_image']=$firstresultval;
            }
            /**************First Para Image**************/
            
            
            /**************Second Para Image**************/
            $secondresultval="" ;
            if($this->request->data['second_para_image_new']['size']!=0){
                @unlink($destinationvastuimage.$this->request->data['second_para_image']);
                $file = $this->request->data['second_para_image_new'];
                $secondresultval = $this->Upload->uploadimg($file,$destinationvastuimage,'',157,102); 
                $this->request->data['second_para_image']=$secondresultval;
            }
            /**************Second Para Image**************/
            
            
            /**************Third Para Image**************/
            $thirdresultval="" ;
            if($this->request->data['third_para_image_new']['size']!=0){
                @unlink($destinationvastuimage.$this->request->data['third_para_image']);
                $file = $this->request->data['third_para_image_new'];
                $secondresultval = $this->Upload->uploadimg($file,$destinationvastuimage,'',157,102); 
                $this->request->data['third_para_image']=$thirdresultval;
            }
            /**************Third Para Image**************/
            
            /**************Fourth Para Image**************/
            $fourthresultval="" ;
            if($this->request->data['fourth_para_image_new']['size']!=0){
                @unlink($destinationvastuimage.$this->request->data['fourth_para_image']);
                $file = $this->request->data['fourth_para_image_new'];
                $fourthresultval = $this->Upload->uploadimg($file,$destinationvastuimage,'',157,102); 
                $this->request->data['fourth_para_image']=$fourthresultval;
            }
            /**************Fourth Para Image**************/
            
            
            /**************Fifth Para Image**************/
            $fifthresultval="" ;
            if($this->request->data['fifth_para_image_new']['size']!=0){
                @unlink($destinationvastuimage.$this->request->data['fifth_para_image']);
                $file = $this->request->data['fifth_para_image_new'];
                $fifthresultval = $this->Upload->uploadimg($file,$destinationvastuimage,'',157,102); 
                $this->request->data['fifth_para_image']=$fifthresultval;
            }
            /**************Fifth Para Image**************/
            
            /**************Sixth Para Image**************/
            $sixthresultval="" ;
            if($this->request->data['sixth_para_image_new']['size']!=0){
                @unlink($destinationvastuimage.$this->request->data['sixth_para_image']);
                $file = $this->request->data['sixth_para_image_new'];
                $sixthresultval = $this->Upload->uploadimg($file,$destinationvastuimage,'',157,102); 
                $this->request->data['sixth_para_image']=$sixthresultval;
            }
            /**************Sixth Para Image**************/

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
