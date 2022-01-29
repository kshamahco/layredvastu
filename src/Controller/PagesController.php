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


	public function display(){

      echo "test";die;
		
	}

	

	

	public function disclaimer()
	{
		$connection = ConnectionManager::get('default');
		$this->layout = 'disclaimer';
		$vastus = TableRegistry::get('Vastus');

		$data = $connection->execute("select * from pages where url_display='disclaimer' and status!='active'")->fetchAll('assoc');

		$homepress = $connection->execute("select name,url,short_post from vastus where status='active' order by id DESC LIMIT 1")->fetchAll('assoc');

		$this->set('pages', $data);
		$this->set('title', $data['0']['title']);
		$this->set('seo_title', $data['0']['meta_title']);
		$this->set('seo_keyword', $data['0']['meta_keyword']);
		$this->set('seo_description', $data['0']['meta_description']);
		$this->set('homepress', $homepress);
		$this->set('canonical', SITE_PATH . "disclaimer/");
	}

	public function thankYou(){
	    $connection = ConnectionManager::get('default');
		$this->layout = 'thankyou';
		
		$homepress = $connection->execute("select name,url,short_post from vastus where status='active' order by id DESC LIMIT 1")->fetchAll('assoc');
	    $this->set('homepress', $homepress);
		$this->set('canonical', SITE_PATH . "thank-you/");
	}
}
