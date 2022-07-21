<?php

//From my instructor


if(isset($_POST) & !empty($_POST)){

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    
    
    $check = 1;
    // validating the first and only name
    if (empty($_POST["username"])) {
        $fmsg = "Fisrt Name is required";
        $check = 0;
    } else {
        $firstname = $_POST['username'];   
        $firstname = test_input($firstname);
        if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
            $fmsg = "Only letters and white space allowed as first name";
            $check = 0;
        }
    }
    
    // validating the lastname
    // if (empty($_POST["lastname"])) {
    //     $fmsg = "Last Name is required";
    //     $check = 0;
    // } else {
    //     $lastname = $_POST['lastname'];
    //     $lastname = test_input($lastname);
    //     if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
    //         $fmsg = "Only letters and white space allowed as Surname";
    //         $check = 0;
    //     }
    // }
    
    
    // validating the email addresss
    if (empty($_POST["usermail"])) {
        $fmsg = "Email is required";
        $check = 0;
    } else {
        $mail = $_POST['usermail']; 
        $mail = test_input($mail);
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $fmsg = "Invalid email format";
            $check = 0;
        }
    }
    
    // validating the phone number
    // if (empty($_POST["phone"])) {
    //     $fmsg = "Phone number is required";
    //     $check = 0;
    // } else {
    //     $phone = $_POST['phone'];   
    //     $phone = test_input($phone);
    // }

    
    // validating the message or comment section
    if (empty($_POST["usertext"])) {
        $fmsg = "Message is required";
        $check = 0;
    } else {
        $message = $_POST['usertext'];
        $message = test_input($message);
      
    }
    

    // Sending the mail
    if ($check == 1) {
    
        $mailto="moseschizaram8@gmail.com"; // my email address
        $from = $mail; // sender email address
        $name = $firstname; //Client name
        $subject = "Umuahia Choir Website !"; //subject to my mail
        $subject2 = "Your message was submitted succesfully | Umuahia Choir";
        $message = "<strong>Client Name: </strong>" ."<strong>". $name."</strong>" ."\n\n" . " Wrote the following message" . "\n\n " . "<strong>". $message."</strong>";
        $message2 = "<strong> Dear </strong> " . "<strong>" . $name . "</strong>" . " \n\n" . "Thank you visiting our site !. We are grateful for your comment and would respond as soon as possible if there is any need to. Have a blissful moment"; 

        // user entered email
        $header1 = "";
        $header1 .= "Reply-To: " .$from ."\r\n"; 
        $header1 .= "Return-Path: " .$from ."\r\n"; 
        $header1 .= "From: ".$from ."\r\n".
        // $headers .= "Organization: Sender Organization\r\n";
        $header1 .= "MIME-Version: 1.0\r\n";
        $header1 .= "Content-type: text/html; charset=utf-8\r\n";
        $header1 .= "X-Priority: 3\r\n";
        $header1 .= "X-Mailer: PHP". phpversion() ."\r\n" ;
        $header1 .= "CC: ". $from . "\r\n";
        $header1 .= "BCC: ". "\r\n";


        //This is for client
        $header2 = "";
        $header2 .= "Reply-To: " .$mailto ."\r\n"; 
        $header2 .= "Return-Path: " .$mailto ."\r\n"; 
        $header2 .= "From: ".$mailto ."\r\n".
        // $headers .= "Organization: Sender Organization\r\n";
        $header2 .= "MIME-Version: 1.0\r\n";
        $header2 .= "Content-type: text/html; charset=utf-8\r\n";
        $header2 .= "X-Priority: 3\r\n";
        $header2 .= "X-Mailer: PHP". phpversion() ."\r\n" ;
        $header1 .= "CC: ". $mailto . "\r\n";
        $header1 .= "BCC: ". "\r\n";



        $result=mail($mailto, $subject, $message, $header1); // to website owner
        $result=mail($from, $subject2, $message2, $header2); // to client
      
      if ($result) {
           $smsg = "Message sent succesfully !" ;   
      }else{
    
      $fmsg = "Message sending failed !" ;
      }
      }
    }
    
?>
