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
	//$con=mysqli_connect('localhost','root','','arihant') or die(mysqli_connect_error());
	include'database_connection.php';

	$templateName=$_POST['templateName'];
	$t1=$_POST['attribute1'];
	$t2=$_POST['attribute2'];
	$t3=$_POST['attribute3'];
	$t4=$_POST['attribute4'];
	$t5=$_POST['attribute5'];
	$t6=$_POST['attribute6'];
	$t7=$_POST['attribute7'];
	$t8=$_POST['attribute8'];
	$t9=$_POST['attribute9'];
	$t10=$_POST['attribute10'];
	$t11=$_POST['attribute11'];
	$t12=$_POST['attribute12'];

	$query="insert into template(templateName,t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,t11,t12) values('$templateName','$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8','$t9','$t10','$t11','$t12')";
	if(mysqli_query($con,$query))
	{
		echo"<script>window.location='adminProduct.php?id=template_success';</script>";
	}
	else
	{
		echo"Error : ".$con->error;
	}
?>
