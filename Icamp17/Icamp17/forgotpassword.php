<?php
require_once('connect.php');
require_once 'mailchimp/src/Mandrill.php';
if(empty($_POST['email1'])){
	echo '<script type="text/javascript">alert("Field Missing")</script>';
	echo '<script type="text/javascript">
           window.location = "ForgetPassword.php"
      </script>';
	exit();

}
$email=htmlspecialchars($_POST['email1']);
	$stmt = $conn->prepare("SELECT password from student WHERE email = ?");
	$stmt->bind_param('s',$email);
    $stmt->execute();
    $stmt->store_result();
	$stmt->bind_result($token);
    if(($stmt->num_rows)==0){
		echo '<script type="text/javascript">alert("Email not registered!!")</script>';
	echo '<script type="text/javascript">
           window.location = "stu-reg.php"
      </script>';
	}else{
		$stmt->fetch();
		echo '<script type="text/javascript">alert("Check Your Mail to reset your password")</script>';
	echo '<script type="text/javascript">
           window.location = "login (1).php"
      </script>';
		$token='http://interncamp.ecell.org.in/Icamp17/resetpassword.php?email='.$email.'&pass='.$pass;
		//send confirmation mail with link $token
		$mandrill = new Mandrill('rXghWKrbBAE4uqJ-EvzDtg');
 
$message = new stdClass();
$message->html = "Dear Participant <br><br>";
$message->html .= 'Please <a href='.$token.' >click here</a> to activate your Internship Camp account.<br>  ';
$message->html .= "<br>";

$message->text = "text body";
$message->subject = "Confirm Email";
$message->from_email = "info@ecell.org.in";
$message->from_name  = "Internship Camp 2017";
$message->to = array(array("email" => $email));
$message->track_opens = true;

$response = $mandrill->messages->send($message);
	}
$conn->close();
?>
