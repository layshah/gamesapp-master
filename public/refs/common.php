<? ob_start(); ?>
<?php
function generateRandomString($date)
{
	# This particular code will generate a random string
	# that is 25 charicters long 25 comes from the number
	# that is in the for loop
	$str = "";
	$string = "abcdefghijklmnopqrstuvwxyz0123456789";
	for($i=0;$i<25;$i++){
	    $pos = rand(0,26);
	    $str .= $string{$pos};
	}
	return $str;
	# If you have a database you can save the string in 
	# there, and send the user an email with the code in
	# it they then can click a link or copy the code
	# and you can then verify that that is the correct email
	# or verify what ever you want to verify
}
function sendMail($toEmail,$sub,$addressTo,$content)
	{
		//$to = $toEmail; //deeppatelj@gmail.com";
	
	$subject = "Interestship - ".$sub;
	$body1 = "<p>Hi ".$addressTo;
	$body2 = "</p><p>".$content."</p><p>Regards, <br> Team Interestship </p>";
	$body = $body1.$body2;
	$headers = "From: team@interestship.com\r\n";
	$headers .= "Reply-To: team@interestship.com\r\n";
	$headers .= "Return-Path: team@interestship.com\r\n";
	$headers .= "X-Mailer: PHP5\n";
	$headers .= 'MIME-Version: 1.0' . "\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	//$toEmail .= $toEmail."; team@interestship.com"
	//echo $body;
	//echo $body;
	//function email($toEmail, $subject, $body, $headers)
	email($toEmail,$subject,$body,$headers);
	}
function verificationLinkEmail($toEmail, $addressTo , $vCode)
{
	//$to = $toEmail; //deeppatelj@gmail.com";
	$subject = "Interestship - Email Verificaiton";
	$body1 = "<p>Hi ".$addressTo;
	$body2 = "</p><p>Thank you for registering to Interestship. Please click on the following link to verify your email address. <a href='http://www.interestship.com/verify.php?email=".strrev($toEmail)."&vcode=".$vCode;
	$body3 = "'>Verification Link</a></p><p>Regards, <br> Team Interestship</p>";
	$body = $body1.$body2.$body3;
	$headers = "From: team@interestship.com\r\n";
	$headers .= "Reply-To: team@interestship.com\r\n";
	$headers .= "Return-Path: team@interestship.com\r\n";
	$headers .= "X-Mailer: PHP5\n";
	$headers .= 'MIME-Version: 1.0' . "\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	//echo $body;
	email($toEmail,$subject,$body,$headers);

}
function email($toEmail, $subject, $body, $headers)
{
	$to = $toEmail; //deeppatelj@gmail.com";
	//echo $toEmail;
	//echo $subject;
	//echo $body;
	//echo $headers;

	//$subject = "Interestship ".$subject;
	/*
	$body1 = "<p>Hello ".$addressTo;
	$body2 = "</p><p>Thank you for registering to Interestship. Please click on the following link to verify your email address. <a href='http://www.interestship.com/verify.php?email=1&code=".$vCode;
	$body3 = "'>Verification Link</a></p><p>Regards, <br> Team Interestship</p>";
	$body = $body1.$body2.$body3;
	
	$headers = "From: Team Interestship\r\n";
	$headers .= "Reply-To: team@interestship.com\r\n";
	$headers .= "Return-Path: team@interestship.com\r\n";
	$headers .= "X-Mailer: PHP5\n";
	$headers .= 'MIME-Version: 1.0' . "\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	*/
	mail($to,$subject,$body,$headers);
}
function CreateJSONfile_1($query,$filename)
{

	$sql=mysql_query($query); 

	//$response = array();
	//$posts = array();
	//$result=mysql_query($sql);
	while($row=mysql_fetch_array($sql)) 
	{ 
		$id=$row['id']; 
		$sid=$row['setid']; 
		$activity=$row['activity_name']; 
		$posts[] = array('id'=> $id, 'set'=> $sid, 'activity'=> $activity);
	} 

		$response['activities'] = $posts;

		$fp = fopen($filename.'json', 'w');
		fwrite($fp, json_encode($response));
		fclose($fp);
}
function CreateJSONfileString($query)
{

	$sql=mysql_query($query); 

	//$response = array();
	//$posts = array();
	//$result=mysql_query($sql);
	while($row=mysql_fetch_array($sql)) 
	{ 
		$id=$row['id']; 
		$sid=$row['setid']; 
		$activity=$row['activity_name']; 
		$posts[] = array('id'=> $id, 'set'=> $sid, 'activity'=> $activity);
	} 

		$response['activities'] = $posts;

		$fp = fopen($filename.'json', 'w');
		fwrite($fp, json_encode($response));
		fclose($fp);
}
?> 
