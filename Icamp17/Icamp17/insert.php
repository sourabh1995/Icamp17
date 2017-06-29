<?php
require_once("connect.php");
$name=$_POST["student_name"];
$univ_name=$_POST['univ'];
$univ_roll=$_POST['roll'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$email=$_POST['email'];
$password=$_POST['password'];
//$db=@mysql_select_db("ecell_i_camp",$con);
$sql_insert="INSERT INTO student (id,Name,Univ_name,Univ_roll,Branch,Year,email,password) VALUES (NULL,'$name','$univ_name','$univ_roll','$branch','$year','$email','$password')";
if($conn->query($sql_insert))
{
$_SESSION["loged_in"]=true;
header('Location:student-payment');
echo '<script type="text/javascript">alert("you have sucessfully signed up")</script>';
}
else
{
//include 'sign_up.php';
echo '<script type="text/javascript">alert("you have failed to succesfully login")</script>';
}
if

?>
