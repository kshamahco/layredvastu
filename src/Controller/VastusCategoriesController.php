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
      $vastucat=$this->request->params['vastucat'];
      $VastuCatList = $connection->execute("select * from vastu_categories where category_url='".$vastucat."'")->fetchAll('assoc');
      $staticdata = $connection->execute("select * from static_informations order by id DESC LIMIT 1")->fetchAll('assoc');
      $vastucategory = $connection->execute("SELECT id,category_url,name,listing_image FROM vastu_categories ORDER by id DESC")->fetchAll('assoc');
      $pingVastu = $connection->execute("SELECT vastus.url AS vastu_url,vastus.name AS vastuname,vastus.short_post AS vastushortpost,vastus.listing_image AS vastu_listing_image,vastu_categories.category_url AS vastucategoryurl FROM `vastus` LEFT JOIN vastu_categories ON vastu_categories.id=vastus.category_id WHERE vastus.ping_on_home='yes' order by vastus.id DESC")->fetchAll('assoc');
      
      
      $this->set('VastuCatList', $VastuCatList);
      $this->set('staticdata', $staticdata);
      $this->set('vastucategory', $vastucategory);
      $this->set('pingVastu', $pingVastu);
      
      if($VastuCatList[0]['id']>0){
         $catId = $VastuCatList[0]['id'];
         $Vastus = $connection->execute("select * from vastus where category_id='".$catId."'")->fetchAll('assoc');
         $this->set('Vastus', $Vastus);
         $this->set('category_url', $vastucat);
         $this->layout='vastu-category';
      }else{
         $this->layout='my_error';
      }
      
   }

    
}
