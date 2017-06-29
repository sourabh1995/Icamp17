<?php include 'db_config.php' ;
    if(isset($_POST['submitMain']))
    {
        $name=htmlspecialchars($_POST['name']);
        $username=htmlspecialchars($_POST['username']);
        $email=htmlspecialchars($_POST['email']);
        $pass= htmlspecialchars($_POST['password']);
        $date=htmlspecialchars($_POST['date']);
        $phone=htmlspecialchars($_POST['phone']);
        $city=htmlspecialchars($_POST['city']);
        $state=htmlspecialchars($_POST['state']);
        $country=htmlspecialchars($_POST['country']);
        $doing=htmlspecialchars($_POST['doing']);
        $passion=htmlspecialchars($_POST['passion']);
        $gender=htmlspecialchars($_POST['gender']);

        $password= password_hash($pass, PASSWORD_BCRYPT, array('cost' => '10'));
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $msg = "<div class='alert alert-danger'>
                        <span class='glyphicon glyphicon-info-sign'></span> &nbsp;''Your email is not valid!'</div>";
            }
            else{
                $result = $conn->query("SELECT * FROM applicant WHERE email='$email'");
                $result1 = $conn->query("SELECT * FROM applicant WHERE user_name='$username'");
               
                $data = $result->num_rows;
                $data1 = $result1->num_rows;
                
                if(($data)==0){
                    if($data1==0)
                    {
                    $query="INSERT INTO applicant(name,user_name,email,password,dob,phoneno,city,state,country,doing,passion,gender) VALUES('$name','$username','$email','$password','$date','$phone','$city','$state','$country','$doing','$passion','$gender')";
                  if($conn->query($query)){
                        $msg =  "<div class='alert alert-success'>
                        <span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
                    </div>";

                    }
                    else{
                        $msg = "<div class='alert alert-danger'>
                        <span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
                    </div>";
                    }
                    

                }
                else{
                    $msg = "<div class='alert alert-danger'>
                    <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Username Already taken !!!
                </div>";

                }
            }
               
                else
                {
                    $msg = "<div class='alert alert-danger'>
                    <span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
                </div>";
                }
            }

                }
                $conn->close();
?>
<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simply Bhand | Coming Soon</title>
    <!--Core CSS -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
    <link href="navbar.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="clock_assets/flipclock.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

      <style type="text/css">
          body{
            background-color: #117358;

        }
        .panel{
            background-color: #e1bee7;
        }
        .middle{
            margin-left: 5%;
        }
      </style>
 </head>
   <body>
   
   <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#"><img src="images/Logo.png" style="max-width:80px; margin-top: -25px;"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li> 
        <li><a href="#">Page 3</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<br><br>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-7">
<div class="panel-group">

<div class="contact_form">
 <div class="panel panel-default">
 <div class="panel-heading">
