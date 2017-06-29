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
$query = "SELECT resume_uploaded FROM student WHERE email='$email'";
$result1 = $conn->query($query);
$row1 = $result1->fetch_assoc();

}
else{
  header("location: login (1).php");
}

if(isset($_FILES["FileInput"]) && $_FILES["FileInput"]["error"]== UPLOAD_ERR_OK)
{
	############ Edit settings ##############
	$UploadDirectory	= 'uploads/'; //specify upload directory ends with / (slash)
	##########################################
	
	/*
	Note : You will run into errors or blank page if "memory_limit" or "upload_max_filesize" is set to low in "php.ini". 
	Open "php.ini" file, and search for "memory_limit" or "upload_max_filesize" limit 
	and set them adequately, also check "post_max_size".
	*/
	
	//check if this is an ajax request
	if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
		die();
	}
	
	
	//Is file size is less than allowed size.
	if ($_FILES["FileInput"]["size"] > 5242880) {
		die("File size is too big!");
	}
	
	//allowed file type Server side check
	switch(strtolower($_FILES['FileInput']['type']))
		{
			//allowed file types
            
			case 'application/x-zip-compressed':
			case 'application/pdf':
			case 'application/msword':
			
				break;
			default:
				die('Unsupported File!'); //output error
	}
	
	$File_Name          = strtolower($_FILES['FileInput']['name']);
	$File_Ext           = substr($File_Name, strrpos($File_Name, '.')); //get file extention
	$Random_Number      = $ro['id'].'_'.$ro['Univ_roll'].'_'.$ro['Name']; //Random number to be added to name.
	$NewFileName 		= $Random_Number.$File_Ext; //new file name
	
	if(move_uploaded_file($_FILES['FileInput']['tmp_name'], $UploadDirectory.$NewFileName ))
	   {
	   	$link = 'upload/upload/'.$UploadDirectory.$NewFileName;
	   	$sql="UPDATE student SET resume_uploaded=1 WHERE email='$email'";
  		$results=$conn->query($sql);
  		$sql="UPDATE student SET resume_link = '$link' WHERE email='$email'";
  		$results=$conn->query($sql);
		die('Success! File Uploaded.');
	}else{
		die('error uploading File!');
	}
	
}
else
{
	die('Something wrong with upload! Is "upload_max_filesize" set correctly?');
}