<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use Cake\Network\Exception\NotFoundException;
use App\View\Helper;

/**
 * Properties Controller
 *
 * @property \App\Model\Table\PropertiesTable $Properties
 */
 
class PropertiesController extends AppController{


   public function SubmitPopupForm(){

      $connection = ConnectionManager::get('default');
      $this->loadComponent('Mail');
      if($this->request->is('post')) {

         if(isset($this->request['data']['states'])){
            $states=$this->request['data']['states'];
         } else { 
            $states='';
         }

         $regex = "/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i";
         $phone=trim($this->request->data['phone']);
         $projectname=trim($this->request->data['pname']);
         $this->set('name', $this->request->data['name']);

         $nameregex = "/^[\p{L}\p{P}\p{Zs}]+$/";

         if(isset($this->request->data['states'])){
            $states=$this->request->data['states'];
         } else { 
            $states='';
         }

         if(!preg_match($nameregex,$this->request->data['name'])){

            echo "invalid_name";die;

         }else if(strlen(trim($this->request->data['name'])) == 0 ) { 

            echo "invalid_name";die;

         }else if(strlen(trim($this->request->data['email'])) == 0 ) { 

            echo "invalid_email";die;

         }else if(!filter_var(trim($this->request->data['email']), FILTER_VALIDATE_EMAIL)) { 

            echo "invalid_email";die;

         }else if(!preg_match($regex,$phone) && $this->request->data['country']=='2##India'){

            echo "invalid_phone";die;

         }else if(!filter_var(trim($this->request->data['email']), FILTER_VALIDATE_EMAIL)) { 

            echo "invalid_email";die;

         }else if(strlen(trim($this->request->data['comment'])) == 0 ) { 

            echo "blank_comment";die;

         }else{
             
             if($phone == '8587020846' || $phone == '9599257242' || $phone == '9999788432' || $phone == '9873444141' || $phone == '7011842355' || $phone == '9599257242' || $phone == '9910031063' || $phone == '8527120504' || $phone == '9718625201' || $phone == '8299125651'){
                echo "success";die;
             }else{
               if($this->request->data['country']=='2##India' || $this->request->data['country']=='2'){
                  
                  if($this->request->data['roundrobinstatus'] == 'yes'){
                     
                     $latestMember = $this->GetLatestProjectPersonForProject($this->request->data['pname'],$this->request->data['country']);
                                       
                     $getMemberDetails = $this->GetLatestMemberDetails($latestMember,'1');
    
                     $project_person = $getMemberDetails[0]['next_executive'];
                     $CurrExecutiveName = $getMemberDetails[0]['name'];
                     $CurrExecutiveNumber = $getMemberDetails[0]['number'];
    
    
                     $this->Mail->InitiateCallToClient($this->request->data['phone'],$CurrExecutiveNumber,'8048162390');
                          
                          $debug = true;
                          
                            $Exemessage = 'Name : '.$this->request->data['name'].',contact : '.$this->request->data['phone'].',Email : '.$this->request->data['email'].',Project : '.$this->request->data['pname'];
                            
                         $this->Mail->sendSms($CurrExecutiveNumber,$Exemessage,$debug,'1207161770320604914');
                         
                         $Umessage = 'Thanks for your query. '.$CurrExecutiveName.'('.$CurrExecutiveNumber.') will assist you for this project.';
    
                         if($this->request->data['phone']!=''){
                             $this->Mail->sendSms($this->request->data['phone'],$Umessage,$debug,'1207161770654782467');
                         }
    
                  }else{
                     // c To C
                     $this->Mail->InitiateCallToClient($this->request->data['phone'],'7610420529','8048162390');
                     $CurrExecutiveName = 'Group';
                     $CurrExecutiveNumber = '7610420529';
                     $project_person='0';
                  }
    
               }else{
                  $project_person='0';
                  $CurrExecutiveName = '';
                  $CurrExecutiveNumber = '';
               }
    
               $enqdata=array('name' => $this->request->data['name'],'email' => $this->request->data['email'],'phone' => $this->request->data['phone'], 'country' => $this->request->data['country'], 'project' => $projectname, 'project_person'=> $project_person, 'current_executive_name'=> $CurrExecutiveName, 'current_executive_number'=> $CurrExecutiveNumber, 'comment' => $this->request->data['comment'],'posted_date' => date("Y-m-d H:i:s"));
    
               $savedata=$connection->insert('enqueries',$enqdata);
    
               $this->Mail->sendMail(addslashes($this->request->data['name']),addslashes($this->request->data['email']),addslashes($this->request->data['phone']),addslashes($this->request->data['comment']),$this->request->data['country'],addslashes($projectname),$states,$CurrExecutiveName);
    
                 if($savedata){
                     
                  $this->Mail->sendToRemoteServer("www.onemidtowndelhi.com",addslashes($projectname),addslashes($this->request->data['name']),addslashes($this->request->data['phone']),addslashes($this->request->data['email']),$this->request->data['country'],$states,addslashes($this->request->data['comment']),addslashes($this->request->data['utm_source']));
    
                  echo "success";die;
               }else{
                  
                  echo "fail";die;
               }
            
             }
         
         }
      }else{

         echo "fail";die;
         
      }
   }
   
