<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Pages Controller
 *
 * @property \App\Model\Table\PagesTable $Pages
 */
class PagesController extends AppController{

   public function index(){
      $this->paginate = [
      ];
      $this->set('pages', $this->paginate($this->Pages));
      $this->set('_serialize', ['pages']);
   }

    
   public function add(){
      $page = $this->Pages->newEntity();
      if ($this->request->is('post')) {
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

         /**************Listing Image**************/
         $destinationbimage = realpath('../webroot/img/bannerimage/') . '/';
         $resultvalbann="" ;
         if($this->request->data['banner_image_new']['size']!=0){
            @unlink($destinationbimage.$this->request->data['banner_image']);
            $file = $this->request->data['banner_image_new'];
            $resultvalbann = $this->Upload->uploadimg($file,$destinationbimage,'',157,102); 
            $this->request->data['banner_image']=$resultvalbann;
         }
         /**************Listing Image**************/

         $pagesVal = $this->Pages->patchEntity($page, $this->request->data);
         if ($this->Pages->save($pagesVal)) {
            $this->Flash->success('The page has been saved.');
            return $this->redirect(['action' => 'index']);
         } else {
            $this->Flash->error('The page could not be saved. Please, try again.');
         }
      }
        $locations = $this->Pages->Locations->find('list', ['limit' => 200]);
        $this->set(compact('page', 'locations'));
        $this->set('_serialize', ['page']);
   }

   
    public function edit($id = null){
      $page = $this->Pages->get($id, [
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

         /**************Listing Image**************/
         $destinationbimage = realpath('../webroot/img/bannerimage/') . '/';
         $resultvalbann="" ;
         if($this->request->data['banner_image_new']['size']!=0){
            @unlink($destinationbimage.$this->request->data['banner_image']);
            $file = $this->request->data['banner_image_new'];
            $resultvalbann = $this->Upload->uploadimg($file,$destinationbimage,'',157,102); 
            $this->request->data['banner_image']=$resultvalbann;
         }
         /**************Listing Image**************/

         $pagesVal = $this->Pages->patchEntity($page, $this->request->data);
         if ($this->Pages->save($pagesVal)) {
            $this->Flash->success('The Pages has been Updated.');
            return $this->redirect(['action' => 'index']);
         } else {
            $this->Flash->error('The Pages could not be saved. Please, try again.');
         }
			
      }
      $this->set(compact('page'));
      $this->set('_serialize', ['page']);
   }
	
	
}
