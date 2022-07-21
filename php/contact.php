<?php


if(isset($_POST) & !empty($_POST)){

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


$check = 1;

        if (empty($_POST["firstname"])) {
    $fmsg = "Fisrt Name is required";
    $check = 0;
  } else {
    $firstname = $_POST['firstname'];   $firstname = test_input($firstname);
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
  $fmsg = "Only letters and white space allowed as first name";
  $check = 0;
}
  }


            if (empty($_POST["lastname"])) {
    $fmsg = "Last Name is required";
    $check = 0;
  } else {
    $lastname = $_POST['lastname']; $lastname = test_input($lastname);
if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
  $fmsg = "Only letters and white space allowed as Surname";
  $check = 0;
}
  }


if (empty($_POST["mail"])) {
    $fmsg = "Email is required";
    $check = 0;
  } else {
    $mail = $_POST['mail']; $mail = test_input($mail);
if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
  $fmsg = "Invalid email format";
  $check = 0;
}
  }


if (empty($_POST["phone"])) {
    $fmsg = "Phone number is required";
    $check = 0;
  } else {
    $phone = $_POST['phone'];   $phone = test_input($phone);
  }
        

        if (empty($_POST["message"])) {
    $fmsg = "Message is required";
    $check = 0;
  } else {
    $message = $_POST['message'];   $message = test_input($message);
  
  }

if ($check == 1) {


    $mailto="moseschizaram8@gmail.com"; // my email address
    $from=$mail; // sender email address
    $name= $firstname . " " . $lastname;
    $subject="CONTACT MESSAGE !";
    $subject2="Your message submitted succesfully | moseschizaram8@gmail.com ";
    $message="Client Name: " . $name . "Wrote the following message" . "\n\n " . $message;
     $message2="Dear " . $name . " \n\n" . "Thank you for contacting us! we will get back to you shortly"; 
     $headers="From: ". $from; // user enterd email address
       $headers2="From: ". $mailto; // This is for client
       $result=mail($mailto, $subject, $message, $headers); // to website owner
        $result=mail($from, $subject2, $message2, $headers2); // to client
  
  if ($result) {
       $smsg = "Message sent succesfully !" ;   
  }else{

  $fmsg = "Message sending failed !" ;
  }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us | prevailing computers</title>
	<script src='myjquery.js'></script>
   <link rel="shortcut icon" href="logo.jpg"  >

 <link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" type="text/css" href="fontawesome-free-6.0.0-web/css/all.css">
<link rel="stylesheet" type="text/css" href="fontawesome-free-6.0.0-web/css/all.min.css">
<link rel="stylesheet" type="text/css" href="fontawesome-free-6.0.0-web/css/fontawesome.min.css">
<link rel="stylesheet" type="text/css" href="fontawesome-free-6.0.0-web/css/fontawesome.css">

<link rel="stylesheet" type="text/css" href="w3.css">
<link rel="stylesheet" type="text/css" href="w3new.css">
<link rel="stylesheet" type="text/css" href="themered.css">
<link rel="stylesheet" type="text/css" href="themegreen.css">
<link rel="stylesheet" type="text/css" href="themeindigo.css">

<style type="text/css">
*{box-sizing: border-box;}
    body{margin: 0px; padding: 0px;}
    #demo{margin-top: 0px;}
    .dis{width: 100%; float: left;}
         #demo li a{display: block;}
          #demo li{display: block;}
          #demo ul{list-style-type: none;
    margin: 0;
    padding: 0;}
    .bt{width: 100%; }
.head{padding: 16px 22px 16px 18px;  width:100%;z-index:1; }
   .he a:hover{background-color: black; color: white;}
    .head li a:hover{background-color: black; color: white;}
 .he{padding: 0px 10px 10px 10px;}
.jag{}
 footer{ padding: 10px 0px 10px 0px;}
 .cav{width: 80%; margin: auto;}
  .dat{ padding: 20px 50px 10px 50px; margin: 0px;}
 .pp{display: -webkit-flex; display: flex;   width: 90%;     flex-wrap: wrap;  justify-content: space-around;}
