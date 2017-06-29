<?php	
//error_reporting(0);
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Internship camp | Student Registration</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize1.css" />
		<link rel="stylesheet" type="text/css" href="css/stud-form1.css" />
		<link rel="stylesheet" type="text/css" href="css/component1.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-select1.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-skin-boxes1.css" />
		<script src="js/modernizr.custom1.js"></script>
	</head>
	<body>
		<div class="container">

			<div class="fs-form-wrap" id="fs-form-wrap">
				<div class="fs-title">
					<h1><a style="float: left;" href="http://interncamp.ecell.org.in"><img src="icamp.png" height="60px" width="75px"></a>Student Registration<a style="float: right;" href="http://interncamp.ecell.org.in"><img src="http://www.clipartbest.com/cliparts/aiq/6EK/aiq6EK75T.png" height="50px" width="50px"></a></h1>
					<div class="ic-top">
						<a class="ic-icon ic-icon-prev" href=""><span>Back to home</span></a>
						<a class="ic-icon ic-icon-info" href="#"><span>Need help?</span></a>
					</div>
				</div>
				<form id="myform" class="fs-form fs-form-full" autocomplete="on" method="post" action="stu-reg-submit.php">
					<ol class="fs-fields">
						<li>
							<label class="fs-field-label fs-anim-upper" for="student_name">What's your name?</label>
							<input class="fs-anim-lower" id="q1" name="student_name" type="text" placeholder="FIRST_NAME LAST_NAME" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="email" data-info="EMAIL">Email</label>
							<input class="fs-anim-lower" id="q2" name='email' type="email" placeholder="dean@road.us" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="phone">Your calling number?</label>
							<input class="fs-anim-lower" id="q5" name="phone" type="number" placeholder=""/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="univ">University Name</label>
							<input class="fs-anim-lower" id="q5" name="univ" type="text" placeholder=""/>
						</li>
<li>
							<label class="fs-field-label fs-anim-upper" for="roll">University Roll</label>
							<input class="fs-anim-lower" id="q5" name='roll' type="number" placeholder=""/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="branch">Branch</label>
							<input class="fs-anim-lower" id="q5" name='branch' type="text" placeholder=""/>
						</li>
<li>
							<label class="fs-field-label fs-anim-upper" for="year">Year</label>
							<input class="fs-anim-lower" id="q5" name='year' type="text" placeholder=""/>
						</li>


						<li>
							<label class="fs-field-label fs-anim-upper" for="password">Choose a password</label>
							<input class="fs-anim-lower" id="q5" name='password' type="password" placeholder=""required/>
						</li>
					</ol><!-- /fs-fields -->
					<button class="fs-submit" name="submit">Submit</button>
					<!--<input type="submit" class="fs-submit" value="Send answers" name="submit">-->
				</form><!-- /fs-form -->
			</div><!-- /fs-form-wrap -->



		</div><!-- /container -->
		<script src="js/classie1.js"></script>
		<script src="js/selectFx1.js"></script>
		<script src="js/fullscreenForm1.js"></script>
		<script>
			(function() {
				var formWrap = document.getElementById( 'fs-form-wrap' );

				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx( el, {
						stickyPlaceholder: false,
						onChange: function(val){
							document.querySelector('span.cs-placeholder').style.backgroundColor = val;
						}
					});
				} );

				new FForm( formWrap, {
					onReview : function() {
						classie.add( document.body, 'overview' ); // for demo purposes only
					}
				} );
			})();
		</script>
	</body>

</html>
