<?php
require_once("db_config.php");



if(!empty($_POST["name"])) {
  
      $result = $conn->query("SELECT count(*) FROM applicant WHERE name='" . $_POST["name"] . "'");
   $row = $result->fetch_row();
  $user_count = $row[0];
  if($user_count>0) {
      echo '<img src="images/tick.png">';
  }else{
      echo '<img src="images/tick.png">';
  }
  
}
else{
	echo " Please Provide Your Name...";
}
?>