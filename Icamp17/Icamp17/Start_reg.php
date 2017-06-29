<?php
	
	ini_set('display_errors',1);
	ini_set('display_startup_errors',1);
	error_reporting(-1);

	require_once ('connect.php');

	$name=$_POST["q1"];
	$website=$_POST["q2"];
	$mail=$_POST["q3"];
	$location=$_POST["q4"];
	$stipend_amt=$_POST["q5"];
	$description=$_POST["q6"];
	$skills=$_POST["q7"];
	$duration=$_POST["q8"];
	$contact=$_POST["q9"];

	if(isset($_POST['submit'])){
		$sql_insert="INSERT INTO startup (id,Name,website,email,Stipend,Location,Stipend_amt,Description,Skills,Duration,Contact) VALUES (NULL,'$name','$website','$mail','$location','$stipend','$description','$skills','$duration','$contact')";
		if($conn->query($sql_insert))
		{
			echo '<script type="text/javascript">alert("you have sucessfully signed up kindly check your mail")</script>';
		}   //////////do alert with bootstrap
		else
		{
		//include 'sign_up.php';
			echo '<script type="text/javascript">alert("you have failed to succesfully login")</script>';
		}
		}
		else
		{
			echo "not submited";
		}



?>
