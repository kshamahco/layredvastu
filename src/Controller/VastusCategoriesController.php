<?php
namespace App\Controller;

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
      $connection = ConnectionManager::get('default');   
      $pass=$this->request->params['vastucat'];
      $this->set('url',$pass);
      
      $this->layout='vastu-category';
      //echo $pass.'kshama';die;
   }

    
}
