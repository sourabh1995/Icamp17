<?php
// set the expiration date to one hour ago
setcookie('username',"",time()-3600,"/");
setcookie('password',"",time()-3600,"/");
header("location: login (1).php");
?>