<h1>User Registration Form</h1>
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6&appId=1033281556756308";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="https://www.facebook.com/SimplyBhand/?fref=ts" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

        <div id="show_contact_msg"></div>
          <!-- Contact Form Start -->
          <div class="card card-block">
          <div class="middle">
          <table>
            <form method="post" id="register_form" action="">
        <?php
        if(isset($msg)){
            echo $msg;
        }
        ?>
        <tr><td width="60%">
        <img src="https://maxcdn.icons8.com/Color/PNG/24/Users/user-24.png" title="User" width="24"> &nbsp;Name:
            <input type="text" size="60" id="name" name="name" class="form-control contact_input_box1 wow fadeInUp" placeholder="Name" onBlur="checkName()" required/></td><td width="40%"> &nbsp;<span id="name-available"></span><span><img src="images/LoaderIcon.gif" id="loaderIcon1" style="display:none" /></span></td></tr>
         <tr><td width="60%"><img src="https://maxcdn.icons8.com/Color/PNG/24/Users/life_cycle_male-24.png" title="Life Cycle" width="24"> &nbsp;Username:<input type="text" size="60" id="username" name="username" class="form-control contact_input_box1 wow fadeInUp" placeholder="User Name" onBlur="checkAvailability()" required/></td><td width="40%"> &nbsp;<span id="user-availability-status"></span> <span><img src="images/LoaderIcon.gif" id="loaderIcon" style="display:none" /></span></td></tr>
            
        <tr><td width="60%"><img src="https://maxcdn.icons8.com/Color/PNG/24/Very_Basic/address_book-24.png" title="Address Book" width="24"> &nbsp; E-Mail:<input type="email" size="60" id="email" name="email" class="form-control contact_input_box1 wow fadeInUp" placeholder="E-mail" onBlur="checkEmail()" required/></td><td width="40%"> &nbsp;<span id="email-available"></span><span><img src="images/LoaderIcon.gif" id="loaderIcon2" style="display:none" /></span></td></tr>
        <tr><td width="60%"><img src="https://maxcdn.icons8.com/Color/PNG/24/Security/password-24.png" title="Password" width="24"> &nbsp; Password:<input type="password" id="password" name="password" class="form-control contact_input_box1 wow fadeInUp" placeholder="Password" required/></td><td width="40%"> &nbsp; <span id="result"></span></td></tr>
        <tr><td><h3><img src="https://maxcdn.icons8.com/Color/PNG/24/Users/gender_neutral_user-24.png" title="Gender Neutral User" width="24">Gender</h3></td></tr>
            <tr><td>
            <label class="radio-inline">
                <input type="radio" name="gender" id="inlineRadio1" value="Male"> Male &nbsp;&nbsp;&nbsp;&nbsp;
            </label>
            <label class="radio-inline">
                <input type="radio" name="gender" id="inlineRadio2" value="Female"> Female  &nbsp;&nbsp;&nbsp;&nbsp;
            </label>
            <label class="radio-inline">
                <input type="radio" name="gender" id="inlineRadio3" value="Others"> Transgender
            </label><br /></td></tr><br>
        <tr><td width="60%"><img src="https://maxcdn.icons8.com/Color/PNG/24/Time_And_Date/date_span-24.png" title="Date Span" width="24"> &nbsp;Date Of Birth:<input  type="text" placeholder="DateOfBirth"  id="example1" name="date" class="form-control contact_input_box1 wow fadeInUp" onBlur="checKDate()"><span id="dateresult"></span></td></tr><br>
        <tr><td width="60%"><img src="https://maxcdn.icons8.com/Color/PNG/24/Mobile/shake_phone-24.png" title="Shake Phone" width="24"> &nbsp; Phone No :<input type="number" id="contact_number" name="phone" class="form-control contact_input_box1 wow fadeInUp" placeholder="Phone No" required/></td></tr>
          <tr colspan = "2"><td>  <fieldset><h3><img src="https://maxcdn.icons8.com/Color/PNG/24/Maps/map_marker-24.png" title="Map Marker" width="24"> Knight From</h3></td></tr>
        <tr><td><input type="text" id="contact_city" name="city" class="form-control contact_input_box1 wow fadeInUp" placeholder="City" required/> </td></tr>
        <tr><td><input type="text" id="contact_number" name="state" class="form-control contact_input_box1 wow fadeInUp" placeholder="State" required/></td></tr>
        <tr><td><input type="text" id="contact_number" name="country" class="form-control contact_input_box1 wow fadeInUp" placeholder="Country" required/></td></tr>
         
            <tr colspan = "2"><td><img src="https://maxcdn.icons8.com/Color/PNG/24/Messaging/quote-24.png" title="Quote" width="24"> &nbsp;What you doin'?<textarea id="contact_text" name="doing" rows="5" cols="30" class="form-control contact_input_box1 wow fadeInUp" placeholder="What you doin'?" required></textarea></td></tr>
             <tr colspan = "2" ><td><img src="https://maxcdn.icons8.com/Color/PNG/24/Clothing/sun_glasses-24.png" title="Sun Glasses" width="24"> &nbsp;What's Your Bhand(Passion)?<textarea id="contact_text" name="passion" rows="5" cols="30" class="form-control contact_input_box1 wow fadeInUp" placeholder="What's Your Bhand(Passion)?" required></textarea></td></tr>
            
            <br><br>
            <tr colspan="2"><td><button type="submit" name="submitMain" class="btn btn-primary contact_button wow fadeInUp"> <i class="fa fa-send-o"></i>  Send message</button></td>
                </tr>
                </form>
                </table>
                </div>
                
                </div>                <!-- Contact Form End -->
       </div>
   </div>
