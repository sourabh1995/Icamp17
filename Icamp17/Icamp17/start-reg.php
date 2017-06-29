<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Internship camp | Startup Registration</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="shortcut icon" href="icamp.png">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/stud-form.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-skin-boxes.css" />
		<script src="js/modernizr.custom.js"></script>
		
	</head>
	<body>
		<div class="container">
			
			<div class="fs-form-wrap" id="fs-form-wrap">

				<div class="fs-title">
					<h1><a style="float: left;" href="http://interncamp.ecell.org.in"><img src="icamp.png" height="60px" width="75px"></a>Startup Registration<a style="float: right;" href="http://interncamp.ecell.org.in"><img src="http://www.clipartbest.com/cliparts/aiq/6EK/aiq6EK75T.png" height="50px" width="50px"></a></h1>
					<div class="ic-top">
						<a class="ic-icon ic-icon-prev" href=""><span>Back to home</span></a>
						<a class="ic-icon ic-icon-info" href="#"><span>Need help?</span></a>
					</div>
				</div>
				<form id="myform" class="fs-form fs-form-full" autocomplete="on" action="start-reg-submit.php" method="post">

					<ol class="fs-fields">
						<li>
							<label class="fs-field-label fs-anim-upper" for="q0">What is your startup called?</label>
							<input class="fs-anim-lower" id="q1" name="q0" type="text" placeholder="ChangeTheWorld Inc." required />
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q1" data-info="">What's your web address?</label>
							<input class="fs-anim-lower" id="q1" name="q1" type="text" placeholder="changetheworld.com" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q2" data-info="We won't send you spam, we promise...">What's your email address?</label>
							<input class="fs-anim-lower" id="q2" name="q2" type="email" placeholder="poc@changetheworld.com" required />
						</li>

						<li data-input-trigger id='stipend'>
							<label class="fs-field-label fs-anim-upper" for="q3" data-info="This will help us know what kind of service you need">What type of internship are you offering?</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower" >
								<span id='with' class='bordered'><input id="q3b" name="q3" type="radio" value="stipend-y"/>With Stipend</span>
								<span id='without' class='bordered'><input id="q3c" name="q3" type="radio" value="stipend-n"/>Without Stipend</span>
							</div>
						</li>
						<li id='stipend-y-1' class='fs-hidden stipend-yes'>
							<label class="fs-field-label fs-anim-upper" for="q4" data-info="We won't send you spam, we promise...">What is the internship location?</label>
	
							<input class="fs-anim-lower" id="q4" name="q5" type="text" placeholder="Gotham" />
						</li>
						
						
						<li id='stipend-n-1' class='fs-hidden stipend-no'>
							<label class="fs-field-label fs-anim-upper" for="q4" data-info="We won't send you spam, we promise..."><span style="color: red;">Internship Location will be Virtual and Stipend will be minimum 1000. </span><br>What is the startup location?</label>
							<input class="fs-anim-lower" id="q4" name="q4" type="text" placeholder="Gotham" />
						</li>
						
						<li id='stipend-y-2' class='fs-hidden stipend-yes' data-input-trigger>
							<label id='stipend-menu' class="fs-field-label fs-anim-upper" data-info="We'll make sure to use it all over" for="q6">Select your offered stipend (in Rupees)</label>
							<select class="cs-select fs-anim-lower" name="q6">
								<option value="" disabled selected>Pick an option</option>
								<option value="1000-2000" data-class="color-588c75">1000-2000</option>
								<option value="2001-3000" data-class="color-588c75">2001-3000</option>
								<option value="3001-4000" data-class="color-588c75">3001-4000</option>
								<option value="4001-5000" data-class="color-588c75">4001-5000</option>
								<option value="5001-6000" data-class="color-b0c47f">5001-6000</option>
								<option value="6001-7000" data-class="color-f3e395">6001-7000</option>
								<option value="7001-8000" data-class="color-588c75">7001-8000</option>
								<option value="Above 8000" data-class="color-f3ae73">Above 8000</option>
							</select>
						</li>
						
						<li id='stipend-uni' class='stipend-yes'>
							<label class="fs-field-label fs-anim-upper" for="q7">Tell us about your startup</label>
							<textarea class="fs-anim-lower" id="q4" name="q7" placeholder="Describe here"></textarea>
						</li>
						
						<li class='stipend-uni'>
							<label class="fs-field-label fs-anim-upper" for="q8">What kind of skills are you looking for?</label>
							<textarea class="fs-anim-lower" id="q4" name="q8" placeholder="e.g. Mobile Dev, App Dev, Marketing" required></textarea>
						</li>
						
						<li id='stipend-y-3' class='fs-hidden stipend-yes'>
							<label class="fs-field-label fs-anim-upper" for="q9" data-info="We won't send you spam, we promise...">What's the duration of the internship offered?(In Months)</label>
							<input class="fs-anim-lower" id="q9" name="q9" type="number" placeholder="In months" />
						</li>
						
						<li  class='stipend-uni' id='stipend2'>
							<label class="fs-field-label fs-anim-upper" for="q10" data-info="We won't send you spam, we promise...">Please give us your calling number</label>
							<input class="fs-anim-lower" id="q10" name="q10" type="number" placeholder="" required />
						</li>

						
					</ol><!-- /fs-fields -->
					<button class="fs-submit" name="submit">Submit</button>
					<!--<input class="fs-submit" type="submit" value="Send answers" name="submit">-->

				</form><!-- /fs-form -->

			</div><!-- /fs-form-wrap -->

		<style>
		
		.fs-hidden{display:none;}
		
		</style>


		</div><!-- /container -->
		<script src="js/jquery.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/selectFx.js"></script>
		<script src="js/fullscreenForm.js"></script>
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
						classie.add( document.body, 'overview' );
						// $('#myform').click(alert);
						// $('#myform').append("<li><label class='fs-field-label fs-anim-upper' for='q2' data-info='We won't send you spam, we promise...'>What's your wasdsaaddress?</label><input class='fs-anim-lower' id='q2' name='q2' type='email' placeholder='dean@road.us' /></li>");
						// for demo purposes only
					}
				} );
			})();
		</script>
		<style>
		.bordered
		{
			border:2px solid white !important;
			padding:22px 40px !important;
			width:30px;
			
			-moz-transition:background-color .2s ease-in, color .2s ease-in;
			-o-transition:background-color .2s ease-in, color .2s ease-in;
			-webkit-transition:background-color .2s ease-in, color .2s ease-in;
		}
		
		.bordered:hover
		{
			background-color:white;
			color:black !important;
			border:2px solid white !important;
		}
		</style>

	
	
	
	</body>
</html>
