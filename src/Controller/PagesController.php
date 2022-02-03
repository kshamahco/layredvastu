<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Network\Exception\NotFoundException;

/**
 * Pages Controller
 *
 * @property \App\Model\Table\PagesTable $Pages
 */
class PagesController extends AppController
{


	public function index(){
		$connection = ConnectionManager::get('default');
		$this->layout = 'index';

		$pages = $connection->execute("select * from pages where url_display='index'")->fetchAll('assoc');
		$staticdata = $connection->execute("select * from static_informations order by id DESC LIMIT 1")->fetchAll('assoc');
		$vastucategory = $connection->execute("SELECT id,category_url,name,listing_image FROM vastu_categories ORDER by id DESC")->fetchAll('assoc');
		$pingVastu = $connection->execute("SELECT vastus.url AS vastu_url,vastus.name AS vastuname,vastus.short_post AS vastushortpost,vastus.listing_image AS vastu_listing_image,vastu_categories.category_url AS vastucategoryurl FROM `vastus` LEFT JOIN vastu_categories ON vastu_categories.id=vastus.category_id WHERE vastus.ping_on_home='yes' order by vastus.id DESC")->fetchAll('assoc');

		$this->set('pages', $pages);
		$this->set('staticdata', $staticdata);
		$this->set('vastucategory', $vastucategory);
		$this->set('pingVastu', $pingVastu);
	}
	

	public function disclaimer(){
		$connection = ConnectionManager::get('default');
		$this->layout = 'disclaimer';
		$pages = $connection->execute("select * from pages where url_display='index'")->fetchAll('assoc');
		$staticdata = $connection->execute("select * from static_informations order by id DESC LIMIT 1")->fetchAll('assoc');
		$vastucategory = $connection->execute("SELECT id,category_url,name FROM vastu_categories ORDER by id DESC")->fetchAll('assoc');
		$pingVastu = $connection->execute("SELECT vastus.url AS vastu_url,vastus.name AS vastuname,vastus.short_post AS vastushortpost,vastus.listing_image AS vastu_listing_image,vastu_categories.category_url AS vastucategoryurl FROM `vastus` LEFT JOIN vastu_categories ON vastu_categories.id=vastus.category_id WHERE vastus.ping_on_home='yes' order by vastus.id DESC")->fetchAll('assoc');

		$this->set('pages', $pages);
		$this->set('staticdata', $staticdata);
		$this->set('vastucategory', $vastucategory);
		$this->set('pingVastu', $pingVastu);
	}


	public function aboutus(){
		$connection = ConnectionManager::get('default');
		$this->layout = 'aboutus';
		$pages = $connection->execute("select * from pages where url_display='index'")->fetchAll('assoc');
		$staticdata = $connection->execute("select * from static_informations order by id DESC LIMIT 1")->fetchAll('assoc');
		$vastucategory = $connection->execute("SELECT id,category_url,name FROM vastu_categories ORDER by id DESC")->fetchAll('assoc');
		$pingVastu = $connection->execute("SELECT vastus.url AS vastu_url,vastus.name AS vastuname,vastus.short_post AS vastushortpost,vastus.listing_image AS vastu_listing_image,vastu_categories.category_url AS vastucategoryurl FROM `vastus` LEFT JOIN vastu_categories ON vastu_categories.id=vastus.category_id WHERE vastus.ping_on_home='yes' order by vastus.id DESC")->fetchAll('assoc');

		$this->set('pages', $pages);
		$this->set('staticdata', $staticdata);
		$this->set('vastucategory', $vastucategory);
		$this->set('pingVastu', $pingVastu);
	}

	public function thankyou(){
	    $connection = ConnectionManager::get('default');
		$this->layout = 'thankyou';
		//echo "test";die;
		$pages = $connection->execute("select * from pages where url_display='index'")->fetchAll('assoc');
		$staticdata = $connection->execute("select * from static_informations order by id DESC LIMIT 1")->fetchAll('assoc');
		$vastucategory = $connection->execute("SELECT id,category_url,name FROM vastu_categories ORDER by id DESC")->fetchAll('assoc');
		$pingVastu = $connection->execute("SELECT vastus.url AS vastu_url,vastus.name AS vastuname,vastus.short_post AS vastushortpost,vastus.listing_image AS vastu_listing_image,vastu_categories.category_url AS vastucategoryurl FROM `vastus` LEFT JOIN vastu_categories ON vastu_categories.id=vastus.category_id WHERE vastus.ping_on_home='yes' order by vastus.id DESC")->fetchAll('assoc');

		$this->set('pages', $pages);
		$this->set('staticdata', $staticdata);
		$this->set('vastucategory', $vastucategory);
		$this->set('pingVastu', $pingVastu);
	}


	public function contactus(){
		$connection = ConnectionManager::get('default');
		$this->layout = 'contactus';
		$pages = $connection->execute("select * from pages where url_display='index'")->fetchAll('assoc');
		$staticdata = $connection->execute("select * from static_informations order by id DESC LIMIT 1")->fetchAll('assoc');
		$vastucategory = $connection->execute("SELECT id,category_url,name FROM vastu_categories ORDER by id DESC")->fetchAll('assoc');
		$pingVastu = $connection->execute("SELECT vastus.url AS vastu_url,vastus.name AS vastuname,vastus.short_post AS vastushortpost,vastus.listing_image AS vastu_listing_image,vastu_categories.category_url AS vastucategoryurl FROM `vastus` LEFT JOIN vastu_categories ON vastu_categories.id=vastus.category_id WHERE vastus.ping_on_home='yes' order by vastus.id DESC")->fetchAll('assoc');

		$this->set('pages', $pages);
		$this->set('staticdata', $staticdata);
		$this->set('vastucategory', $vastucategory);
		$this->set('pingVastu', $pingVastu);
	}


	public function SubmitPopupForm(){
		//$this->layout = false;
		//echo "fdgdfg";die;
		$connection = ConnectionManager::get('default');
		$this->loadComponent('Mail');
		$regex = "/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i";
		$nameregex = "/^[\p{L}\p{P}\p{Zs}]+$/";

		if($this->request->is('post')){
			$this->autoRender = false;

			if(!preg_match($nameregex,$this->request->data['name']) || strlen(trim($this->request->data['name'])) == 0){
	 			echo "invalid_name";die;
	 		}else if(!filter_var(trim($this->request->data['email']), FILTER_VALIDATE_EMAIL) || strlen(trim($this->request->data['email'])) == 0 ) { 
				echo "invalid_email";die;
			}else if(!preg_match($regex,$this->request->data['phone'])){
				echo "invalid_phone";die;
			}else if(strlen(trim($this->request->data['comment'])) == 0 ) {
				echo "blank_comment";die;
			}else{
				
				$sql = "INSERT into enquiries set name='".$this->request->data['name']."', email='".$this->request->data['email']."', phone='".$this->request->data['phone']."', comment='".$this->request->data['comment']."'";

				if($connection->execute($sql)){
					echo "success";die;
				}else{
					echo "fail";die;
				}
			}
		}

	}
}
