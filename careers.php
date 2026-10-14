<?php
session_start();
// echo "<pre>";
// var_dump($_POST);
// die();

$name = $_POST['name'];

$contact_no = $_POST['phone'];
$email = isset($_POST['email']) ? $_POST['email'] : '';

$enquiry=" ";
$enquiry = isset($_POST['message']) ? $_POST['message'] : '';
$courses_select = isset($_POST['course']) ? $_POST['course'] : ''; 
$location=" ";
$location = isset($_POST['location']) ? $_POST['location'] : '';
$subject=" ";
$subjects = isset($_POST['subject']) ? $_POST['subject'] : '';
$altMobile=" ";
$altMobile = isset($_POST['altMobile']) ? $_POST['altMobile'] : '';
$utm_source = isset($_POST['utm_source']) ? $_POST['utm_source'] : '';
$utm_medium = isset($_POST['utm_medium']) ? $_POST['utm_medium'] : '';
$utm_campaign = isset($_POST['utm_campaign']) ? $_POST['utm_campaign'] : '';
$redirect_from = isset($_POST['redirect_from']) ? $_POST['redirect_from'] : '';

$state=" ";
if(isset($_POST['state'])){
  $state = $_POST['state'];  
}

$career=0;
if(!empty($_FILES['resume']['name']))
{
  $fn1=$_FILES["resume"]['name'];
  $ext1=explode('.',$fn1);
  $ext=end($ext1);
  $fn=time().rand(1000,9999).".".$ext;
  $career=1;
  if(strtolower($ext)=='jpeg'||strtolower($ext)=='jpg'||strtolower($ext)=='png'||strtolower($ext)=='docx'||strtolower($ext)=='pdf'){
    $career=1;
    $subjects="Career Lead";
     if(move_uploaded_file($_FILES['resume']['tmp_name'],'files/'.$fn))
     {
      $qy['resume']=$fn;
     }
  }
}



$qy['entrydate']=date('Y-m-d H:i:s');
$qy['name']=$name;
$qy['email']=$email;
$qy['phone']=$contact_no;
$qy['query']=$enquiry;
$qy['subjects']=$subjects;
$qy['apply_for']=$courses_select;
$qy['location']=$location;
$qy['altMobile']=$altMobile;
$qy['state']=$state;
$qy['educational_qualification'] = isset($_POST['educational_qualification']) ? $_POST['educational_qualification'] : '';
$qy['course_Interested_in'] = isset($_POST['course_Interested_in']) ? $_POST['course_Interested_in'] : '';

$qy['utm_source']=$utm_source;
$qy['utm_medium']=$utm_medium;
$qy['utm_campaign']=$utm_campaign;




// echo"<pre>";
// print_r($_POST);
// die;

/*********************/
$mailToAdd = 'hr@hitechanimation.com';
//$to = 'nknitinkumar7194@gmail.com';
$to=$mailToAdd;


/*********************/

$date = date("Y-m-d H:i:s");

// echo "<pre>";
// var_dump($name);
// var_dump($email);
// var_dump($_POST);
// die();

if($name != '' && $email != '') 
{

  //include("insert_leads.php");
  //insert_data("leads",$qy);
  

  require("class.phpmailer.php");

  
  // echo "<pre>";
  // var_dump('hi');
  // die();
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

    $body = $body . "Subject :";

    $body = $body . "</td>";

    $body = $body . "<td style='text-align:left' bgcolor='#FFFFFF'>";

    $body = $body . "<span>" .$subjects. "</span>";

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

    $body = $body . "Message :";

    $body = $body . "</td>";

    $body = $body . "<td style='text-align:left' bgcolor='#FFFFFF'>";

    $body = $body . "<span>" .$enquiry. "</span>";

    $body = $body . "</td>";

    $body = $body . "</tr>";



    $body = $body . "<tr>";

    $body = $body . "<td colspan='2' style='text-align:center; color:#FFF' bgcolor='#2D9DCE'> &nbsp; </td>";

    $body = $body . "</tr>";

    $body = $body . "</table>";





    $mail->Body =$body;



    //$mail->AddAddress("nknitinkumar7194@gmail.com");

    ////$mail->AddAddress("admin@123homepaints.com");

    //$mail->AddCC("nknitinkumar7194@gmail.com");

    //$mail->AddBCC("vishal.srivastaw@gmail.com");








       //$mail->AddAddress("anirban@hitechshyambazar.com");
      // $mail->AddAddress("shyambazar@hitechshyambazar.com");
      // $mail->AddAddress("sudhir1994php@gmail.com");

        //$mail->AddBCC("vishal.srivastaw@gmail.com");
      ///  $mail->AddBCC("mobappssolutions141@gmail.com");
        $mail->AddBCC("seohitech1@gmail.com");
       // $mail->AddAddress("mobappssolutions141@gmail.com");

       $mail->AddAddress($to);

    //  $mail->AddCC("seohitech1@gmail.com");
      
        


        // echo$body;
        // die;

  if(!$mail->Send())

  {

     echo "Message has been not sent<p>";

     echo "Mailer Success: " . $mail->ErrorInfo;

     exit;

  }

  else

  {
      
//       echo "<pre>";
// var_dump($name);
// var_dump($email);
// var_dump($_POST);
// die();

    // if((isset($_POST['redirect_from']) && $_POST['redirect_from']=='lp') || (isset($qy['location']) && ($qy['location']=='Sealdah' || $qy['location']=='Elgin' || $qy['location']=='Jodhpur park' || $qy['location']=='Barasat' || $qy['location']=='New Alipore' || $qy['location']=='Sonarpur'))){

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

    

	    $sql = "INSERT INTO careers_apply (entrydate, name, email, phone, lead_status, remarks, altphone, action_status, action_status_date, lead_status_others, course_applied, department, resume, location, query, subjects, apply_for, state, phone_verifyed, lead_source, utm_source, utm_medium, utm_campaign, utm_content, utm_term, last_modified_id, last_modified_on, created_id, assign_id, qualification, address, redirect_from)
	    VALUES ('".$qy['entrydate']."', '".$qy['name']."', '".$qy['email']."','".$qy['phone']."','','','".$qy['altMobile']."','FORWARD','".$qy['entrydate']."','','".$qy['course_Interested_in']."','','','".$qy['location']."','".$qy['query']."','".$qy['subjects']."','".$qy['apply_for']."','".$qy['state']."','0','','".$qy['utm_source']."','".$qy['utm_medium']."','".$qy['utm_campaign']."','','','0','".$qy['entrydate']."','0','0','".$qy['educational_qualification']."','','".$redirect_from."')";



	    if ($conn->query($sql) === TRUE) {
	      //echo "New record created successfully";
	    } else {
	      //echo "Error: " . $sql . "<br>" . $conn->error;
	    }

    	$conn->close();
    //}
    
    if($redirect_from=='lp'){
        
        echo "<script language='javascript' type='text/javascript'> 
    
        window.location = 'https://www.moople.in/lp/thank-you';</script>";
        
    }else{
        echo "<script language='javascript' type='text/javascript'> 
    
        window.location = 'https://www.moople.in/thankyou/';</script>";
    }
          

    $c=1;
  }


}
if(!isset($c))
 header("location:https://www.moople.in/");