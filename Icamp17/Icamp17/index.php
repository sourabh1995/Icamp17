<?php
echo '<script type="text/javascript">
           window.location = "http://interncamp.ecell.org.in"
      </script>';
	include 'header.php';
?>

<style>
div.transbox {
  margin: 0px;
  background-color: #000000;
  opacity: 0.8;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}
div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: #000000;
}

.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
	outline: none;
	border-radius: 29px;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button2 {
    background-color: white; 
    color: black; 
    border: 2px solid #1195B3;
}

.button2:hover {
    background-color: #1195B3;
    color: white;
}
.button1 {
    background-color: #1195B3; 
    color: #FFFFFF; 
    border: 2px solid #1195B3;
}

.button1:hover {
    background-color: #1195B3;
    color: white;
}
.kiit_logo{width: 85px; height: 60px;}
.ecell_logo{width: 70px; height: 75px;}
.tbi_logo{width: 85px; height: 75px;}
.header{padding-bottom: 5.2px; padding-top: 3.2px;}
.img_container{border: 1px solid #000000; height: 300px;}
label{color: #000000; font-size: 12px;}
.startup_form{width: 350px; background-color: #fff; border-style: outset;}
.body_bgcolor{background-color:#0A5060}
@font-face {
    font-family:Lato-Regular;
    src:url(fonts/Lato-Regular.ttf);
}
@font-face {
	font-family: Raleway-Regular;
	src:url(fonts/Raleway-Regular.ttf);	
}
.section-heading_bar{height:3.2px;width:40px;background-color: #2AA9C7; display:inline-block}
.page_heading{font-family: Lato-Regular; color: #1989A3;}
.intern_desc{font-family: Lato-Regular; letter-spacing: 0.7px;}
.intern_detail{font-family: Raleway-Regular; letter-spacing: 0.6px;}
.index_transbox{width: 100%; padding-bottom: 30px;}
.index_transboxdesc{font-family: Raleway-Regular;}
.index_imgcontainer{height: 800px; max-width: 100%; background-image:url(images/Man-staring-intently-at-computer%20-%20Copy.jpg);}
</style>
<!-- // HEADER -->
<body>
    <!-- PAGE HEADER -->
   <div class="w3-container header">
     <div class="w3-row-padding">
        <div class="w3-half">
            <a href="http://kiit.ac.in" title="KIIT">
                <img class="kiit_logo" src="images/KIIT_logo.svg.png">
            </a> &nbsp;
            <a href="http://ecell.org.in" title="KIIT E-CELL">
                <img class="ecell_logo" src="images/logo.png"> 
            </a> &nbsp; 
            <a href="http://www.kiitincubator.in" title="KIIT TBI">
                <img class="tbi_logo" src="images/qAaVcNfROSJVpxjN8iz0_KIIT_upload4-320x150.png">
            </a>
        </div>
    	<div class="w3-half">
    		<h3 class="text-right page_heading"><b>KIIT INTERNSHIP CAMP</b></h3>
    	</div>
    </div>
  </div>
  <!-- // PAGE HEADER -->
  <div class="w3-container index_imgcontainer">
	 <center>
		<div class="w3-container w3-center transbox w3-display-middle index_transbox">
			<h2 class="w3-text-white index_transboxdesc"> Showcase Your Talent ! Join Internship</h2>
			<a href="start-reg.php" style="text-decoration: none;" class="button button1">START UP</a> &nbsp; 
            <a href="login (1).php" style="text-decoration: none;" class="button button2">STUDENT</a>
    		<br>
    	</div>
	  </center>
   </div>
</body>
</html>
