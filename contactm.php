<?php
require_once('config.php');
if(isset($_POST['message']) || isset($_POST['fullname']) || isset($_POST['email'])) {
	$message = mysql_real_escape_string($_POST['message']);
	$fullname = mysql_real_escape_string($_POST['fullname']);
	$email = mysql_real_escape_string($_POST['email']);
	$searchEmailAt = strpos($email, '@');
	$searchEmailDot = strpos($email, '.');
	if(!$fullname || !$message) {
		header("Location: contact.php?type=error");
	} elseif ($searchEmailAt == 0) {
		header("Location: contact.php?type=error");
	} elseif ($searchEmailDot == 0) {
		header("Location: contact.php?type=error");
	} else {
		date_default_timezone_set('Asia/Manila');
		$date = date('YmdHis');
		$read_e = 0;
		$date_added = date('F d Y - h:i:s A');
		$emailMessage = nl2br($message);
		$emailSubject = "Jfx-Design Contact Form";
		$webmaster = 'juvar.abrera2@gmail.com';
		$emailContent = 'From: '.$fullname.' <'.$email.'><br><br>'.$message;
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From: ".$fullname." <".$email.">\r\n"; 
		mail($webmaster, $emailSubject, $emailContent, $headers);
		header("Location: contact.php?type=success");
	}
}
?>