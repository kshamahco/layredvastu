<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use Cake\Network\Exception\NotFoundException;

/**
 * Blogs Controller
 *
 * @property \App\Model\Table\BlogsTable $Blogs
 */
class BlogsController extends AppController{

    
    public function index(){		
		$connection = ConnectionManager::get('default');
        $this->layout='blog-index';
        $pages = $connection->execute("select * from pages where url_display='index'")->fetchAll('assoc');
		$staticdata = $connection->execute("select * from static_informations order by id DESC LIMIT 1")->fetchAll('assoc');
		$vastucategory = $connection->execute("SELECT id,category_url,name,listing_image FROM vastu_categories ORDER by priority ASC")->fetchAll('assoc');

		$blog = $connection->execute("SELECT id,name,url,LEFT(post,160) as postcontent,post,listing_image,created FROM blogs ORDER by id DESC LIMIT 11")->fetchAll('assoc');

		$this->set('pages', $pages);
		$this->set('staticdata', $staticdata);
		$this->set('vastucategory', $vastucategory);
		$this->set('blog', $blog);
    }
	
	 

    
    public function view($id = null){    
		$connection = ConnectionManager::get('default');
		$this->layout='blog-view';
		$blogurl = $this->request->params['url'];

		if($blogurl){

			$pages = $connection->execute("select * from pages where url_display='index'")->fetchAll('assoc');
			$staticdata = $connection->execute("select * from static_informations order by id DESC LIMIT 1")->fetchAll('assoc');
			$vastucategory = $connection->execute("SELECT id,category_url,name,listing_image FROM vastu_categories ORDER by priority ASC")->fetchAll('assoc');

			$blog = $connection->execute("SELECT * FROM blogs where url='".$blogurl."'")->fetchAll('assoc');

			$this->set('pages', $pages);
			$this->set('staticdata', $staticdata);
			$this->set('vastucategory', $vastucategory);
			$this->set('blog', $blog);
		}else{
			$this->layout='my_error';
		}
    }
}

?>