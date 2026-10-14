<?php
session_start();
//echo "<pre>";
//var_dump($_POST);
//die();

$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';

$contact_no = isset($_POST['phone']) ? $_POST['phone'] : '';
$state = isset($_POST['state']) ? $_POST['state'] : '';
$district = isset($_POST['districts']) ? $_POST['districts'] : '';
$cluster = isset($_POST['clusters']) ? $_POST['clusters'] : '';
$pincode = isset($_POST['pins']) ? $_POST['pins'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

$whats_current_employment_status = isset($_POST['whats_current_employment_status']) ? $_POST['whats_current_employment_status'] : '';
$willing_to_invest_25lac = isset($_POST['willing_to_invest_25lac']) ? $_POST['willing_to_invest_25lac'] : '';
$your_any_other_franchise = isset($_POST['your_any_other_franchise']) ? $_POST['your_any_other_franchise'] : '';
$preferred_call_time = isset($_POST['preferred_call_time']) ? $_POST['preferred_call_time'] : '';

if(isset($preferred_call_time) && $preferred_call_time!=''){
  $preferred_call_time_explode = explode('T', $preferred_call_time);
  if(isset($preferred_call_time_explode[0]) && isset($preferred_call_time_explode[1]) && $preferred_call_time_explode[0]!='' && $preferred_call_time_explode[1]!=''){

    $preferred_call_time = $preferred_call_time_explode[0].' '.$preferred_call_time_explode[1].':00';
    $preferred_call_time = date('Y-m-d H:i:s',strtotime($preferred_call_time));
  }else{
    $preferred_call_time = '0000-00-00 00:00:00';
  }
}else{
  $preferred_call_time = '0000-00-00 00:00:00';
}
$utm_source = isset($_POST['utm_source']) ? $_POST['utm_source'] : '';
$utm_medium = isset($_POST['utm_medium']) ? $_POST['utm_medium'] : '';
$utm_campaign = isset($_POST['utm_campaign']) ? $_POST['utm_campaign'] : '';


$mailToAdd = 'partner@moople.in';
$to = $mailToAdd;


/*********************/

$date = date("Y-m-d H:i:s");

// echo "<pre>";
// var_dump($name);
// var_dump($email);
// var_dump($_POST);
// die();

if($name != '' && $email != '') 
{

  require("class.phpmailer.php");

  $mail = new PHPMailer();
  //$mail->IsSMTP();
  $mail->Mailer = "mail";
  $mail->Host = "webmail.digitalwolf.co.in";
  //$mail->SMTPAuth = true;
  $mail->Username = "info@digitalwolf.co.in";
  $mail->Password = "Info@32145";
  $mail->host_port=25;
  //$mail->SMTPSecure = 995;
  $mail->Subject = "Enquire online";
  $mail->From = "info@digitalwolf.co.in";
  $mail->FromName = "Hitechanimation Enquiry";
  $mail->WordWrap = 50;
  $mail->IsHTML(true);    

    $body = "<table width='100%'  border='0' height='150px'>";
    $body = $body . "<tr>";
    $body = $body . "<td colspan='2' style='text-align:left; color:#FFF' bgcolor='#2D9DCE'>";
    $body = $body . "&nbsp;&nbsp;Website Enquiry";
    $body = $body . "</td>";
    $body = $body . "</tr>";
    $body = $body . "<tr>";
    $body = $body . "<td  width='25%' style='text-align:right' bgcolor='#EBF2F6'>";
    $body = $body . "Name :";
    $body = $body . "</td>";
    $body = $body . "<td width='75%' style='text-align:left' bgcolor='#FFFFFF'>";
    $body = $body . "<span>" .$name. "</span>";
    $body = $body . "</td>";
    $body = $body . "</tr>";
    $body = $body . "<tr>";
    $body = $body . "<td style='text-align:right' bgcolor='#EBF2F6'>";
    $body = $body . "Email :";
    $body = $body . "</td>";
    $body = $body . "<td style='text-align:left' bgcolor='#FFFFFF'>";
    $body = $body . "<span>" .$email. "</span>";
    $body = $body . "</td>";
    $body = $body . "</tr>";
    $body = $body . "<tr>";
    $body = $body . "<td style='text-align:right' bgcolor='#EBF2F6'>";
    $body = $body . "Contact No :";
    $body = $body . "</td>";
    $body = $body . "<td style='text-align:left' bgcolor='#FFFFFF'>";
    $body = $body . "<span>" .$contact_no. "</span>";
    $body = $body . "</td>";
    $body = $body . "</tr>";
    $body = $body . "<tr>";
    $body = $body . "<td style='text-align:right' bgcolor='#EBF2F6'>";
    $body = $body . "State :";
    $body = $body . "</td>";
    $body = $body . "<td style='text-align:left' bgcolor='#FFFFFF'>";
    $body = $body . "<span>" .$state. "</span>";
    $body = $body . "</td>";
    $body = $body . "</tr>";
    $body = $body . "<tr>";
    $body = $body . "<td style='text-align:right' bgcolor='#EBF2F6'>";
    $body = $body . "What is your current employment status? :";
    $body = $body . "</td>";
    $body = $body . "<td style='text-align:left' bgcolor='#FFFFFF'>";
    $body = $body . "<span>" .$whats_current_employment_status. "</span>";
    $body = $body . "</td>";
    $body = $body . "</tr>";
    $body = $body . "<tr>";
    $body = $body . "<td style='text-align:right' bgcolor='#EBF2F6'>";
    $body = $body . "Willing to invest minimum 25 lacs? :";
    $body = $body . "</td>";
    $body = $body . "<td style='text-align:left' bgcolor='#FFFFFF'>";
    $body = $body . "<span>" .$willing_to_invest_25lac. "</span>";
    $body = $body . "</td>";
    $body = $body . "</tr>";
    $body = $body . "<tr>";
    $body = $body . "<td style='text-align:right' bgcolor='#EBF2F6'>";
    $body = $body . "Do you own any other franchise? :";
    $body = $body . "</td>";
    $body = $body . "<td style='text-align:left' bgcolor='#FFFFFF'>";
    $body = $body . "<span>" .$your_any_other_franchise. "</span>";
    $body = $body . "</td>";
    $body = $body . "</tr>";
    $body = $body . "<tr>";
    $body = $body . "<td style='text-align:right' bgcolor='#EBF2F6'>";
    $body = $body . "Preferred call time :";
    $body = $body . "</td>";
    $body = $body . "<td style='text-align:left' bgcolor='#FFFFFF'>";
    $body = $body . "<span>" .$preferred_call_time. "</span>";
    $body = $body . "</td>";
    $body = $body . "</tr>";
    // $body = $body . "<tr>";
    // $body = $body . "<td style='text-align:right' bgcolor='#EBF2F6'>";
    // $body = $body . "District :";
    // $body = $body . "</td>";
    // $body = $body . "<td style='text-align:left' bgcolor='#FFFFFF'>";
    // $body = $body . "<span>" .$district. "</span>";
    // $body = $body . "</td>";
    // $body = $body . "</tr>";
    // $body = $body . "<tr>";
    // $body = $body . "<td style='text-align:right' bgcolor='#EBF2F6'>";
    // $body = $body . "Cluster :";
    // $body = $body . "</td>";
    // $body = $body . "<td style='text-align:left' bgcolor='#FFFFFF'>";
    // $body = $body . "<span>" .$cluster. "</span>";
    // $body = $body . "</td>";
    // $body = $body . "</tr>";
    // $body = $body . "<tr>";
    // $body = $body . "<td style='text-align:right' bgcolor='#EBF2F6'>";
    // $body = $body . "Pin Code :";
    // $body = $body . "</td>";
    // $body = $body . "<td style='text-align:left' bgcolor='#FFFFFF'>";
    // $body = $body . "<span>" .$pincode. "</span>";
    // $body = $body . "</td>";
    // $body = $body . "</tr>";
    $body = $body . "<tr>";
    $body = $body . "<td style='text-align:right' bgcolor='#EBF2F6'>";
    $body = $body . "Message :";
    $body = $body . "</td>";
    $body = $body . "<td style='text-align:left' bgcolor='#FFFFFF'>";
    $body = $body . "<span>" .$message. "</span>";
    $body = $body . "</td>";
    $body = $body . "</tr>";
    $body = $body . "<tr>";
    $body = $body . "<td colspan='2' style='text-align:center; color:#FFF' bgcolor='#2D9DCE'> &nbsp; </td>";
    $body = $body . "</tr>";
    $body = $body . "</table>";

    $mail->Body =$body;
    //$mail->AddAddress("nknitinkumar7194@gmail.com");
    //$mail->AddAddress("admin@123homepaints.com");
    //$mail->AddCC("nknitinkumar7194@gmail.com");
    $mail->AddBCC("nknitinkumar7194@gmail.com");
    //$mail->AddAddress("anirban@hitechshyambazar.com");
    //$mail->AddAddress("shyambazar@hitechshyambazar.com");
    //$mail->AddAddress("sudhir1994php@gmail.com");

    //$mail->AddBCC("vishal.srivastaw@gmail.com");
    //$mail->AddBCC("mobappssolutions141@gmail.com");
    //$mail->AddBCC("seohitech1@gmail.com");
    //$mail->AddAddress("mobappssolutions141@gmail.com");
    //$mail->AddCC("seohitech1@gmail.com");

    $mail->AddAddress($to);
    if(!$mail->Send())
    {

    echo "Message has been not sent<p>";

    echo "Mailer Success: " . $mail->ErrorInfo;

    exit;

    }
    else
    {
      
      $servername = "localhost";
      $username = "moople_NewFormSudhirusers";
	  $password = "uk_J,yVTv}HTr{C0";
	  $dbname = "moople_NewFormSudhir";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    

      $sql = "INSERT INTO partner_with_moople (name, email, contact_no, state, district, cluster, pincode, whats_current_employment_status, willing_to_invest_25lac, your_any_other_franchise, preferred_call_time, message, utm_source, utm_medium, utm_campaign, posted_on)
      VALUES ('".$name."', '".$email."', '".$contact_no."','".$state."','".$district."','".$cluster."','".$pincode."', '".$whats_current_employment_status."', '".$willing_to_invest_25lac."', '".$your_any_other_franchise."', '".$preferred_call_time."', '".$message."', '".$utm_source."', '".$utm_medium."', '".$utm_campaign."', '".$date."')";



      if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
      } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
    
        echo "<script language='javascript' type='text/javascript'> 
        window.location = 'https://www.moople.in/thankyou/';</script>";
          

    $c=1;
  }


}
if(!isset($c))
 header("location:https://www.moople.in/");