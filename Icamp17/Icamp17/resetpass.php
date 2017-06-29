<?php
require_once("connect.php");
if (isset($_POST['submit'])){
$email = $_POST['email'];
$pass=base64_encode($_POST["Password"]);
echo '<script type="text/javascript">alert('.$email.')</script>';
echo '<script type="text/javascript">alert('.$pass.')</script>';
$query = "UPDATE student SET password = '$pass' WHERE email='$email'";
if($conn->query($query)){
	echo '<script type="text/javascript">alert("Password Updated Successfully")</script>';
	echo '<script type="text/javascript">
           window.location = "login (1).php"
      </script>';
	exit();
}
else{
	echo '<script type="text/javascript">alert("Server Error")</script>';
	echo '<script type="text/javascript">
           window.location = "login (1).php"
      </script>';
}
}
?>