   public function GetLatestProjectPersonForProject($project,$country){
      
      $connection = ConnectionManager::get('default');
      $result = $connection->execute("SELECT id,project_person from enqueries where project='".$project."' AND country='".$country."' AND project_person!='0' ORDER by id desc limit 1")->fetchAll('assoc');
      
      if(isset($result[0]['id']) && $result[0]['id']>0){
         return $result[0]['project_person'];
      }else{
         return false;
      }
   }

   public function GetLatestMemberDetails($currExe,$propertyId){
      $connection = ConnectionManager::get('default');
      $memDetails = $connection->execute("SELECT * from property_member where current_executive='".$currExe."' AND property_id='".$propertyId."'")->fetchAll('assoc');
      return $memDetails;
   }



   function InitiateCallOnGroup(){
      
      $connection = ConnectionManager::get('default');
      $this->loadComponent('Mail');
      
      if($this->request->data) {
          $resultArray = array();
         $regex = "/^[6-9][0-9]{9}$/";
         $phone=trim($this->request->data['phoneForCall']);
         $projectname= $this->request->data['projectnameforcallnow'];
            
          if($phone == '8587020846' || $phone == '9599257242' || $phone == '9999788432' || $phone == '9873444141' || $phone == '7011842355' || $phone == '9599257242' || $phone == '9910031063' || $phone == '8527120504' || $phone == '9718625201' || $phone == '8299125651'){
              $resultArray['class'] = 'success';
            $resultArray['error'] = 'true';
            echo json_encode($resultArray);die;
          }else{
    
            if(!preg_match($regex,$phone)){
    
               $resultArray['class'] = 'invalid_phone';
               $resultArray['error'] = 'true';
               echo json_encode($resultArray);die;
            }else{
    
               if($this->request->data['roundrobinforcallnow'] == 'yes'){
    
                  $latestMember = $this->GetLatestProjectPersonForProject($projectname,'2##India');
    
                  $getMemberDetails = $this->GetLatestMemberDetails($latestMember,'1');
    
                  $project_person = $getMemberDetails[0]['next_executive'];
                  $CurrExecutiveName = $getMemberDetails[0]['name'];
                  $CurrExecutiveNumber = $getMemberDetails[0]['number'];
                  
                  
                  $debug = true;
                  
                  $name = 'Call Now';
                      $email = 'no-reply@gmail.com';
                        $Exemessage = 'Name : '.$name.',contact : '.$phone.',Email : '.$email.',Project : '.$projectname;
                            
                     $this->Mail->sendSms($CurrExecutiveNumber,$Exemessage,$debug,'1207161770320604914');
                      
                      $Umessage = 'Thanks for your query. '.$CurrExecutiveName.'('.$CurrExecutiveNumber.') will assist you for this project.';
    
                      if($phone!=''){
                          $this->Mail->sendSms($phone,$Umessage,$debug,'1207161770654782467');
                      }
                      
                      $this->Mail->InitiateCallToClient($phone,$CurrExecutiveNumber,'8048162390');
    
               }else{
                   $this->Mail->InitiateCallToClient($phone,'7610420529','8048162390');
                  $CurrExecutiveName = 'Group';
                  $CurrExecutiveNumber = '7610420529';
                  $project_person='0';
               }
    
               
                    $enqdata=array('name' => 'call now', 'email' => 'no-reply@gmail.com' ,'phone' => $phone, 'country' => '2##India', 'project' => $projectname, 'project_person'=> $project_person, 'current_executive_name'=> $CurrExecutiveName, 'current_executive_number'=> $CurrExecutiveNumber, 'comment' => 'I need to know more about this..', 'posted_date' => date("Y-m-d H:i:s"));
                    $savedata=$connection->insert('enqueries',$enqdata);
                    
                    $this->Mail->sendMail('call now','no-reply@gmail.com',$phone,'I need to know more about this..','India',$projectname,'',$CurrExecutiveName);
                    
                    
               if($savedata){
                  
                  $this->Mail->sendToRemoteServer("www.onemidtowndelhi.com",addslashes($projectname),'call now',$phone,'no-reply@gmail.com','2##India','','I need to know more about this..',$this->request->data['utm_source']);
                  $resultArray['class'] = 'success';
                  $resultArray['error'] = 'true';
                  echo json_encode($resultArray);die;
               }else{
                  
                  $resultArray['class'] = 'fail';
                  $resultArray['error'] = 'true';
                  echo json_encode($resultArray);die;
               }
    
            }
          }

      }else{
         return $this->redirect(SITE_PATH);
      }

   }
   
}
