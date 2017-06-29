<?php
error_reporting(0);
$flag=0;
require_once("connect.php");
$company=$_POST["company"];
//$company=$_COOKIE['name']
$c=0;
if(!isset($_COOKIE['time'])&&($_COOKIE['time']+86400)<time())
{
if(isset($_COOKIE['username'])&&isset($_COOKIE['password']))
{
if(!empty($company))
{
$sql="SELECT * FROM student_applied";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
{
if($row["Email"]==$_COOKIE['username'])
{
$c=$c+1;
}
if($row["Email"]==$_COOKIE['username']&&$row["Applied1"]==$company)
$flag=1;
}
if($flag!=1)
{
if($c<4)
{
$mail=$_COOKIE['username'];
if(isset($_POST["apply"]))
{
unset($_POST["apply"]);
$sql_insert="INSERT INTO student_applied (id,Email,Applied1) VALUES (NULL,'$mail','$company')";
if($conn->query($sql_insert))
{
echo"<script type='text/javascript'>alert('You Have Applied to ".$company."')</script>";
include "dashboard.php";
//setcookie('applied',$company,false,'/');
}
else
{
echo "not inserted";
}
}
if($c==4){//$time = time();
setcookie('time',time(),false,'/');}
}
else
{
$mail=$_COOKIE['username'];
$sql_insert="INSERT INTO Time (time,Email) VALUES ('$time','$mail')";
if($conn->query($sql_insert))
{}
echo"<script type='text/javascript'>alert('You are not allowed to apply any more')</script>";
//echo "not allowed";
include"dashboard.php";
}
}
else
{
echo"<script type='text/javascript'>alert('you have already aplied')</script>";
//echo "not allowed";
include"dashboard.php";
}
}
if(isset($_POST["bookmark"]))
{
$sql_insert="INSERT INTO student_bookmark (id,Email,Bookmarked) VALUES (NULL,'$mail','$company')";
if($conn->query($sql_insert))
{
echo"<script type='text/javascript'>alert('You have Bookmarked ".$company."')</script>";
//echo "You are not allowed to apply any "
include "dashboard.php";
//setcookie('applied',$company,false,'/');
}
else
{
echo "not inserted";
}
}
}
else
{
header("location: login (1).php");}
}
else
{
header("location: dashboard.php");}
?>
