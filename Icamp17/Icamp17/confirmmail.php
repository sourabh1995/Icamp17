<?php include_once("connect.php");

  $email = $_GET['email'];
  $pass = $_GET['pass'];
  $sql="SELECT * FROM student WHERE email='$email' AND password='$pass'";
  $results=$conn->query($sql);
  $ro=$results->fetch_assoc();
  $cnt = mysqli_num_rows($results);
  if($cnt==1)
  {
    $sql = "UPDATE student SET Verified=1 WHERE email='$email'";
     $results=$conn->query($sql);
    echo '<script type="text/javascript">alert("Successfully Registered. Login to Apply")</script>';
    echo '<script type="text/javascript">
           window.location = "login (1).php"
      </script>';
  }

?>