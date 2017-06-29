<?php
include_once 'dbconnect.php';
include_once 'ckeditor/ckeditor.php';
$query = "SELECT * FROM submit_work";
$result = $MySQLi_CON->query($query);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href="style.css" type="text/css" rel="stylesheet"/>
		<link rel="shortcut icon" href="images/LOGOSIMPLY.png" />
		<title>Simply Bhand | Write-Blog</title>
		
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
      <a class="navbar-brand" href="http://simplybhand.com/"><img src="images/LOGOSIMPLY.png" style="max-width:60px; margin-top: -20px;"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="http://simplybhand.com/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      </ul>
    </div>
  </div>
</nav>

		<div class="container-fluid">
			<div class="row">
			<div class="section-title">
				<center><h2 class="demo-text">Admin Panel</h2></center>
				</div>
				
				<form action="" method="POST">
				<div class="table-responsive">
				<table class="table">
					<tr><td>ID</td><td>Name</td><td>Phone</td><td>Email</td><td>Title</td><td>Content(Edit)</td><td>Category</td><td>Download</td></tr>
					<?php
					if($result->num_rows > 0)
					{
					while($row = $result->fetch_assoc())
					{
						echo "<tr><td>".$row['id']."</td><td> ".$row['name']."</td><td> ".$row['phone']."</td><td>".$row['email']."</td><td> ".$row['title']."</td><td>".$row['content']."</td><td> ".$row['category']."</td><td><a href = ".$row['agreed']."download>Download File</a></td></tr>";
						
					}
				}
				else
				{
					echo "O Result  !!";
				}
					?>
				

				</table>
				</div>
			
				
				
				
				
				
				

    			


				<div class="container">
				<div class="row">
				<div class="col-lg-4"></div>
				<div class="col-lg-4">
					<div class="submit">
        				<input type="submit" value="Submit" name="Submit" id="button-blue" />
        					<div class="ease"></div>
        			</div>
        			</div>
      			</div>
				</div>
				</form>
			</div>
		</div>
		<!-- Contact Section Start -->  
	<section id="contact_section">
		<div class="contact_section">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row">
						<div class="section-title">
							<h2>Contact us.</h2>
							<p></p>
						</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="address_part">
								<!--<div class="address">
									<i class="fa fa-map-marker"></i> Simply Bhand <br/>KIIT Campus <br/> Patia <br/> Bhubaneswar
								</div>-->
								<div class="phone">
									<i class="fa fa-phone"></i> +91&nbsp;707&nbsp;710&nbsp;0815
								</div>
								<div class="email">
									<i class="fa fa-envelope-o"></i> info@simplybhand.com
								</div>
								<div class="social_icons">
											<ul>
												<li><a href="https://www.facebook.com/SimplyBhand/" target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook" data-rel="tooltip" class="icon_fb" ><i class="fa fa-facebook-square"></i></a></li>
												<li><a href="https://www.twitter.com/SimplyBhand/" data-toggle="tooltip" target="_blank" data-placement="top" title="Twitter" data-rel="tooltip" class="icon_twitter"><i class="fa fa-twitter-square"></i></a></li>
												<li><a href="#" data-toggle="tooltip" data-placement="top" title="Google+" target="_blank" data-rel="tooltip" class="icon_gplus"><i class="fa fa-google-plus-square"></i></a></li>
												<li><a href="https://www.linkedin.com/company/simply-bhand?trk=top_nav_home" target="_blank" data-toggle="tooltip" data-placement="top" title="Linkdin" data-rel="tooltip" class="icon_linkdin"><i class="fa fa-linkedin-square"></i></a></li>
												<li><a href="#" data-toggle="tooltip" data-placement="top" title="Youtube" target="_blank" data-rel="tooltip" class="icon_youtube"><i class="fa fa-circle fa-youtube-square"></i></a></li>
												
											</ul>

								</div>
							</div>
							
							</div>
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></div>
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
								<div class="contact_form">
									<!--<div id="show_contact_msg"></div>
								 Contact Form Start 
									<form method="post" id="contact_form" action="contact.php">
										<input type="text" id="contact_name" name="name" class="form-control contact_input_box wow fadeInUp" placeholder="Name" required/>
										<input type="email" id="contact_email" name="email" class="form-control contact_input_box wow fadeInUp" placeholder="E-mail" required/>
										<textarea id="contact_text" name="message" rows="5" cols="30" class="form-control contact_input_box wow fadeInUp" placeholder="Message" required></textarea>
										<button type="submit" class="btn btn-primary contact_button wow fadeInUp"> <i class="fa fa-send-o"></i>  Send message</button>
									</form>
								 Contact Form End -->
								 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6&appId=1033281556756308";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-page" data-href="https://www.facebook.com/SimplyBhand/" data-tabs="timeline" data-height="70" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/SimplyBhand/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/SimplyBhand/">Simply Bhand</a></blockquote></div>
								</div>
							</div>
					</div>
				</div>
			</div>
			</div>	
		</div>	
	</section>
  <!-- Contact Section End -->
  
		
	</body>
</html>
<?php
$MySQLi_CON->close();
?>
