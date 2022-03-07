<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Blogs Controller
 *
 * @property \App\Model\Table\BlogsTable $Blogs
 */
class BlogsController extends AppController{

    
    public function index(){
        $this->set('blogs', $this->paginate($this->Blogs));
        $this->set('_serialize', ['blogs']);
    }

    public function add(){
        $blog = $this->Blogs->newEntity();
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
            
            $blog = $this->Blogs->patchEntity($blog, $this->request->data);
            
            if ($this->Blogs->save($blog)) {
                $this->Flash->success('The blog has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The blog could not be saved. Please, try again.');
            }
        }
        
        $this->set(compact('blog'));
        $this->set('_serialize', ['blog']);
    }

   
    public function edit($id = null){
        $blog = $this->Blogs->get($id, [
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
            
            
            $blog = $this->Blogs->patchEntity($blog, $this->request->data);
            if ($this->Blogs->save($blog)) {
                $this->Flash->success('The blog has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The blog could not be saved. Please, try again.');
                return $this->redirect(['action' => 'edit',$id]);
            }
        }
        
        
        $this->set(compact('blog'));
        $this->set('_serialize', ['blog']);
    }
    
    
    public function delete($id = null){
        $this->request->allowMethod(['post', 'delete']);
        $blog = $this->Blogs->get($id);
        if ($this->Blogs->delete($blog)) {
            $this->Flash->success('The blog has been deleted.');
        } else {
            $this->Flash->error('The blog could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
