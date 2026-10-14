<?php

function insert_data($table,$arr=[])
{
      $servername = "localhost";
      $username = "moople_NewFormSudhirusers";
	  $password = "uk_J,yVTv}HTr{C0";
	  $dbname = "moople_NewFormSudhir";

      $cnn=mysqli_connect($servername,$username,$password,$dbname) or die("Connection failed!");
   
        if(!isset($arr['entrydate']))
        {
           $arr['entrydate']=' ';  
        }
       
         if(!isset($arr['name']))
         {
            $arr['name']=' ';
         }
        
         if(!isset($arr['email']))
         {
            $arr['email']=' '; 
         }
       
         if(!isset($arr['phone']))
         {
            $arr['phone']=' ';
         }
        
         if(!isset($arr['lead_status']))
         {
            $arr['lead_status']=' '; 
         }
       
        
         if(!isset($arr['apply_for']))
         {
            $arr['apply_for']=' ';
         }
        
         if(!isset($arr['location']))
         {
            $arr['location']=' ';
         }
        
         if(!isset($arr['query']))
         {
           $arr['query']='No quary'; 
         }

        if(!isset($arr['resume']))
         {
           $arr['resume']='No'; 
         }
        
         if(!isset($arr['state']))
         {
           $arr['state']=' '; 
         }
        
        

      $entrydate=$arr['entrydate'];
      $name=$arr['name'];
      $email=$arr['email'];
      $phone=$arr['phone'];
   
      $apply_for=$arr['apply_for'];
      $location=$arr['location'];
      $query=$arr['query'];
    
      $subjects=$arr['subjects'];
      $resume=$arr['resume'];
      $altMobile=$arr['altMobile'];
      $state=$arr['state'];
      $utm_source= isset($arr['utm_source']) ? $arr['utm_source'] : '';
      $utm_medium= isset($arr['utm_medium']) ? $arr['utm_medium'] : '';
      $utm_campaign= isset($arr['utm_campaign']) ? $arr['utm_campaign'] : '';
      $redirect_from = isset($arr['redirect_from']) ? $arr['redirect_from'] : '';
      
      $query = "INSERT INTO leads (entrydate, name, email, phone, apply_for, location, query,subjects,resume,altphone,state,utm_source,utm_medium,utm_campaign,redirect_from)
    VALUES ('".$entrydate."', '".$name."', '".$email."', '".$phone."', '".$apply_for."','".$location."', '".$query."','".$subjects."','".$resume."','".$altMobile."','".$state."','".$utm_source."','".$utm_medium."','".$utm_campaign."','".$redirect_from."')";

    $sql=mysqli_query($cnn,$query);
    //die();
    if(!$sql)
    {
        echo"error:".mysqli_error($cnn);
    }
    else
    {
        //echo"ok".mysqli_error($cnn);
    }

   mysqli_close($con);   
   
}




?>