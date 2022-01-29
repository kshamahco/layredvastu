<?php
namespace App\View\Cell;

use Cake\View\Cell;
use Cake\Datasource\ConnectionManager;
/**
 * Common cell
 */
class CommonCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    
	
	
	
	
	
	
	
	public function adminmenu($id=null)
   {   $data='<ul class="sidebar navbar-nav">';
		$connection = ConnectionManager::get('default');
		$header=$connection->execute("select name,action,id from menuheaders  where status='active' order by navid desc")->fetchAll('assoc');
		
	    foreach($header as $key=>$value) {
			
			$menu=$connection->execute("select name,action,controller from menus where status='active' and menuheader_id=".$value["id"]." order by navid desc")->fetchAll('assoc');
			
			if(!empty($menu))  {
				
			$data.='<li class="nav-item active">
			<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$value["name"].' <b class="caret"></b></a>
			 <i class="fas fa-fw fa-folder"></i> <ul class="dropdown-menu">';
			
			foreach($menu as $key2=>$value2) {
				
				
				
				$data.='<a class="dropdown-item" href="'.SITE_PATH.'admin/'.$value2["controller"].'/'.$value2["action"].'/">'.$value2["name"].'</a>';
				
			}
			$data.='</ul>';	
			}
			else {
			
			$data.='<li class="nav-item active"><a class="nav-link" href="'.SITE_PATH.'admin/'.$value["action"].'/index/'.'">'.$value["name"].'</a>';
			
			}
			$data.='</li>';	
		}
		$data.='</ul>';	
		$this->set('data',$data); 
   }

}
