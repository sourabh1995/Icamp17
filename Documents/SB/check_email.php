<?php
require_once("db_config.php");



if(!empty($_POST["email"])) {
  
  if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
  echo "Invalid Email Id";
}else
{
	$result = $conn->query("SELECT email FROM applicant WHERE email='" . $_POST["email"] . "'");
	$data = $result->num_rows;
	if($data>0){
		echo "Email Id Already Taken!!!";
	}else{
		echo '<img src="images/tick.png">';
	}
}

  
}
else{
	echo "Please fill Email!!!";
}
?>