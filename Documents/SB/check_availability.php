<?php
require_once("db_config.php");



if(!empty($_POST["username"])) {
  $result = $conn->query("SELECT count(*) FROM applicant WHERE user_name='" . $_POST["username"] . "'");
   $row = $result->fetch_row();
  $user_count = $row[0];
  $length= strlen($_POST["username"]);
  if($length>4){
  if($user_count>0) {
      echo '<STRONG>' . $_POST["username"] . '</STRONG> is Available. Please Select another Username';
  }else{
      echo '<img src="images/tick.png">';
  }
}
else{
	echo '<strong><I>Too Short </I></strong>';
}
}
else{
	echo "Please fill Username!!!";
}
?>