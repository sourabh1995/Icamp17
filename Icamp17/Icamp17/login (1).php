<?php
/*require_once("connect.php");
if(isset($_COOKIE['username'])&&isset($_COOKIE['password']))
{
$sql="SELECT * FROM student";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
{
if($row["email"]==$_COOKIE['username'] && $row["password"]==$_COOKIE['password'])
{header("location: dashboard.php");
break;
}
}}
*/
?>
<!-- Doctype html-->
<html>
<head>
  <title>Login</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/navbar.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
</head>
</body>

<!-- navbar-->
<header role="banner" id="fh5co-header">
    <div class="fluid-container">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <!-- Mobile Toggle Menu Button -->
          <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>

          <a class="navbar-brand" href="index.html"><img src="icamp.png" height="50px" width="65px"></a>
          <a class="navbar-brand" href="">Internship Camp'17</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li ><a href="http://interncamp.ecell.org.in" data-nav-section="home"><span>Home</span></a></li>
            
            <li class="active"><a href="login%20(1).php"><span>Student</span></a></li>
            
            
            <li><a href="start-reg.php">Startup</a></li>
            <li><a href="#"><span>FAQ</span></a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <br><br>
<!-- Login-->
<div class="container">
  <div class="row">
    <div class="wrap-login col-md-4 col-md-offset-4">
    
      <h3 style="margin-bottom: 25px">Welcome. Please login.</h3>
      <form action="log-in_submit.php" method="post">
        <div class="form-group">

          <input type="text" class="form-control" id="InputEmail1" placeholder="Email" name="username">
        </div>
        <div class="form-group">

          <input type="password" class="form-control" id="InputPassword" placeholder="Password" name="password">
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" name="remember"> Stay signed in
          </label>
        </div>
        <input type="submit" class="btn btn-lg btn-block" name="submit" value="Take me to my dashboard!">
        <!--Take me to my dashboard!</button>-->
        <div class="cta"><a href="ForgetPassword.html"><strong>Forgot password?</strong></a></div><br>
      </form>
<div class=""><a href="stu-reg.php"><strong> Create Account.</strong></a></div><br>
    </div>

  </div>
</div>
<!--<?php
/*require_once("connect.php");
if(isset($_POST["submit"]))
{
$name=$_POST["username"];
$password=$_POST["password"];
$sql="SELECT * FROM student";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
{
if($row["email"]==$name && $row["password"]==$password)
{
if(isset($_POST['remember']))
{
setcookie('username',$name,time()+60*60*24*365,'/');
setcookie('password',$password,time()+60*60*24*365,'/');
}
else
{
setcookie('username',$name,false,'/');
setcookie('password',$password,false,'/');
}
header("location: dashboard.php");
break;
}
else
{
echo '<script type="text/javascript">alert("password or username not correct")</script>';
//include "login (1).php";
}
}
}*/
?>
-->
<br><br>
<div id="fh5co-footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-md-4 to-animate">
          <h3 class="section-title">About Us</h3>
          <p>Imagine | Innovate | Implement</p>
          <p class="copy-right">&copy;  Copyright 2017. KIIT E-Cell, KIIT University <br>All Rights Reserved. <br>
            Designed by <a href="#" target="_blank">KIIT E-Cell Web Developer</a>
            
          </p>
        </div>

        <div class="col-md-4 to-animate">
          <h3 class="section-title">Our Address</h3>
          <ul class="contact-info">
            <li><i class="icon-map-marker"></i>KIIT Entrepreneurship Cell</li>
            <li><i class="icon-phone"></i>+91 9583785500</li>
            <li><i class="icon-envelope"></i><a href="#">info@ecell.org.in</a></li>
            <li><i class="icon-globe2"></i><a href="#">www.ecell.org.in</a></li>
          </ul>
          <h3 class="section-title">Connect with Us</h3>
          <ul class="social-media">
            <li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
            <li><a href="#" class="twitter"><i class="icon-twitter"></i></a></li>
            <li><a href="#" class="dribbble"><i class="icon-dribbble"></i></a></li>
            <li><a href="#" class="github"><i class="icon-github-alt"></i></a></li>
          </ul>
        </div>
        <div class="col-md-4 to-animate">
          <h3 class="section-title">Drop us a line</h3>
          <form class="contact-form">
            <div class="form-group">
              <label for="name" class="sr-only">Name</label>
              <input type="name" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="message" class="sr-only">Message</label>
              <textarea class="form-control" id="message" rows="7" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Send Message">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
