<?php
require_once("connect.php");
require_once 'mailchimp/src/Mandrill.php';
$err_loc=$err_contact=$err_duration="";
$name=$_POST["q0"];
$website=$_POST["q1"];
$mail=$_POST["q2"];
$stipend=$_POST["q3"];

//$stipend_amt=$_POST["q7"];
$description=$_POST["q7"];
$skills=$_POST["q8"];
$duration=$_POST["q9"];
$contact=$_POST["q10"];
//echo $stipend_amt;
//echo $name;

if (isset($_POST['submit'])) {
	
	
	$result = mysqli_query($conn,"SELECT email FROM startup WHERE email='$mail'");
	$rw_cnt = mysqli_num_rows($result);
	
	if($rw_cnt==0){
if($stipend == 'stipend-y')
{
$stipend_amt=$_POST["q6"];
$location1 = $_POST["q5"];
echo '<script type="text/javascript">alert("'.$location1.'")</script>';
$sql_insert="INSERT INTO startup (id,Name,website,email,Stipend,Location,Stipend_amt,Description,Skills,Duration,Contact) VALUES (NULL,'$name','$website','$mail','Yes','$location1','$stipend_amt','$description','$skills','$duration','$contact')";
}
else
{
	$location=$_POST["q4"];
$sql_insert="INSERT INTO startup (id,Name,website,email,Stipend,Location,Description,Skills,Duration,Contact) VALUES (NULL,'$name','$website','$mail','No','$location','$description','$skills','$duration','$contact')";
}
if($conn->query($sql_insert))
{
	//mandrill mail here...

echo '<script type="text/javascript">alert("Thank You for registering. Check your mail for further information.")</script>';
$token='http://interncamp.ecell.org.in/Icamp17/startconfirm.php?email='.$mail.'&contact='.$contact;
//send confirmation mail with link $token
		$mandrill = new Mandrill('rXghWKrbBAE4uqJ-EvzDtg');
 
$message = new stdClass();
$message->html = "Greetings from KIIT Entrepreneurship Cell, KIIT University. <br>

Thank you for registering for '<b>Internship Camp 2017</b>' <br>

You will receive a few another emails over the next weeks, with further guidance to be followed.<br>
And you can expect our representative to contact you on the numbers and email address you have provided us with. <br>

The venue, timings, and other details for the camp will be notified soon. <br>

It is a pleasure having you on board with us and we look forward to your presence at the Internship Camp 2017. <br><br>";
$message->html .= 'Please <a href='.$token.' >click here</a> to activate your Internship Camp account.<br><br>Regards, 
KIIT Entrepreneurship Cell <br><br>  ';
$message->html .= "<br>";

$message->text = "text body";
$message->subject = "Confirm Email";
$message->from_email = "info@ecell.org.in";
$message->from_name  = "Internship Camp 2017";
$message->to = array(array("email" => $email));
$message->track_opens = true;

$response = $mandrill->messages->send($message);
echo '<script type="text/javascript">
           window.location = "index.php"
      </script>';


}   //////////do alert with bootstrap
else
{
//include 'sign_up.php';
echo '<script type="text/javascript">alert("Sorry!! Please register again. Server Error!!")</script>';
echo '<script type="text/javascript">
           window.location = "index.php"
      </script>';
}
}
else
{
	echo '<script type="text/javascript">alert("Email Already Registered..")</script>';
	echo '<script type="text/javascript">
           window.location = "index.php"
      </script>';
}
}
else
{
echo "not submited";}
?>

