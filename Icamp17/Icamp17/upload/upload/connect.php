<?php
$server="localhost";
$user="root";
$password="";
$db="ecell_i_camp";
$conn=new mysqli($server,$user,$password,$db);
if($conn->connect_error)
{
die("connection error");
}
?>
