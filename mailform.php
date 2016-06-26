<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    if (($name=="")||($email=="")||($message=="")){
		echo "All fields are required";

	}else{
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Contact form enquiry";
		mail("gt.mm@hotmail.com", $subject, $message, $from);
		echo "Email sent!";
    }
?>