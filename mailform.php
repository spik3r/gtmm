<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'Cc: kaiftait@gmail.com' . "\r\n";
    if (($name=="")||($email=="")||($message=="")){
		echo "All fields are required";

	}else{
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Contact form enquiry";
		mail("gt.mm@hotmail.com", $subject, $message, $from, $headers);
		echo "Email sent!";
    }
?>