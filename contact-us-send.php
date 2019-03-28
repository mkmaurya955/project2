<?php
if(isset($_POST['submit'])){
	$msg='Name: ' .$_POST['name'] ."\n"
		.'Email: ' .$_POST['email'] ."\n"
		.'Comment: ' .$_POST['comment'];
	mail('mkmaurya955@gmail.com', 'Contact US', $msg);
	header('location:contact-us-thank-you.php');
}else{
	header("location:contact.php");
	exit(0);
}

?>