<?php
$flag=0;
require_once("connect.php");
if(isset($_POST["submit"]))
{
unset($_POST["submit"]);
$name=$_POST["username"];
$password=$_POST["password"];

$sql="SELECT * FROM student";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
{
if($row["email"]==$name && base64_decode($row["password"])==$password)
{
if(isset($_POST['remember']))
{
setcookie("username",$name,time()+60*60*24*365,'/');
setcookie("password",$password,time()+60*60*24*365,'/');
}
else
{
setcookie("username",$name,false,'/');
setcookie("password",$password,false,'/');
}
header("location: dashboard.php");
break;
$flag=1;
}
}


if($flag!=1)
{
echo"<script type='text/javascript'>alert('Wrong username or password')</script>";
echo '<script type="text/javascript">
           window.location = "login (1).php"
      </script>';

/*echo "<script type='text/javascript'> 
        alert('wrong username or password');
        window.location.replace(\'http://localhost/E-CELL%20INTERNSHIP%20CAMP/login%20(1).php');
    </script>";*/

}
}
else
{
echo "not submited";}
?>

