<?php 
include('common.php'); 
 if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone'])  && !empty($_POST['message'])  )
 {

  $name=isset($_POST['name'])?$_POST['name']:'';
   $email=isset($_POST['email'])?$_POST['email']:'';
   $phone=isset($_POST['phone'])?$_POST['phone']:'';
   $message=isset($_POST['message'])?$_POST['message']:'';
   $product_name = isset($_POST['product_name'])?$_POST['product_name']:'';
if(!empty($product_name))
{
	$name_edit = "Product:".$product_name." ";
}
  
  $to = "support@globaladmedia";
  $subject = "Global Ad Media Enquiry From iha Vedic ";
  $txt='Hi Enquiry From Global Ad Media Enquiry  !<br /><br />'.ucfirst($name ).' has sent you a message via contact form on your website! <br /><br />
  Name: '.ucfirst($name ).'<br />
  Email: '.ucfirst( $email ).'<br />
  Phone: '.ucfirst( $phone ).'<br />'.$name_edit.'
    Message: '.ucfirst( $message ).'<br />';
 
 $post = [
    'name' => $name,
    'mobile' => $phone,
    'email'   => $email,
    'message' => $message
    
];
 $url='http://globaladmedia.in/sms.php?phone=9097873118';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
$response = curl_exec($ch);
curl_close($ch);



 $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= 'From: info@10timesmedia.com' . "\r\n";
   $headers .= 'BCC: gamenquiry@gmail.com' . "\r\n";
  $tablename ="gp_enquiry";
  $value= "`name` ='".$name."', `email` ='".$email."', `phone` ='".$phone."', `message` ='".$message."', `product_name` ='".$product_name."'";
  insertData($tablename, $value);
if (mail($to,$subject,$txt,$headers)){

  header('Location: index.html');
   exit;
  } 


}