<? ob_start(); ?>
<?php 
session_start();
//Other php files
include"refs/conn.php"; 
include"refs/common.php";
//include"refs/session.php";  

?>
<?php

// check for form submission - if it doesn't exist then send back to contact form
if (!isset($_POST['save']) || $_POST['save'] != 'contact' || !isset($_POST['quick_reg_name'])|| !isset($_POST['quick_reg_email'])|| !isset($_POST['quick_reg_phone'])) {
    header('Location: index.php'); exit;
}


// get the posted data
$colleg = mysql_real_escape_string($_POST['quick_reg_college']);
$course = mysql_real_escape_string($_POST['quick_reg_course']);
$semester = mysql_real_escape_string($_POST['quick_reg_semester']);
$quick_reg_projects = "";



if(isset($_POST['quick_reg_intern']))
{

  $quick_reg_intern = mysql_real_escape_string($_POST['quick_reg_intern']);
}
if(isset($_POST['quick_reg_projects']))
{

  $quick_reg_projects = mysql_real_escape_string($_POST['quick_reg_projects']);
}
if(isset($_POST['projectselected']))
{

  $quick_reg_projects .= "|".$_POST['projectselected'];
}


$name = mysql_real_escape_string($_POST['quick_reg_name']);
$email_address = mysql_real_escape_string($_POST['quick_reg_email']);
$phone = mysql_real_escape_string($_POST['quick_reg_phone']);
$message = "null";//mysql_real_escape_string($_POST['contact_message']);
	
// check that a name was entered
if (empty($name))
    $error = 'You must enter your name.';
// check that an email address was entered
elseif (empty($email_address)) 
    $error = 'You must enter your email address.';
// check for a valid email address
elseif (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email_address))
    $error = 'You must enter a valid email address.';
// check that a phone number was entered
if (empty($phone))
    $error = 'You must enter your phone number.';
// check that a message was entered

		
// check if an error was found - if there was, send the user back to the form
if (isset($error)) {
    //header('Location: index.php?e='.urlencode($error)); exit;
}

//TODO MAIL + DB STORE

// $headers = "From: $email_address\r\n"; 
// $headers .= "Reply-To: $email_address\r\n";

// // write the email content
// $email_content = "Name: $name\n";
// $email_content .= "Email Address: $email_address\n";
// $email_content .= "Phone Number: $phone\n";
// $email_content .= "Message:\n\n$message";

$query = "INSERT INTO `quickreg`(`id`, `name`, `email`, `cell`, `message`,`college`,`course`, `semester`, `internship`, `project`) VALUES (NULL,'".$name."','".$email_address."','".$phone."','".$message."','".$colleg."','".$course."','".$semester."','".$quick_reg_intern."','".$quick_reg_projects."')";
//echo $query;
$sql = mysql_query($query) or die ('Error updating database: '.mysql_error());  

// // send the email
// //ENTER YOUR INFORMATION BELOW FOR THE FORM TO WORK!
$content = "<p>Thank You for registering. We will get back to you shortly. With details regarding internships</p>";
//mail ('YOUR-EMAIL-ADDRESS@YOUR-DOMAIN.com', 'YOUR WEBSITE NAME - Contact Form Submission', $email_content, $headers);
sendMail($email_address," Thank You",$name,$content);

//$content = "<p>Thank You for registering. We will get back to you shortly. With details regarding internships</p>";
sendMail("team@interestship.com"," New Quick Registrtion",$name,$query);
//sendMail($toEmail,$sub,$addressTo,$content)

	
// send the user back to the form
header('Location: index.php?s='.urlencode('Thank you for registering.')); exit;
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49737929-1', 'interestship.com');
  ga('send', 'pageview');
</script>