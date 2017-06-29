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
  $query = "SELECT * FROM student_applied WHERE email='$email'";
$result1 = $conn->query($query);

$applied = mysqli_num_rows($result1);
$query = "SELECT * FROM student_bookmark WHERE email='$email'";
$result1 = $conn->query($query);

$bookmark = mysqli_num_rows($result1);
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
          <li class="link">
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

<li class="link active">
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
                    <input type="text" id="header-search-field" name="search" placeholder="Search for your Internship">
                 </div>
                        <div class="col-md-7">
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
           
                   <!--Modal Internship Cards
                          <table class="table table-striped">
    <thead>
      <tr>
        <th>StartUps</th>
        <th>Date</th>
        <th>Time</th>
        <th>Interview Mode</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Simply Bhand</td>
        <td>20-Mar-2017</td>
        <td>5:00PM</td>
        <td>Offline</td>

      </tr>
      <tr>
        <td>Simply Bhand</td>
        <td>20-Mar-2017</td>
        <td>5:00PM</td>
        <td>Offline</td>

      </tr>
      <tr>
        <td>Simply Bhand</td>
        <td>20-Mar-2017</td>
        <td>5:00PM</td>
        <td>Offline</td>

      </tr>
      <tr>
        <td>Simply Bhand</td>
        <td>20-Mar-2017</td>
        <td>5:00PM</td>
        <td>Offline</td>

      </tr>
      
    </tbody>
  </table>-->




            <br><br><br><br>
            <h2 class="text-center" >Coming Soon</h2>
   
           </div>

     

</div>
  






</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="jquery-3.1.1.min.js"></script>
<script src="dashboard.js"></script>
</body>
</html>