</div>
</div>
</div>

</div>



<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

<script type="text/javascript">
function checkName() {
$("#loaderIcon1").show();
var name = $('#name').val();
var formurl = "check_name.php";
var data = {
    name:name
}
$.ajax({
url: formurl,
data: data,
type: "POST",
success:function(data){
$("#name-available").html(data);
$("#loaderIcon1").hide();
}
});
}
</script>


<script type="text/javascript">
$(document).ready(function() {
$("#username").keyup(function() {
$("#loaderIcon").show();
var username = $('#username').val();
var formurl = "check_availability.php";
var data = {
    username:username
}

$.ajax({
url: formurl,
data: data,
type: "POST",
success:function(data){

$("#user-availability-status").html(data);
$("#loaderIcon").hide();

}
});

});
});
</script>


<script type="text/javascript">
$(document).ready(function() {
$("#email").keyup(function() {
$("#loaderIcon2").show();
var email = $('#email').val();
var formurl = "check_email.php";
var data = {
    email:email
}
$.ajax({
url: formurl,
data: data,
type: "POST",
success:function(data){
$("#email-available").html(data);
$("#loaderIcon2").hide();
}
});
});
});
</script>


<script type="text/javascript">
$(document).ready(function()
{
    /*
        assigning keyup event to password field
        so everytime user type code will execute
    */

    $('#password').keyup(function()
    {
        $('#result').html(checkStrength($('#password').val()))
    })  
    
    /*
        checkStrength is function which will do the 
        main password strength checking for us
    */
    
    function checkStrength(password)
    {
        //initial strength
        var strength = 0

         if (password.length < 1) { 
            $('#result').removeClass()
            $('#result').addClass('empty')
            return '<strong>Password is required.</strong>' 
        }
        
        //if the password length is less than 6, return message.
        if (password.length < 6) { 
            $('#result').removeClass()
            $('#result').addClass('short')
            return '<strong>Too short</strong>' 
        }
        //length is ok, lets continue.
        
        //if length is 8 characters or more, increase strength value
        if (password.length > 7) strength += 1
        
        //if password contains both lower and uppercase characters, increase strength value
        if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/))  strength += 1
        
        //if it has numbers and characters, increase strength value
        if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/))  strength += 1 
        
        //if it has one special character, increase strength value
        if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/))  strength += 1
        
        //if it has two special characters, increase strength value
        if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
        
        //now we have calculated strength value, we can return messages
        
        //if value is less than 2
        if (strength < 2 )
            {
            $('#result').removeClass()
            $('#result').addClass('weak')
            return 'Weak'           
        }
        else if (strength == 2 )
        {
            $('#result').removeClass()
            $('#result').addClass('good')
            return 'Good'       
        }
        else
        {
            $('#result').removeClass()
            $('#result').addClass('strong')
            return 'Strong<span><img src="images/tick.png"></span>'
        }
    }
});
</script>
    <script src="bootstrap-datepicker.js"></script>
  <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#example1').datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            });
        </script>
        <script type="text/javascript">
            function checkDate(){
                var date= $('#example1').val();
                if(date.length < 1)
                {
                     $('#dateresult').removeClass()
            $('#dateresult').addClass('empty')
            return '<strong>Select Date Of Birth!!</strong>'
                }
                else
                {
                     $('#dateresult').removeClass()
            $('#dateresult').addClass('filled')
            return '<img src="images/tick.png"></span>'
                }

            }
        </script>

   </body>
   </html>