.jjj{ width: 30%; margin: 1px; min-width: 300px;}
 .backcolor{background-color: whitesmoke;}
   .prod{height: 100%;padding: 10px 10px 40px 10px; }


   @media only screen and (min-width: 602px) {
    .prod{height: 250px;}

   }
   @media only screen and (min-width: 993px) {
    .prod{height: 200px;}

   }

 @media only screen and (max-width: 601px) {
    #copy {display: block; margin: auto;}
     #face {display: block;  text-align: center;}
     .rig{text-align: center;}
     .prod{text-align: center; height: 100%;padding: 5px; }
     .brod{border-bottom: solid 0.5px inherit; border-clor: i;}

}
 @media only screen and (max-width: 601px) {
   
     .brod{border-bottom: solid 0.5px #dbefdc !important}
   

}
 @media only screen and (min-width: 602px) {
    #copy {}
     #face { float: right;  text-align: center}

}
  .mag{margin: 20px;}
   @media only screen and (max-width:601px){ .cav{width: 90%; margin: auto; text-align: center;}
   #but1{display: block; margin: auto; padding: 5px; width: 80%;}
   #about{width: 90%;} #about h1{font-size: 36px !important} #about p,h3{font-size: 16px !important; }   #about h2{font-size: 20px !important; }

    }
  @media only screen and (min-width:601px){ .cav{width: 70%; margin: auto; text-align: center;} }
@media only screen and (min-width:993px){ .cav{width: 40%; margin: auto; text-align: center;} }
 
  hr{}
   .hr{margin: 0px 5px 0px 5px;}
   .showcase{
    position: relative; left: 0px;
  

   }
   #one{}
   #two{
 width: 100%; height: 100%;  position: absolute; top: 0px; 
 background-image:  url('images/img1.jpg');
 background-size: 100% 100%;
    z-index: -1;    opacity: 0.4;
}
#three{
 width: 100%; height: 100%;  position: absolute; top: 0px; 
 background-image:  url('images/img2.jpg');
 background-size: 100% 100%;
    z-index: -1;    opacity: 0.4;
}
#four{
 width: 100%; height: 100%;  position: absolute; top: 0px; 
 background-image:  url('images/img3.jpg');
 background-size: 100% 100%;
    z-index: -1;    opacity: 0.4;
}
.txt{max-width: 93%; min-width: 93%;
}





	.logform{margin: auto; width: 100%; max-width: 450px; }
  .cent{display: block; margin: auto;}
 
   .backcolor{background-color: ghostwhite;  }
   textarea{max-width: 100%; min-width: 100%;}
   p span a{text-decoration: none;}

