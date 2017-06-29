<?php
require_once("connect.php");
$company=$_POST["company"];
if(isset($_COOKIE['username'])&&isset($_COOKIE['password']))
{
$sql="DELETE FROM student_applied WHERE Applied1='".$company."' AND Email='".$_COOKIE["username"]."'";
if ($conn->query($sql) === TRUE) {
echo"<script type='text/javascript'>alert('Record deleted successfully')</script>";
    include "applied.php";
    //echo "Record deleted successfully";
}
 else {
   echo"<script type='text/javascript'>alert('Error deleting record:')</script>";
    include "applied.php";
   // echo "Error deleting record: "
}
}
?>



