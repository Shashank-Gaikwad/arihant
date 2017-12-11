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
	//include'database_connection.php';
	$con=mysqli_connect('localhost','root','','arihant') or die(mysqli_connect_error());
	$pcustomerName=$_POST['name'];
	$pcontactNumber=$_POST['mobile'];
	$pemailId=$_POST['email'];
	$pqueryText=$_POST['queryText'];


		$query="insert into query(name,mobile,email,queryText) values('$pcustomerName','$pcontactNumber','$pemailId','$pqueryText')";


	if(mysqli_query($con,$query))
	{
		echo"<script>window.location='contactus.php?id=success';</script>";
	}
	else
	{
		echo "Error : " . mysqli_error($con);
	}
?>
