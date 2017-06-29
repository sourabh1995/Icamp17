<?php include 'db_config.php' ;
//add the recipient's address here
$myemail = 'info@simplybhand.com';
 
//grab named inputs from html then post to #thanks
if(($_POST['name']==null) || $_POST['email']==null || $_POST['phone']==null || $_POST['profile']==null)
{
	echo "<span class=\"alert alert-warning\" >Sorry !! All fields are mandatory..</span><br><br>";
}
else {
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);

$phone = strip_tags($_POST['phone']);
$profile = strip_tags($_POST['profile']);
$result = $conn->query("SELECT email FROM workwithus WHERE email='$email'");
$data = $result->num_rows;
if(($data) == 0)
{
//generate email and send!
$to = $email;
$email_subject = "Welcome to Simply Bhand!!";
$email_body = "Hello $name ".
"\nThanks for joining Simply Bhand! Now, You’re an officially registered Bhand!\n ".
"\nThe primary purpose of Simply Bhand is to give you that one place where you actually get rewarded for doing things that you love. It's easy to lose sight of your passions, particularly in a world that wants to insist that we are limited, aging creatures, supposed to study, study and then take up  a boring job. A life properly lived is not supposed to be hard and boring, though we can make it that way by leaving out things that we really love.".
"\nSo, quit the rat race and get going and following your passion! Being bhand is all about spending your life engrossed in things you love. At Simply Bhand you get rewarded for doing this very thing!\n".
"\nTo catch up on what we really mean by being “Bhand” check out our"."<a href='https://twitter.com/SimplyBhand'>twitter handle</a>"."and"."<a href='https://www.facebook.com/SimplyBhand/'facebook page</a>"."\n".
"\nLastly, $name , You’re damn awesome and that’s because you’re mad about that something which makes one in a million. So, follow your passion. Be fully Bhand!\n".
"\nYours in the absolute Bhandness,\n".
"\nSimply Bhand Team\n".
"\n\nDon’t Get Mad, Get Bhand ;)\n".
"\nwww.simplybhand.com\n";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($to,$email_subject,$email_body,$headers);
$query = "INSERT INTO workwithus(name,email,phone,profile) VALUES('$name','$email','$phone','$profile')";
if($conn->query($query)){
echo "<span class=\"alert alert-success\" >Thank you!! We will reach out to you soon.</span><br><br>";
}
else{
	echo "<span class=\"alert alert-danger\" >Error while inserting data!! Try Again</span><br><br>";
}
}
else{
	echo "<span class=\"alert alert-warning\" >You have already registered!! We will reach out to you soon.</span><br><br>";
}
}