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
if (!isset($_POST['save']) || $_POST['save'] != 'contact' || !isset($_POST['contact_name'])|| !isset($_POST['contact_email'])|| !isset($_POST['contact_phone'])|| !isset($_POST['contact_message'])) {
    header('Location: contact.php'); exit;
}
// get the posted data

$name = mysql_real_escape_string($_POST['contact_name']);
$email_address = mysql_real_escape_string($_POST['contact_email']);
$phone = mysql_real_escape_string($_POST['contact_phone']);
$message = mysql_real_escape_string($_POST['contact_message']);
	
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
elseif (empty($message))
    $error = 'You must enter a message.';
		
// check if an error was found - if there was, send the user back to the form
if (isset($error)) {
    header('Location: contact.php?e='.urlencode($error)); exit;
}

//TODO MAIL + DB STORE

// $headers = "From: $email_address\r\n"; 
// $headers .= "Reply-To: $email_address\r\n";

// // write the email content
// $email_content = "Name: $name\n";
// $email_content .= "Email Address: $email_address\n";
// $email_content .= "Phone Number: $phone\n";
// $email_content .= "Message:\n\n$message";

$query = "INSERT INTO `contactus`(`id`, `name`, `email`, `cell`, `message`) VALUES (NULL,'".$name."','".$email_address."','".$phone."','".$message."')";
echo $query;
$sql = mysql_query($query) or die ('Error updating database: '.mysql_error());  
	
// // send the email
// //ENTER YOUR INFORMATION BELOW FOR THE FORM TO WORK!
$content = "<p>Thank You for writing to us. We will get back to you shortly.</p>";
//mail ('YOUR-EMAIL-ADDRESS@YOUR-DOMAIN.com', 'YOUR WEBSITE NAME - Contact Form Submission', $email_content, $headers);
sendMail($email_address," Thank You",$name,$content);
//sendMail($toEmail,$sub,$addressTo,$content)

	
// send the user back to the form
header('Location: contact.php?s='.urlencode('Thank you for your message.')); exit;
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49737929-1', 'interestship.com');
  ga('send', 'pageview');
</script>