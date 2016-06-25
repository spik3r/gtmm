<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    if (($name=="")||($email=="")||($message=="")){
		echo "All fields are required";

	}else{
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
		mail("kaiftait@gmail.com", $subject, $message, $from);
		echo "Email sent!";
    }
?>