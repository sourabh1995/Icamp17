<?php
require_once("connect.php");
require_once 'mailchimp/src/Mandrill.php';
$name=$_POST["student_name"];
$univ_name=$_POST["univ"];
$contact=$_POST["phone"];
$univ_roll=$_POST['roll'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$email=$_POST['email'];
$password=base64_encode($_POST['password']);
$sql="SELECT * FROM student where email='$email'";
$result=$conn->query($sql);
$cnt = mysqli_num_rows($result);
if($cnt==0){
//$db=@mysql_select_db("ecell_i_camp",$con);
if (isset($_POST['submit'])) {
if(!empty($name)&&!empty($password))
{
$sql_insert="INSERT INTO student (Id,Name,Contact,Univ_name,Univ_roll,Branch,Year,email,Verified,password) VALUES (NULL,'$name','$contact','$univ_name','$univ_roll','$branch','$year','$email','0','$password')";
if($conn->query($sql_insert))
{
//$_SESSION["loged_in"]=true;
//header('Location:student-payment');
/*if(empty($email)){echo "email cannot be empty";}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Your email address is not valid.";
    }
else
{
$query="SELECT Id FROM student WHERE email='$email'AND Verified='1'";
$result=$conn->query($query);
if($row=$result->fetch_assoc())
{
echo("Your mail is already activated");
}
else
{
$query="SELECT Id FROM student WHERE email='$email'AND Verified='0'";
$result=$conn->query($query);
if($row=$result->fetch_assoc())
{
//create resend
echo("Your mail is already in the system not ativated");
//}
//else
//{
//$verification_link="http://localhost/E-CELL%20INTERNSHIP%20CAMP/login%20(1).html";
//$msg="Hi ".$name.",<br><br>Please click on the link below to activate your account<br><br>
//<a href='http://localhost/E-CELL%20INTERNSHIP%20CAMP/activate.php'target='blank'>Verify</a><br><br>";
$msg="Hi";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
mail($email,"Activate",$msg,$headers);
//}
}

}
*/
echo '<script type="text/javascript">alert("You have sucessfully signed up. Kindly check your mail.")</script>';  
$token='http://interncamp.ecell.org.in/Icamp17/confirmmail.php?email='.$email.'&pass='.$password;
//send confirmation mail with link $token
    $mandrill = new Mandrill('rXghWKrbBAE4uqJ-EvzDtg');
 
$message = new stdClass();
$message->html = "Greetings from KIIT Entrepreneurship Cell, KIIT University. <br>

Thank you for registering for '<b>Internship Camp 2017</b>'<br>

You will receive a few another emails , with further guidance to be followed. <br>

The venue, timings, and other details for the camp will be notified soon so please check your registered email id regularly. <br>

We look forward to your presence at the Internship Camp 2017.<br>  ";
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
 //////////do alert with }bootstrap
echo '<script type="text/javascript">
           window.location = "login (1).php"
      </script>';
}
else
{
//include 'sign_up.php';
header("location: login (1).php");
}
}
else{

echo '<script type="text/javascript">
           window.location = "login (1).php"
      </script>';
}

}
}
else
{
	echo '<script type="text/javascript">alert("Email id is already registered!!")</script>';
	echo '<script type="text/javascript">
           window.location = "stu-reg.php"
      </script>';
}
?>