@media only screen and (max-width:993px){ #get{font-size: 21px !important;}  #toch{font-size: 17px !important;}  }
</style>
</head>
<body class="">
	   
   <!-- create the header section -->
    
<header class="head w3-white  w3-border-bottom   ">
    <img src="logo.jpg" alt="prevailing computers" height="50px" width="50px">

    <span class="he w3-large  w3-hide-large w3-opennav w3-right ">
    <a href="javascript:void(0);" onclick="myFunction()"><i class="fa-solid fa-bars" ></i></a>
  </span>
<ul class="w3-navbar w3-small  w3-right " style="padding-right: 30px">
  
  <li class="w3-hide-small w3-hide-medium hr"><a href="index.php">Home</a></li>
  <li class="w3-hide-small w3-hide-medium hr"><a href="about.php">About</a></li>
    <li class="w3-hide-small w3-hide-medium hr"><a href="courses.php">Courses</a></li>
  <li class="w3-hide-small w3-hide-medium hr" ><a href="contact.php">Contact Us</a></li>
 
</ul>

<div id="demo" class=" w3-hide w3-hide-large ">
  <ul class="w3-navbar w3-left-align  ">
   <li class="brod " ><a href="index.php">Home</a></li>
  <li class="brod"><a href="about.php">About</a></li>
  <li class="brod"><a href="courses.php">Courses</a></li>
  <li class="brod" ><a href="contact.php">Contact Us</a></li>
 
  </ul>
</div>



<script>
function myFunction() {
    document.getElementById("demo").classList.toggle("w3-show");
}
</script>

</header>
<script>
function myFunction() {
    document.getElementById("demo").classList.toggle("w3-show");
}
</script>
<div class="w3-center">
 <center><span id="get" class="w3-xxlarge w3-center"><strong>Get In Touch With <br>PREVAILING Computers</strong></span></center><br>
<span id="toch" class="w3-text-grey w3-xlarge"><strong>Feedback, Proposals, Inquiries, Sales, Integrations, etc</strong></span>
</div>

<br><br><br><div class="w3-row-padding w3-border-top">
  
  <div class="w3-col l6 m8 s12 ">



<?php if(isset($smsg)){ ?><script type="text/javascript"> alert('<?php echo $smsg; ?> ') ;
</script>
 <?php } ?>

<?php if(isset($fmsg)){ ?><script type="text/javascript"> alert('<?php echo $fmsg; ?> ') ;
</script>
 <?php } ?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data" class=" logform w3-container w3-right ">

<br><br>

<p>      <label class="w3-label w3-text-black ">First Name</label>
<input class="w3-input w3-border w3-round" type="text" name="firstname"  required>
</p>

<p>      <label class="w3-label w3-text-black ">Last Name</label>
<input class="w3-input w3-border w3-round" type="text" name="lastname"  required>
</p>

<p>      <label class="w3-label w3-text-black">Your Email</label>
<input class="w3-input w3-border w3-round" type="email" name="mail"  required>
</p>


<p>      <label class="w3-label w3-text-black">Phone Number</label>
<input class="w3-input w3-border w3-round" type="text" name="phone"  required>
</p>

<p >     <label class="w3-label w3-text-black">Message</label>
<textarea class="w3-input w3-border w3-round" rows="8" cols=""  name="message" required > </textarea> 
 
</p>



<p class="w3-margin-top">      
<input type="submit" name="send" value="SUBMIT" class="w3-round w3-card-2 w3-center w3-btn-block w3-btn w3-center w3-theme-d3r">
 </p>
</form>
</div>
<div class="w3-col s12 l4 m4 margin w3-left">
  <br><br><br>
  <h4>Head Office:</h4>
  <p><strong>Prevailingcomputers.com</strong>
    <br>28/30 Ohafia Street, 
    <br>Umuahia,
   <br> Abia State.,
    Nigeria.
  </p>
  <p><strong>Phone & Email:</strong>
    <br><br><strong>Enquiries</strong>
    <br>+234 80 556 818 43
   <br>  <span class="w3-text-themer"><a href="#">prevailingcomputers@gmail.com</a></span>
  </p>
   <p><strong>Technical support</strong>
    <br>+234 80 643 057 60
      <br> <span class="w3-text-themer" ><a href="">support@prevailingcomputers.com</a></span>
  </p>
   <p><strong>Opening Hours:</strong>
    <br><br><strong>Days of the week</strong>
    <br>Monday - Sarturday
  </p>
  <p><strong>Opening Time</strong>
    <br>8:00am
  </p>
  <p><strong>Closing Time</strong>
    <br>6:00pm
 
  </p>


</div>
</div>
<br><br><br>


<!-- The footer section starts here -->
<div class="jag  w3-theme-l5g w3-border-top" >
    
<footer >


    <div class="cav">
        <h3><strong>Get STARTED</strong></h3>

         Visit our office today<br>
and have access to register for diverse<br> computer skill trainings.<br>
Registration is easy and takes less than a minute.<br><br>
<a style="text-decoration: none;" href="contact.php"><button class="w3-input w3-theme-d3r w3-round w3-border w3-deep-orange w3-text-black" ><strong>CONTACT US!</strong></button> </a><br>
</div>


<hr class="w3-border-top"/>

    


    </footer>
    <div class="low w3-row w3-white">
        <div class="w3-quarter prod  w3-thee-l4g"> <h5><strong>PRODUCT</strong></h5>

<a href="programs.php">Our Pricing</a><br>
<a href="#">Prevailing computer Updates</a><br>
<a href="#">Affiliate Program</a>
</div>
        <div class="w3-quarter prod w3-teme-l2g"> <h5><strong>COMPANY</strong></h5>
          <a href="about.php">  About Us</a><br>
<a href="#">Brand Assets</a><br>
<a href="#">Affiliate Policy
Terms of Service</a><br>
</div>
        <div class="w3-quarter prod w3-thee-l4g"> <h5><strong>KEY FEATURES</strong></h5>
       <a href="#"> Delivery Report</a><br>
<a href="#">Ultra Fast Delivery</a><br>
<a href="#">Premium Support</a></div>
        <div class="w3-quarter prod w3-thme-l2g"> <h5><strong>SUPPORT</strong></h5>
        080 556 818 43 (Help Desk)<br>
080 556 818 43
 (Technical)<br>
8am - 6pm (Mon - Sat)<br>
support@prevaingcomputers.com</div>


    </div>

    <div class="dat w3-theme-l4g w3-border-top">
    <p class=""> <img id="copy" class="w3-circle" src="logo.jpg" alt="prevailing computers" height="50px" width="50px">
     <span id="face"  class="mag" ><i class="fa-brands fa-facebook-f w3-text-white w3-indigo w3-padding-small w3-round "></i> <i class="fa-brands fa-twitter w3-text-white w3-blue w3-round w3-padding-small"></i></span> </p>
    
    <br>
    

    <p  id=""  style="" class="rig   w3-text-dark-grey">2004-<?php echo date("Y");?> &#169; prevailingcomputers.com is a service of Prevailing Computers Training Institute Ltd. All rights reserved.
  </p>
   </div>
   </div>
   


<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>


</body>
</html>