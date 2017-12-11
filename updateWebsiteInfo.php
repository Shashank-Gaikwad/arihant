<?php
	session_start();
?>

<?php
if (isset($_SESSION['username']))
{
//echo 'Welcome'.$_SESSION['username'];
}
else
{
  echo "Session is in active";
		header('Location: index.php');
}
?>

<?php


include'database_connection.php';
//$con=mysqli_connect('localhost','root','','rasik_jewellers') or die(mysqli_connect_error());


$email=$_POST['email'];
$mobile1=$_POST['mobile1'];
$address=$_POST['address'];
$about=$_POST['aboutUsText'];

//$query="update websiteinfo set aboutUsText ='".$about."' where websiteName='".$name."' ";

$query="update websiteinfo set emailId='$email',mobileNumber1='$mobile1',address='$address',aboutUsText='$about'";

if($con->query($query)==TRUE)
{
	echo"<script>window.location='adminpage.php?id=update_success';</script>";
}
else
{
	echo"Error : " . $con->error;
}

/*if(!mysqli_query($con,$query))
echo 'error'.mysqli_error($con);
else
echo"Updates succesfully";*/




?>
