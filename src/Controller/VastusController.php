<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use Cake\Network\Exception\NotFoundException;

/**
 * Vastus Controller
 *
 * @property \App\Model\Table\BlogsTable $Vastus
 */
class VastusController extends AppController{

   
    
   public function view(){       
	   $connection = ConnectionManager::get('default');   
		$vastucat=$this->request->params['vastucat'];
      $vastuurl=$this->request->params['vastuurl'];
	   echo $vastucat.'----------'.$vastuurl;die;
		$data = $connection->execute("select b.*,a.name as aname,a.user_name as ausername from vastus as b join authors as a on b.author_id=a.id where b.url=:url",['url'=>$pass])->fetchAll('assoc');
			
		if (count($data)==0) { throw new NotFoundException('Page not found on the server'); exit; }		

		$this->set('vastus',$data);
		$this->set('seo_title',$data[0]['seo_title']);
		$this->set('seo_keyword',$data[0]['seo_keyword']);
		$this->set('seo_description',$data[0]['seo_description']);
		$this->set('canonical', SITE_PATH.'post/'.$data[0]['url']."/");
		$this->set('blog_id',$blog[0]['id']);
		
		$cu_blog_id =($data[0]['id']);
		$pre_blog_id = $cu_blog_id;
		$pre2_blog_id = ($cu_blog_id-2);
		$next_blog_id = ($cu_blog_id+1);
		//print_r($pre_blog_id);
		//die();
		$data1 = $connection->execute("select url from vastus where id < '$pre_blog_id' order by id desc")->fetchAll('assoc');
	    //$this->set('blog1',$data1);
		//print_r($data1[0]['url']);
		
		$this->set('blog1',$data1);
		
		$data2 = $connection->execute("select url from vastus where id > '$pre_blog_id'")->fetchAll('assoc');
		$this->set('blog2',$data2);
		print_r($blog1[0]['url']);
		//die();
		$this->layout='vastu-view';
   }

    
}
