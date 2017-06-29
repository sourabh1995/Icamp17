<?php include 'db_config.php' ;
//add the recipient's address here
$myemail = 'info@simplybhand.com';
 
//grab named inputs from html then post to #thanks
if(($_POST['name']==null) || $_POST['email']==null)
{
	echo "<span class=\"alert alert-warning\" >Sorry !! All fields are mandatory..</span><br><br>";
}
else{

$email = strip_tags($_POST['email']);
$name = strip_tags($_POST['name']);
$result = $conn->query("SELECT * FROM subscription WHERE email='$email'");
$data = $result->num_rows;
//generate email and send!
if($data == 0){
$to = $email;
$email_subject = "Welcome to Simply Bhand!!";
$email_body = "Hello $name ".
"\nThanks for joining Simply Bhand! Now, You’re an officially registered Bhand!\n ".
"\nThe primary purpose of Simply Bhand is to give you that one place where you actually get rewarded for doing things that you love. It's easy to lose sight of your passions, particularly in a world that wants to insist that we are limited, aging creatures, supposed to study, study and then take up  a boring job. A life properly lived is not supposed to be hard and boring, though we can make it that way by leaving out things that we really love.".
"\nSo, quit the rat race and get going and following your passion! Being bhand is all about spending your life engrossed in things you love. At Simply Bhand you get rewarded for doing this very thing!\n".
"\nTo catch up on what we really mean by being “Bhand” check out our"."<a href='https://twitter.com/SimplyBhand'>twitter handle</a>"."and"."<a href='https://www.facebook.com/SimplyBhand/'>facebook page</a>"."\n".
"\nLastly, $name , You’re damn awesome and that’s because you’re mad about that something which makes one in a million. So, follow your passion. Be fully Bhand!\n".
"\nYours in the absolute Bhandness,\n".
"\nSimply Bhand Team\n".
"\n\nDon’t Get Mad, Get Bhand ;)\n".
"\nwww.simplybhand.com\n";
$headers = "From: $email\n";
$headers .= "Reply-To: $myemail";
 $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($to,$email_subject,$email_body,$headers);
$query = "INSERT INTO subscription(email,name) VALUES('$email','$name')";
if($conn->query($query)){
echo "<span class=\"alert alert-success\" >Thank you for subscribing !! We will reach out to you soon.</span><br><br>";
}
else{
	echo "<span class=\"alert alert-danger\" >Error while inserting data!! Try Again</span><br><br>";
}
}
else{
	echo "<span class=\"alert alert-warning\" >You have already subscribed earlier!! We will reach out to you soon.</span><br><br>";
}
}

?>