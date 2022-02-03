<?php
namespace App\Controller\Component;
use Cake\Controller\Component;
class MailComponent extends Component  {


public function sendMail($name,$email,$phone,$comment,$country,$projectname=null,$states=null,$executiveName=null) 
 {
$alldetailsto="";
$system_ip2="";
$country_name=explode('##',$country);
$subject="";
$abc="";
$message="";
$admsg='';
$body="";
$headers="";

 
$alldetailsto="enquiry@hcorealestates.com";
$system_ip2=@$_SERVER['REMOTE_ADDR'];

$subject=" - Enquiry ";
$abc="DLF Midtown Delhi";
$message = "<table width='500' align='center' cellspacing='0' cellpadding='0' border='0' bgcolor='#F0F0F0' style='border:1px solid #dddddd;'>
<tr>
<td align='center' style='background-color: black;padding:10px 0; border-bottom:1px solid #dddddd'><img src='https://www.onemidtowndelhi.com/img/logo.png'></td>
</tr>
<tr>
<td align='center'>
<table width='100%' align='center' cellspacing='0' cellpadding='0' border='0' bgcolor='#ffffff' style='padding:15px;'>
<tr>
<td style='font-family:arial,Arial,sans-serif;font-size:18px;line-height:24px;color:#333333; padding-bottom:15px'>Hello,
<div style='font-family:arial,Arial,sans-serif;font-size:13px;color:#333333;'>Thanks you to have shown your interest ";
if($projectname){ $message .=" in project ".$projectname." .";}else{ $message .=".";}
$message .="</div>
<div style='font-family:arial,Arial,sans-serif;font-size:13px;color:#333333;'>We make you sure meet your expectations here onwards with our expertise.</div>
<div style='font-family:arial,Arial,sans-serif;font-size:13px;color:#333333;'>Some of us will get you assisted very soon.</div>
<div style='font-family:arial,Arial,sans-serif;font-size:13px;color:#333333;'>Thanks</div>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td align='left' style='padding:15px; border-top:1px solid #dddddd;font-family:arial,Arial,sans-serif;font-size:13px;color:#333333;'><strong>Note:</strong> Replies to this e-mail will not be responded to.</td>
</tr>
</table>";


$admsg='<table width="331" border="0" cellpadding="0" cellspacing="0" style="width:310px; background-color:#ffffff; border:1px solid #cccccc; font-family:Arial, Helvetica, sans-serif; font-size:12px; float:left; overflow:hidden;">
<tr>
<td valign="middle" colspan="2" height="45" style="background-color: black;border-right:1px solid #cccccc; font-size:12px; font-weight:bold; text-align:center;" width="55%"><img src="https://www.onemidtowndelhi.com/img/logo.png"></td>

</tr>
<tr>
<td colspan="2" style="border-top:1px solid #cccccc;">
<table width="100%" border="0" cellspacing="0" cellpadding="0" style=" font-family:Arial, Helvetica, sans-serif; font-size:12px;">
<tr style="background-color:#f0f0f0;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="18%">Name</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="3%">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="79%">'.$name.'</td>
</tr>
<tr style="background-color:#ffffff;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Email</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'. $email.'</td>
</tr>
<tr style="background-color:#f0f0f0;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Phone</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">&nbsp;'. $phone.'</td>
</tr>
<tr style="background-color:#ffffff;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Country</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'. $country_name[1].'</td>
</tr>';
if($projectname) {
$admsg.='<tr style="background-color:#f0f0f0;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Project Name</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'. $projectname.'</td>
</tr>'; }

if($states) {
$admsg.='<tr style="background-color:#ffffff;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">State</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'.$states.'</td>
</tr>'; }

if($executiveName){
    $admsg.='<tr style="background-color:#f0f0f0;">
    <td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;"><span class="resale_1">Executive Name</span></td>
    <td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
    <td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">' . $executiveName . '</td>
    </tr>';
}

$admsg.='<tr style="background-color:#ffffff;">
<td colspan="3" style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'.$comment.'</td>
</tr>


</table>
</td>
</tr>
</table>'; 


$body.="<br/>".$message."<br/>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: ".$abc."<reply@onemidtowndelhi.com>" . "\r\n";
$x=@mail($email,$subject,$body,$headers);


$body=$admsg."<br/>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: ".$abc."<reply@onemidtowndelhi.com>" . "\r\n";
$x1=@mail($alldetailsto,$subject,$body,$headers);
}


public function sendForgetPassword($email,$password,$name) 
 {
$subject="";
$abc="";
$message="";
$admsg='';
$body="";
$headers="";

 
$alldetailsto="enquiry@onemidtowndelhi.com";
$system_ip2=@$_SERVER['REMOTE_ADDR'];

$subject=" - Password Recovery ";
$abc="HCOREALESTATES";
$message = "<table width='500' align='center' cellspacing='0' cellpadding='0' border='0' bgcolor='#F0F0F0' style='border:1px solid #dddddd;'>
<tr>
<td align='center' style='padding:10px 0; border-bottom:1px solid #dddddd'><img src='http://hcorealestates.com/images/logo.png'></td>
</tr>
<tr>
<td align='center'>
<table width='100%' align='center' cellspacing='0' cellpadding='0' border='0' bgcolor='#ffffff' style='padding:15px;'>
<tr>
<td style='font-family:arial,Arial,sans-serif;font-size:18px;line-height:24px;color:#333333; padding-bottom:15px'>Hi,
<div style='font-family:arial,Arial,sans-serif;font-size:13px;color:#333333;'>".ucwords($name)." your forgot password is ".$password." .";
$message .="</div>
<div style='font-family:arial,Arial,sans-serif;font-size:13px;color:#333333;'>Thanks</div>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td align='left' style='padding:15px; border-top:1px solid #dddddd;font-family:arial,Arial,sans-serif;font-size:13px;color:#333333;'><strong>Note:</strong> Replies to this e-mail will not be responded to.</td>
</tr>
</table>";


$body.="<br/>".$message."<br/>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: '.$abc.'<enquiry@onemidtowndelhi.com>' . "\r\n";
$x=@mail($email,$subject,$body,$headers);

}


function InitiateCallToClient($phone,$agent_number=false,$clinumber=false){

	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://kpi.knowlarity.com/Basic/v1/account/call/makecall",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "{\n\"k_number\": \"+916366438006\",\n\"agent_number\": \"+91".$agent_number."\",\n\"customer_number\": \"+91".$phone."\"\n,\n\"caller_id\": \"+91".$clinumber."\"\n}",
		CURLOPT_HTTPHEADER => array(
		"authorization: 49f28f3a-23b2-4fb3-ae29-c1ec92148442",
		"cache-control: no-cache",
		"content-type: application/json",
		"postman-token: 15a76791-035d-a074-ff9d-5f72ef9e8b80",
		"x-api-key: 8bTsn1VP9k6cve2jKV8qU5VUQkPjLlsa6cmUgT7D"
		),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);
	
	curl_close($curl);
	
	if ($err) {
	  return "cURL Error #:" . $err;
	} else {
	  return $response;
	}
}


function sendSms($phone, $msg, $debug=false, $templateId=false){
	$user = "Ipdcom103264";
	$password = "11403";
	$senderid = "IPDCOM";
	$smsurl = "https://www.kit19.com/ComposeSMS.aspx?";

	$url = 'username='.$user;
	$url.= '&password='.$password;
	$url.= '&sender='.$senderid;
	$url.= '&to='.urlencode($phone);
	$url.= '&message='.urlencode($msg);
	$url.= '&priority=1';
	$url.= '&dnd=1';
	$url.= '&unicode=0';
	$url.= '&dlttemplateid='.$templateId;

	   
	  $urltouse =  $smsurl.$url;
	  $ch = curl_init();
	  curl_setopt($ch, CURLOPT_URL, $urltouse);
	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	  $response = curl_exec($ch);
	  curl_close($ch);
	return($response);
}
 
 
function sendToRemoteServer($website,$project_name=null,$client,$phone,$email,$country=null,$state=null,$message=null,$utm_source=null)
{
	$fields="";
	$fields_string="";
	$country_name="";
	$url="";
	$url = "https://crmtech.co.in/data-via-remote-server/data-via-remote-server.php";
	$country_name=explode("##",$country);
	$fields = array(
	"website" => $website,
	"project_name" => $project_name,
	"client" => $client,
	"phone" => $phone,
	"email" => $email,
	"country" => $country_name[1],
	"message" => $message,
	'utm_source' => $utm_source
	);
	foreach($fields as $key=>$value) { $fields_string .= $key."=".$value."&"; }
	@rtrim($fields_string, "&");
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_POST, count($fields));
	curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
	$result = curl_exec($ch);
	if ($result==2) {curl_close($ch); return true; } else { curl_close($ch);return false;}
	}
	
function sendSubscriptionMail($email) {
$abc="HcoRealEstates.com";
$msg_admin1="<table width='500' align='center' cellspacing='0' cellpadding='0' border='0' bgcolor='#F0F0F0' style='border:1px solid #dddddd;'>
<tr>
<td align='center' style='padding:10px 0; border-bottom:1px solid #dddddd'><img src='http://hcorealestates.com/images/logo.png'></td>
</tr>
<tr>
<td align='center'>
<table width='100%' align='center' cellspacing='0' cellpadding='0' border='0' bgcolor='#ffffff' style='padding:15px;'>
<tr><td>SUBSCRIPTION FROM HCOREALESTATES.COM</td></tr>
<tr><td>EMAIL ID : ".ucwords($email)."</td></tr>
</table></td></tr>"; 
				
$message .="<table width='500' align='center' cellspacing='0' cellpadding='0' border='0' bgcolor='#F0F0F0' style='border:1px solid #dddddd;'>
<tr>
<td align='center' style='padding:10px 0; border-bottom:1px solid #dddddd'><img src='http://hcorealestates.com/images/logo.png'></td>
</tr>
<tr>
<td align='center'>
<table width='100%' align='center' cellspacing='0' cellpadding='0' border='0' bgcolor='#ffffff' style='padding:15px;'>
<tr><td><div style='font-family:arial,Arial,sans-serif;font-size:13px;color:#333333;'>We have received your request for subscribing to the HcoRealEstates newsletter.</div>
</td>
</tr>
</table>
<tr>
<td align='left' style='padding:15px; border-top:1px solid #dddddd;font-family:arial,Arial,sans-serif;font-size:13px;color:#333333;'><strong>Note:</strong> Replies to this e-mail will not be responded to.</td>
</tr>
</table>";
				$subject="Email Subscription ";
			    /// send email to admin
				$to1='enquiry@hcorealestates.com';
				$body1=$msg_admin1."<br/>";
				$headers1= "MIME-Version: 1.0" . "\r\n";
                                $headers1.= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                $headers1.= 'From: '.$abc.'<enquiry@hcorealestates.com>' . "\r\n";
				$x11=@mail($to1,$subject,$body1,$headers1);
				
				$to=$email;
				$body1=$message."<br/>";
				$headers1= "MIME-Version: 1.0" . "\r\n";
                                $headers1.= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                $headers1.= 'From: '.$abc.'<enquiry@hcorealestates.com>' . "\r\n";
				$x11=@mail($to,$subject,$body1,$headers1);
				
}

}
?>