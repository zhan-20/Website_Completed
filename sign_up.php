<!DOCTYPE html>
<html>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="./sign_up.css">
<head>
</head>
<body>
    <div class="background1 faded chapel-background"></div>
        <div class="background2">
            <div class="form-style-10">
    <form id="x" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<hr>
<div class="first">
    <div class="section">
        <label for="email"><h1><span>Enter Your Email Address</span></h1></label>
</div>
<div class="section">
        <input id="email" type="text" placeholder="Enter Email" name="email" required>
</div>
<div class="section">
        <input type="submit" class="register" name="login_user" method="post">
</div>
</div>
        <hr>
</form>
</div>
<p id="x1">Once you enter your email address you will be redirected to the home page and the system will send a link to your email address.</p>
<p id="x0"> Please open that email, click on the link to finish your registration</p>
<p id="x2">If you have any questions, please email peddiehacks@gmail.com.</p>
    </div>
</body>
</html>
<?php
session_start();
global $emailuser;
if (isset($_POST['email'])) {
$emailuser=$_POST['email'];
$_SESSION['email']=$emailuser;
    require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

$mail=new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                 // Specify main and backup server
$mail->Port = 587;                                    // Set the SMTP port
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'peddiehacks@gmail.com';                // SMTP username
$mail->Password = 'peddiecsclub';                  // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->From = 'peddiehacks@gmail.com';
$mail->FromName = 'Peddie School CompSci Club';
$mail->AddAddress($emailuser);  // Add a recipient            

$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Body=@"Email sent from Peddie School Computer Science Club "."at ".date("d/m/y H:i", time())."<br />
         <hr />"."Thank you for your interest in Peddie School Hackathon 2020! To
      finish your registration, please click on the following link and verify your email account."."<a href='http://localhost/registration.php' action>Finish Registration (account info confirmation)<a>"."<hr />";

if(!$mail->Send()) {
   $ss=$mail->ErrorInfo;
   echo "<script type='text/javascript'>alert('Mail could not be sent.'+'$ss'+'Probably incorrect email address?')</script>";
   exit;
}
echo "<script type='text/javascript'>alert('Message has been sent')</script>";
echo "<script type='text/javascript'>window.location.replace('./index.html');</script>";
die();
}
?>