<?php include_once("connect.php");

  $email = $_GET['email'];
  $pass = $_GET['contact'];
  $sql="SELECT * FROM startup WHERE email='$email' AND contact='$pass'";
  $results=$conn->query($sql);
  $ro=$results->fetch_assoc();
  $cnt = mysqli_num_rows($results);
  if($cnt==1)
  {
    $sql = "UPDATE startup SET Verified=1 WHERE email='$email'";
     $results=$conn->query($sql);
    echo '<script type="text/javascript">alert("Thank You for Registering Successfully.")</script>';
    echo '<script type="text/javascript">
           window.location = "http://interncamp.ecell.org.in"
      </script>';
  }

?>