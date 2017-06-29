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
  if($ro['Verified']==0){
    echo '<script type="text/javascript">alert("Please Confirm Your Mail")</script>';
    echo '<script type="text/javascript">
           window.location = "login (1).php"
      </script>';
  }
  $query = "SELECT * FROM student_applied WHERE email='$email'";
$result1 = $conn->query($query);

$applied = mysqli_num_rows($result1);
$query = "SELECT * FROM student_bookmark WHERE email='$email'";
$result1 = $conn->query($query);

$bookmark = mysqli_num_rows($result1);
$query = "SELECT resume_link,resume_uploaded FROM student WHERE email='$email'";
$result1 = $conn->query($query);
$row1 = $result1->fetch_assoc();

}
else{
  header("location: login (1).php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="jquery-3.1.1.min.js"></script>
<!--<script src="dashboard.js"></script>-->

  <link rel="stylesheet" type="text/css" href="dashboard.css">
            
</head>
<body>
<!--Header-->
<div class="container-fluid display-table ">
      <div class="row display-table-row " id="sidebar">

        <!--Side menu-->
       <div class="col-md-2 display-table-cell col-sm-1 hidden-xs valign-top" id="side-menu">
        <img src="icamp.png" height="60px" width="75px">
       <ul>
          <li class="link active">
             <a href="">
                    <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
                    <span class="hidden-xs hidden-sm">Dashboard</span>
             </a>
         </li>

          <li class="link">
             <a href="#collapse-intern" data-toggle="collapse" aria-controls="collapse-intern">
             
                    <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
                    <span class="hidden-xs hidden-sm">My Interships</span> 
             </a>
      <ul class="collapse collapseable" id="collapse-intern">
                    <span class="label label-success pull-right"><?php echo $applied;?></span>
        
        <li><a href="applied.php">Applied</a></li>
                    <span class="label label-success pull-right">0</span>
         <li><a href="selected.html">Selected</a></li>
         </ul>
    </li>
    

      <li class="link">
           <a href="bookmarks.php">
             <span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span>
             <span class="label label-success pull-right"><?php echo $bookmark;?></span>
             <span class="hidden-xs hidden-sm">My Bookmarks</span>
           </a>
     </li>
     

<li class="link">
       <a href="#collapse-date" data-toggle="collapse" aria-controls="collapse-date">
        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
        <span class="hidden-xs hidden-sm">Calender</span>
      </a>
      <ul class="collapse collapseable" id="collapse-date">
      
        
        <li><a href="events.php">Event Details</a></li>
        
         <li><a href="dates.html">Important Dates</a></li>
         
      </ul>
    </li>

  </ul>
    
  </div>
  <!--main content-->
  <div class="col-md-10 display-table-cell col-sm-11 valign box ">
        <div class="row">
           <header id="nav-header" class="clearfix">
                 <div class="col-md-5">
                 <nav class="navbar-default pull-left">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                   

                 </nav>
                    
                 </div>
                        <div class="col-md-12">
                        <div class="pull-left" style="margin-top: 2%">
                        <?php 
                        if($row1["resume_uploaded"]==0){
                	echo '<a class="btn btn-success" href="upload/upload/">Upload Resume</a>';
                	 }
                	else{
                	echo '<a class="btn btn-warning" href="'.$row1['resume_link'].'" download>Download Resume</a>';
                	 }?>
                </div>
                            <ul class="pull-right">
                                <li id="welcome" class="hidden-xs">Welcome <?php echo $ro["Name"];?></li>
                                   <li class="fixed-width">
                                    <a href="#">
                                        <span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
                                       <span class="label label-warning">0</span>
                                   </a>
                                </li>
                                <li class="fixed-width">
                                   <a href="#">
                                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                      <span class="label label-message">0</span>
                                   </a>
                                </li>
                              <li>
                                   <a href="logout.php" class="logout">
                                <span class="glyphicon glyphicon-log-out"  aria-hidden="true"></span>
                               Log-Out
                                   </a>
                              </li>
                           </ul>
                </div>

          </header>
    	
        </div> 
           <div class="row">
              <footer id="admin-footer" class="clearfix">
                  <div class="pull-left"><b>E-Cell</b></div>
                  <div class="pull-right"><b>Intership Camp</b></div>
              </footer>
           </div>
<div class="collection">
                   <!--Modal Internship Cards-->
                         <!-- Trigger the modal with a button -->
                  <?php
       
       $sql="SELECT * FROM startup";
       $result=$conn->query($sql);
       while($row=$result->fetch_assoc())
       {
       echo'<a href="" data-toggle="modal" data-target="#'.$row["id"].'">';
       //echo'<a href="" data-toggle="modal" data-target="#'.$row["id"].'"value="'.$row["id"].'">';
       echo'<div class="card" style="width: 24.3rem; background-color: white;">';
       echo'<img class="card-img-top" src="atlanta.jpg" alt="Card image cap">';
       echo'<div class="card-block">';
       echo'<h5 class="card-title">'.$row["Name"];//Startup Name
       echo'<input type="hidden"value="'.$row["Name"].'"id="company">';
      //setcookie("name",$row["Name"],"apply.php");
      echo'<span class="glyphicon glyphicon-home" aria-hidden="true"></span> <span class="location">'.$row["Location"].'</span></h5>';
       echo'<p class="card-text">'.$row["Skills"].'</p>';
       echo'</div>';
 echo'</div></a>';
 
 echo '<div class="modal fade" id="'.$row["id"].'" role="dialog">
                            <div class="modal-dialog">
    
                              <!-- Modal content-->
                       <div class="modal-content">
                       <form action="apply.php" method="post" id="apply12">
                           <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                               <h4 class="modal-title">'.$row["Name"].'</h4>
                            </div>
                                <div class="modal-body">
                                <p>'.$row["Description"].'</p>
                                <p><a href="'.$row["website"].'" target="_blank">'.$row['Name'].'</a></p>

                                </div>
                                    <div class="modal-footer">
                                      <input type="hidden"value="'.$row["Name"].'" id="'.$row["id"].'" name="company">
                                       <input type="submit" class="btn btn-success" value="Apply"name="apply">
                                       <input type="submit" class="btn btn-primary" value="Bookmark"name="bookmark" name="bookmark">                                    
                                       </div>
                                </form>
                                </div>
      
                             </div>
                            </div>';
}
/*echo'

<script>
$(document).ready(function(){
$("a").click(function(){';
//setcookie("name",$row["Name"],"apply.php");
//var company=$("#company").val();
2//$(".modal fade").attr("id","'.$row["id"].'");
//return false;
'
});
});
</script>';   
}
*/
?>      
                 
                     
                     
                     
                         
                         

  
                        </div>





   
           </div>
     

</div>
  
</div>

<script>
$(document).ready(function(){
$("a").click(function(){
//var company=$("#company").val();
$("#company_name").val($("#company").val());
//return false;
});
});
</script>
</body>
</html>
