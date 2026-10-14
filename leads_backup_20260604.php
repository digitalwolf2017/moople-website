  <?php
  session_start();
  
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $CRMapiUrl = "https://providerapi.tcportal.online/api/v1/collect_data_dw";

  $secret = '6Lf9ePspAAAAANDOdAMTJAZmLlEE91F4BvNqD7lP';
  $response = $_POST['g-recaptcha-response'];
  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $data = [
      'secret' => $secret,
      'response' => $response,
      'remoteip' => $_SERVER['REMOTE_ADDR']
  ];
  $options = [
      'http' => [
          'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
          'method'  => 'POST',
          'content' => http_build_query($data)
      ]
  ];

  $context  = stream_context_create($options);
  $result = file_get_contents($url, false, $context);
  $resultJson = json_decode($result);
  //echo "<pre>";
  //var_dump($resultJson);
  //die();
  if ($resultJson->success == true) {
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




    $utm_source = (isset($_POST['utm_source']) && $_POST['utm_source']!='') ? trim($_POST['utm_source']) : '';
    $utm_medium = (isset($_POST['utm_medium']) && $_POST['utm_medium']!='') ? trim($_POST['utm_medium']) : '';
    $utm_campaign = (isset($_POST['utm_campaign']) && $_POST['utm_campaign']!='') ? trim($_POST['utm_campaign']) : '';



    $redirect_from = isset($_POST['redirect_from']) ? $_POST['redirect_from'] : '';
    $is_dynamic_course_page = (isset($_POST['is_dynamic_course_page']) && $_POST['is_dynamic_course_page'] == '1') ? '1' : '0';

    if($utm_source==''){
      $utm_source  = $redirect_from;
    }
    if($utm_campaign==''){
        $utm_campaign = $utm_source;
    }

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

    $qy['utm_source'] = $utm_source;
    $qy['utm_medium'] = $utm_medium;
    $qy['utm_campaign'] = $utm_campaign;




    //echo"<pre>";
    //print_r($qy);
    //die;

    /*********************/
    if($career==1){
    $mailToAdd = 'hr@hitechanimation.com';
    }else if(isset($_POST['location'])){
    $location2=strtolower($location);
    if($location2=="barrackpore")
    {
    $mailToAdd = 'hitechanimationbkp@gmail.com';
    }
    else if($location2=="elgin")
    {
    $mailToAdd = 'tamal.hitech@gmail.com';
    }
    else if($location2=="howrah")
    {
    $mailToAdd = 'hitechowrah@gmail.com';
    }
    else if($location2=="jodhpur park")
    {
    $mailToAdd = 'dasanimesh665@gmail.com';
    }
    else if($location2=="kudghat")
    {
    $mailToAdd = 'dasanimesh665@gmail.com';
    }
    else if($location2=="madhyamgram")
    {
    $mailToAdd = 'dasanimesh665@gmail.com';
    }
    else if($location2=="barasat")
    {
    $mailToAdd = 'dasanimesh665@gmail.com';
    }
    else if($location2=="midnapore")
    {
    $mailToAdd = 'hitechmidnapur@gmail.com';
    }
    else if($location2=="new alipore")
    {
    $mailToAdd = 'tamal.hitech@gmail.com';
    }
    else if($location2=="serampore")
    {
    $mailToAdd = 'serampore.hitech@gmail.com';
    }
    else if($location2=="shyambazar")
    {
    $mailToAdd = 'hitech.shyambazar@gmail.com';
    }
    else if($location2=="sonarpur")
    {
    $mailToAdd = 'tamal.hitech@gmail.com';
    }
    else if($location2=="topsia")
    {
    $mailToAdd = 'tamaldm@gmail.com';
    }
    else if($location2=="chandannagar")
    {
    $mailToAdd = 'chandannagar.hitechanimation@gmail.com';
    }
    else if($location2=="lajpat nagar delhi")
    {
    $mailToAdd = 'kavraanventures@gmail.com';
    }
    else if($location2=="nirman vihar delhi")
    {
    $mailToAdd = 'nknitinkumar7194@gmail.com';
    }else{
      $mailToAdd = 'nknitinkumar7194@gmail.com';
    }

    }else{
    $mailToAdd = 'pritish.hitech@gmail.com';
    }

    // echo"<pre>";
    // print_r($mailToAdd);
    // die;

    //$to = 'nknitinkumar7194@gmail.com';
    $to=$mailToAdd;


    /*********************/

    $date = date("Y-m-d H:i:s");

    // echo "<pre>";
    // var_dump($name);
    // var_dump($email);
    // var_dump($_POST);
    // die();

    if($name != '') 
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
      //$mail->CharSet = "UTF-8";
      //$mail->Encoding = "8bit"; 
      

      $email_body = '
          <html>
          <head>
            <title>Enquire online</title>
          </head>
          <body>
            <p>Name: ' . htmlspecialchars($name) . '</p>
            <p>Subject: ' . htmlspecialchars($subjects) . '</p>
            <p>Email: ' . htmlspecialchars($email) . '</p>
            <p>Contact No: ' . htmlspecialchars($contact_no) . '</p>
            <p>Enquiry: ' . htmlspecialchars($enquiry) . '</p>
          </body>
          </html>
      ';

      $email_body_plain = "Name: " . htmlspecialchars($name) . "\n"
          . "Subject: " . htmlspecialchars($subjects) . "\n"
          . "Email: " . htmlspecialchars($email) . "\n"
          . "Contact No: " . htmlspecialchars($contact_no) . "\n"
          . "Enquiry: " . htmlspecialchars($enquiry);

      //$mail->Body =$body;
      $mail->Body = $email_body_plain;





      //$mail->Body =$body;



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
         //$to = '003animeshdey@gmail.com';
         $mail->AddAddress($to);

         $mail->AddCC("subha.digitalwolf@gmail.com");
        
          


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
        
    //echo "<pre>";
    //var_dump($name);
    //var_dump($email);
    //var_dump($_POST);
    //die();

      //if((isset($_POST['redirect_from']) && $_POST['redirect_from']=='lp') || (isset($qy['location']) && ($qy['location']=='Sealdah' || $qy['location']=='Elgin' || $qy['location']=='Jodhpur park' || $qy['location']=='Barasat' || $qy['location']=='New Alipore' || $qy['location']=='Sonarpur'))){

        

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

      

        $sql = "INSERT INTO leads (entrydate, name, email, phone, lead_status, remarks, altphone, action_status, action_status_date, lead_status_others, course_applied, department, resume, location, query, subjects, apply_for, state, phone_verifyed, lead_source, utm_source, utm_medium, utm_campaign, utm_content, utm_term, last_modified_id, last_modified_on, created_id, assign_id, qualification, address, redirect_from, is_dynamic_course_page)
        VALUES ('".$qy['entrydate']."', '".$qy['name']."', '".$qy['email']."','".$qy['phone']."','','','".$qy['altMobile']."','FORWARD','".$qy['entrydate']."','','".$qy['course_Interested_in']."','','','".$qy['location']."','".$qy['query']."','".$qy['subjects']."','".$qy['apply_for']."','".$qy['state']."','0','','".$qy['utm_source']."','".$qy['utm_medium']."','".$qy['utm_campaign']."','','','0','".$qy['entrydate']."','0','0','".$qy['educational_qualification']."','','".$redirect_from."','".$is_dynamic_course_page."')";
          
        // echo "<pre>";
        // var_dump($sql);
        // die();

          //$conn->query($sql);
        if ($conn->query($sql) === TRUE) {
          //echo "New record created successfully";
        } else {
          //echo "Error: " . $sql . "<br>" . $conn->error;
          //die();
        }
          // echo "<pre>";
          // var_dump($sql);
          // var_dump($qty['utm_source']);
          //var_dump($conn);
          //die();
          $lastLeadId = $conn->insert_id;
        //$conn->close();
      //}
      
      ########## CRM API 
      $apiPayload = [
          "entry_date"        => date("d-m-Y",strtotime($qy['entrydate'])),
          "candidate_name"    => $qy['name'],
          "candidate_number"  => $qy['phone'],
          "alternative_number"=> $qy['altMobile'],
          "email_id"          => $qy['email'],
          "qualification"     => $qy['educational_qualification'],
          "location"          => $qy['location'],
          "postal_code"       => "",
          "query"             => $qy['query'],
          "source"            => "SEO",
          "enquiry_type"      => "",
          "institution"       => "",
          "course"            => $qy['apply_for'],
          "entry_by"          => "9831808080",
          "udf1"              => $qy['utm_campaign'],
          "udf2"              => $qy['utm_source'],
          "udf3"              => $qy['utm_medium'],
          "udf4"              => $redirect_from,
          "udf5"              => ""
      ];

      $ch = curl_init($CRMapiUrl);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POST, true);
      $jsonPayload = json_encode($apiPayload);
      if ($jsonPayload === false) {
          $jsonPayload = '{}';
      }
      curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonPayload);
      curl_setopt($ch, CURLOPT_HTTPHEADER, [
          "Content-Type: application/json"
      ]);
      curl_setopt($ch, CURLOPT_USERPWD, "moople_users:2@09ttlF@321#$");

      $apiResponse = curl_exec($ch);
      $curlError = curl_error($ch);
      curl_close($ch);

      $crm_status = "ERROR";
      $crm_error_message = "Unknown Error";

      /* ===== RESPONSE PARSE ===== */
      if ($apiResponse) {

          $respArr = json_decode($apiResponse, true);

          if (isset($respArr['status'])) {

              $status   = $respArr['status'];
              $inserted = $respArr['data'][0]['Inserted'] ?? false;

              if ($status == 0) {
                $crm_status = "SUCCESS";
                $crm_error_message = "Inserted into CRM";
              }else{
                $crm_status = "ERROR";
                $crm_error_message = "NOT Inserted in CRM";
              }

            //   if ($status == 0 && $inserted == false) {
            //       $crm_status = "ERROR";
            //       $crm_error_message = "CRM System Inserted = success and Main Table Inserted = error";
            //   }

            //   if ($status == 0 && $inserted == true) {
            //       $crm_status = "SUCCESS";
            //       $crm_error_message = "CRM System Inserted = success and Main Table Inserted = success";
            //   }
          }
      }else{
      
        if ($apiResponse === false) {
            $crm_status = "ERROR";
            $crm_error_message = "CRM API CURL Failed";
            //$apiResponse = curl_error($ch);
        }
      }

      $storeData = [
          'payload' => $apiPayload,
          'response_raw' => $apiResponse,
          'curl_error' => $curlError,
          'timestamp' => date('Y-m-d H:i:s')
      ];
      $updateSql = "UPDATE leads SET
          crm_status = '".$crm_status."',
          crm_error_message = '".$conn->real_escape_string($crm_error_message)."',
          crm_api_response = '".$conn->real_escape_string(json_encode($storeData))."'
          WHERE id = ".$lastLeadId."
          LIMIT 1
          ";

      $conn->query($updateSql);

      $conn->close();
      ########## CRM API
      if($is_dynamic_course_page == '1'){
          
          echo "<script language='javascript' type='text/javascript'> 
      
          window.location = 'https://www.moople.in/thankyou/';</script>";
          
      }
      elseif($redirect_from=='lp'){
          
          echo "<script language='javascript' type='text/javascript'> 
      
          window.location = 'https://www.moople.in/lp/thank-you.html';</script>";
          
      }
      elseif($redirect_from=='moopleLP'){
          
          echo "<script language='javascript' type='text/javascript'> 
      
          window.location = 'https://www.moople.in/lp/thank-you.html';</script>";
          
      }

      elseif($redirect_from=='thane-lp'){
          
          echo "<script language='javascript' type='text/javascript'> 
      
          window.location = 'https://www.moople.in/moople-thane/thank-you';</script>";
          
      }
      elseif($redirect_from=='Siliguri_lp_adm_animation_course'){
          
          echo "<script language='javascript' type='text/javascript'> 
      
          window.location = 'https://www.moople.in/siliguri-lp/thankyou-siliguri.php';</script>";
          
      }
      elseif($redirect_from=='Siliguri_lp_popup_animation_course'){
          
          echo "<script language='javascript' type='text/javascript'> 
      
          window.location = 'https://www.moople.in/siliguri-lp/thankyou-siliguri.php';</script>";
          
      }
      elseif($redirect_from=='Siliguri_lp_download_animation_course'){
          
          echo "<script language='javascript' type='text/javascript'> 
      
          window.location = 'https://www.moople.in/siliguri-lp/thankyou-siliguri.php';</script>";
          
      }
      elseif($redirect_from=='guwahati-lp'){
          
          echo "<script language='javascript' type='text/javascript'> 
      
          window.location = 'https://www.moople.in/moople-guwahati/thank-you';</script>";
          
      }
      elseif($redirect_from=='guwahati_lp_adm_animation_course'){
          
          echo "<script language='javascript' type='text/javascript'> 
      
          window.location = 'https://www.moople.in/guwahati-lp/thankyou-animation-course.php';</script>";
          
      }
      elseif($redirect_from=='guwahati_lp_popup_animation_course'){
          
          echo "<script language='javascript' type='text/javascript'> 
      
          window.location = 'https://www.moople.in/guwahati-lp/thankyou-animation-course.php';</script>";
          
      }
      elseif($redirect_from=='guwahati_lp_adm_game_development_course'){
          
          echo "<script language='javascript' type='text/javascript'> 
      
          window.location = 'https://www.moople.in/guwahati-lp/thankyou-game-development-course.php';</script>";
          
      }
      elseif($redirect_from=='guwahati_lp_popup_game_development_course'){
          
          echo "<script language='javascript' type='text/javascript'> 
      
          window.location = 'https://www.moople.in/guwahati-lp/thankyou-game-development-course.php';</script>";
          
      }
      elseif($redirect_from=='guwahati_lp_download_game_development_course'){
          
          echo "<script language='javascript' type='text/javascript'> 
      
          window.location = 'https://www.moople.in/guwahati-lp/thankyou-game-development-course.php';</script>";
          
      }
      
      elseif($redirect_from=='guwahati_lp_adm_graphics_design_ai_course'){
          
          echo "<script language='javascript' type='text/javascript'> 
      
          window.location = 'https://www.moople.in/guwahati-lp/thankyou-graphic-design-course.php';</script>";
          
      }
      elseif($redirect_from=='guwahati_lp_popup_graphics_design_ai_course'){
          
          echo "<script language='javascript' type='text/javascript'> 
      
          window.location = 'https://www.moople.in/guwahati-lp/thankyou-graphic-design-course.php';</script>";
          
      }
      elseif($redirect_from=='guwahati_lp_download_graphics_design_ai_course'){
          
          echo "<script language='javascript' type='text/javascript'> 
      
          window.location = 'https://www.moople.in/guwahati-lp/thankyou-graphic-design-course.php';</script>";
          
      }
      
      elseif($redirect_from=='animation-lp'){
          
          echo "<script language='javascript' type='text/javascript'> 
      
          window.location = 'https://www.moople.in/animation-lp/thank-you.html';</script>";
          
      }
      elseif($redirect_from=='digital-marketing-lp'){
          
          echo "<script language='javascript' type='text/javascript'> 
      
          window.location = 'https://www.moople.in/digital-marketing-lp/thank-you.html';</script>";
          
      }
      elseif($redirect_from=='graphics-design-lp'){
          
          echo "<script language='javascript' type='text/javascript'> 
      
          window.location = 'https://www.moople.in/graphics-design-lp/thank-you.html';</script>";
          
      }
      elseif($redirect_from=='vfx-lp'){
          
          echo "<script language='javascript' type='text/javascript'> 
      
          window.location = 'https://www.moople.in/vfx-lp/thank-you.html';</script>";
          
      }
    //   
      elseif($redirect_from=='guwahati_counselor_frm'){
          
          echo "<script language='javascript' type='text/javascript'> 
      
          window.location = 'https://www.moople.in/graphic-design-course-in-guwahati/thankyou.php';</script>";
          
      }
    //  
    
    //   
      elseif($redirect_from=='guwahati_counselor_frm'){
          
          echo "<script language='javascript' type='text/javascript'> 
      
          window.location = 'https://www.moople.in/animation-course-in-guwahati/thankyou.php';</script>";
          
      }
    //  
    
      elseif($redirect_from=='web-design-lp'){
          
          echo "<script language='javascript' type='text/javascript'> 
      
          window.location = 'https://www.moople.in/web-design-lp/thank-you.html';</script>";
          
      }
      elseif($redirect_from=='moopleLP-DownloadProspectus'){

        if($qy['apply_for']=='BSc in VFX Film Making' || $qy['apply_for']=='BSc in Animation Film Making' || $qy['apply_for']=='Advanced 3D Animation & AI' || $qy['apply_for']=='2D Animation & AI' || $qy['apply_for']=='3D Modelling & AI' || $qy['apply_for']=='Visual Effects & AI' || $qy['apply_for']=='Motion Graphics, Video Editing & AI' || $qy['apply_for']=='Advanced Graphic Design & AI' || $qy['apply_for']=='Graphic Design & AI' || $qy['apply_for']=='Web Design & AI' || $qy['apply_for']=='UI/UX Design & AI' || $qy['apply_for']=='Digital Marketing & AI'){

          if($qy['apply_for']=='BSc in VFX Film Making'){
            echo "<script type='text/javascript'>
            var link = document.createElement('a');
            link.href = 'assets/pdf/degree/Moople_Institute_BSc_in_Vfx_Film_Making.pdf';
            link.download = 'Moople_Institute_BSc_in_Vfx_Film_Making.pdf'; 
            link.click();
            </script>";
          
          }else if($qy['apply_for']=='BSC in Multimedia, Design and Web Development'){
            echo "<script type='text/javascript'>
            var link = document.createElement('a');
            link.href = 'assets/pdf/degree/Moople_Institute_BSc_in_Multimedia_Design_Web_Development.pdf';
            link.download = 'Moople_Institute_BSc_in_Multimedia_Design_Web_Development.pdf'; 
            link.click();
            </script>";
          }else if($qy['apply_for']=='BSc in Cyber Security'){
            echo "<script type='text/javascript'>
            var link = document.createElement('a');
            link.href = 'assets/pdf/degree/Moople_Institute_BSc_in_Cyber_Security.pdf';
            link.download = 'Moople_Institute_BSc_in_Cyber_Security.pdf'; 
            link.click();
            </script>";
          }else if($qy['apply_for']=='BSc in Animation Film Making'){
            echo "<script type='text/javascript'>
            var link = document.createElement('a');
            link.href = 'assets/pdf/degree/Moople_Institute_BSc_in_Animation_Film_Making.pdf';
            link.download = 'Moople_Institute_BSc_in_Animation_Film_Making.pdf'; 
            link.click();
            </script>";
          }else if($qy['apply_for']=='BBA in Digital Marketing'){
            echo "<script type='text/javascript'>
            var link = document.createElement('a');
            link.href = 'assets/pdf/degree/Moople_Institute_BBA_in_Digital_Marketing.pdf';
            link.download = 'Moople_Institute_BBA_in_Digital_Marketing.pdf'; 
            link.click();
            </script>";
          }else if($qy['apply_for']=='Bachelor of Computer Application'){
            echo "<script type='text/javascript'>
            var link = document.createElement('a');
            link.href = 'assets/pdf/degree/Moople_Institute_Bachelor_of_Computer_Application.pdf';
            link.download = 'Moople_Institute_Bachelor_of_Computer_Application.pdf'; 
            link.click();
            </script>";
          }else{
            echo "<script type='text/javascript'>
            var link = document.createElement('a');
            //link.href = 'assets/pdf/bsc-prospectus-2025-2026.pdf';
            link.href = 'assets/pdf/Certificat-Course-Prospectus-2026-2027.pdf';
            link.download = 'bsc-prospectus-2025-2026.pdf'; 
            link.click();
            </script>";
          
          }
          
        }else{
          echo "<script type='text/javascript'>
          var link = document.createElement('a');
          //link.href = 'assets/pdf/Moople_Prospectus_2024.pdf';
          link.href = 'assets/pdf/Certificat-Course-Prospectus-2026-2027.pdf';
          link.download = 'Moople_Prospectus_2024.pdf'; 
          link.click();
          </script>";
          
        }
        
          echo "<script language='javascript' type='text/javascript'> 
      
          window.location = 'https://www.moople.in/lp/thank-you.html';</script>";

      }
      else{

          if($redirect_from=='Register-Today-Pop-Up'){
            echo "<script type='text/javascript'>
          var link = document.createElement('a');
          link.href = 'assets/pdf/Moople_Prospectus_2024.pdf';
          link.download = 'Moople_Prospectus_2024.pdf'; 
          link.click();
          </script>";
          }
          echo "<script language='javascript' type='text/javascript'> 
      
          window.location = 'https://www.moople.in/thankyou/';</script>";
      }
            

      $c=1;
    }


    }
    if(!isset($c))
    header("location:https://www.moople.in/");
  }else{
    echo "<script language='javascript' type='text/javascript'> 
          alert('Captcha invalid');
          window.location = 'https://www.moople.in/';</script>";
  }
