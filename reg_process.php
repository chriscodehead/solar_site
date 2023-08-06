<?php require_once('library.php'); ?>
<?php require_once('lib/basic-functions.php'); ?>
<?php require_once('emails_lib.php'); ?>
<?php

if (isset($_POST['cotactmail'])) {
	$name = $_POST['name'];
	$email = $_POST['cotactmail'];
	$phone = $_POST['phone'];
	$subject = ucfirst(strtolower($name)) . ' contacted you!';
	$message = $_POST['message'];
	if (!empty($_POST['cotactmail']) && !empty($_POST['name']) && !empty($_POST['message']) && !empty($_POST['phone'])) {
		print $email_call->contactUsMail($name, $email, $subject, $message, $phone);
	} else {
		print  'Please fill all fields';
	}
}
?>