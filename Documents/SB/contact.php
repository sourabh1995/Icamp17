<?php

// Email Setting

//=======================================

$admin_email = "sourabh.akash0123@gmail.com";

$from_name   = "Simply Bhand";







if(isset($_POST['subscriberemail'])) {

    

	$subscriber_email = strip_tags($_POST['subscriberemail']);

	if (!filter_var($subscriber_email, FILTER_VALIDATE_EMAIL)) {

	echo "5";

	exit;

	}

	else

	{

	$to  	   	= $admin_email; 

	$subject 	= "Email Suscriber Information";

	$message	= "Thank You!!! Your registered email is $subscriber_email . We will notify as we launch";

	$message 		.= "Regards <br/> Simply Bhand Team <br />";

	

	$headers  	= "MIME-Version: 1.0\r\n";

	$headers	.= "Content-type: text/html; charset=iso-8859-1\r\n";

	$headers	.= "From:$from_name <$admin_email>";

	$headers	.= "Reply-To: $admin_email\r\n"."X-Mailer: PHP/".phpversion();

	

	$send 		= mail($to, $subject, $message, $headers);
	$send       = mail($subscriberemail, $subject, $message,$headers);

	echo "1";

	}

}







if(isset($_POST['useremail'])) {

	

	 $user_name 	= strip_tags($_POST['username']);

	 $user_email 	= strip_tags($_POST['useremail']);

	 $comment_text 	= strip_tags($_POST['commenttext']);

	

	if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {

	echo 5;

	exit;

	}

	else

	{

	$to  	   		= "$admin_email"; 

	$subject 		= "New Contact Information";

	$message		= "Thank You !!! $user_name <br/>";

	$message 		.= "<bold>We will soon contact you.</bold> <br/>";

	$message 		.= "Regards <br/> Simply Bhand Team <br />";

	$message1 		= "User Name : $user_name";

	$message1		.= "User Email : $user_email";

	$message1		.= "Comment : $comment_text";

	$headers  		= "MIME-Version: 1.0\r\n";

	$headers 		.= "Content-type: text/html; charset=iso-8859-1\r\n";

	$headers 		.= "From:$from_name<$admin_email>";

	$headers 		.= "Reply-To: $admin_email\r\n"."X-Mailer: PHP/".phpversion();

	$send1			= mail($user_email, $subject, $message, $headers);

	$send 			= mail($to, $subject, $message1, $headers);

	echo '1';	

}

}





?>