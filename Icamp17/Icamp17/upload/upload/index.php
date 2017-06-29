<?php include_once("connect.php");

if(isset($_COOKIE["username"]) || isset($_COOKIE["password"]))
{
  $email = $_COOKIE["username"];
  
  $sql="SELECT * FROM student WHERE email='$email'";
  $results=$conn->query($sql);
  $ro=$results->fetch_assoc();
  if($ro["Payment"]!=400)
  {
     header("location: payment/index.php?id=".$ro['id']."");
  }
  $query = "SELECT * FROM student_applied WHERE email='$email'";
$result1 = $conn->query($query);

$applied = mysqli_num_rows($result1);
$query = "SELECT * FROM student_bookmark WHERE email='$email'";
$result1 = $conn->query($query);

$bookmark = mysqli_num_rows($result1);
$query = "SELECT resume_uploaded FROM student WHERE email='$email'";
$result1 = $conn->query($query);
$row1 = $result1->fetch_assoc();

}
else{
  header("location: login (1).php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Internship Camp | Upload Resume</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style/navbar.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery.form.min.js"></script>

<script type="text/javascript">
$(document).ready(function() { 
	var options = { 
			target:   '#output',   // target element(s) to be updated with server response 
			beforeSubmit:  beforeSubmit,  // pre-submit callback 
			success:       afterSuccess,  // post-submit callback 
			uploadProgress: OnProgress, //upload progress callback 
			resetForm: true        // reset the form after successful submit 
		}; 
		
	 $('#MyUploadForm').submit(function() { 
			$(this).ajaxSubmit(options);  			
			// always return false to prevent standard browser submit and page navigation 
			return false; 
		}); 
		

//function after succesful file upload (when server response)
function afterSuccess()
{
	$('#submit-btn').show(); //hide submit button
	$('#loading-img').hide(); //hide submit button
	$('#progressbox').delay( 1000 ).fadeOut(); //hide progress bar

}

//function to check file size before uploading.
function beforeSubmit(){
    //check whether browser fully supports all File API
   if (window.File && window.FileReader && window.FileList && window.Blob)
	{
		
		if( !$('#FileInput').val()) //check empty input filed
		{
			$("#output").html("Are you kidding me?");
			return false
		}
		
		var fsize = $('#FileInput')[0].files[0].size; //get file size
		var ftype = $('#FileInput')[0].files[0].type; // get file type
		

		//allow file types 
		switch(ftype)
        {
            
			case 'application/x-zip-compressed':
			case 'application/pdf':
			case 'application/msword':
			
                break;
            default:
                $("#output").html("<b>"+ftype+"</b> Only Pdf and Doc file allowed!");
				return false
        }
		
		//Allowed file size is less than 5 MB (1048576)
		if(fsize>5242880) 
		{
			$("#output").html("<b>"+bytesToSize(fsize) +"</b> Too big file! <br />File is too big, it should be less than 5 MB.");
			return false
		}
				
		$('#submit-btn').hide(); //hide submit button
		$('#loading-img').show(); //hide submit button
		$("#output").html("");  
	}
	else
	{
		//Output error to older unsupported browsers that doesn't support HTML5 File API
		$("#output").html("Please upgrade your browser, because your current browser lacks some new features we need!");
		return false;
	}
}

//progress bar function
function OnProgress(event, position, total, percentComplete)
{
    //Progress bar
	$('#progressbox').show();
    $('#progressbar').width(percentComplete + '%') //update progressbar percent complete
    $('#statustxt').html(percentComplete + '%'); //update status text
    if(percentComplete>50)
        {
            $('#statustxt').css('color','#000'); //change status text to white after 50%
        }
}

//function to format bites bit.ly/19yoIPO
function bytesToSize(bytes) {
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Bytes';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
}

}); 

</script>
<link href="style/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- navbar-->
<header role="banner" id="fh5co-header">
    <div class="fluid-container">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <!-- Mobile Toggle Menu Button -->
          <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>

          <a class="navbar-brand" href="index.html"><img src="images/icamp.png" height="50px" width="65px"></a>
          <a class="navbar-brand" href="">Internship Camp'17</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li ><a href="http://interncamp.ecell.org.in" data-nav-section="home"><span>Home</span></a></li>
            
            
            
            
            
            <li><a href="../../dashboard.php"><span>Back to Dashboard</span></a></li>
            <li><a href="../../logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <br><br>
<div id="upload-wrapper">
<div align="center">
<h3>Upload Your Resume</h3>
<form action="processupload.php" method="post" enctype="multipart/form-data" id="MyUploadForm">
<input name="FileInput" id="FileInput" type="file" />
<input type="submit"  id="submit-btn" value="Upload" />
<img src="images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>
</form>
<div id="progressbox" ><div id="progressbar"></div ><div id="statustxt">0%</div></div>
<div id="output"></div>
</div>
</div>
<br><br><br>
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