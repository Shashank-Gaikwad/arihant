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
	/*session_start();
	if (isset($_SESSION['username']))
	{
		//echo 'Welcome'.$_SESSION['username'];
	}
	else
	{
		//echo "Session is in active";
		header('Location: index.php');
	}*/

	include'database_connection.php';
	//$con=mysqli_connect('localhost','root','','arihant') or die(mysqli_connect_error());
	if($_GET)
	{
		if($_GET['q'])
		{
			$delete_id=$_GET['q'];
		}
	}

	$query1="delete from query where queryId=$delete_id";
	if(mysqli_query($con,$query1))
	{
		echo"<script>window.location='adminQuery.php'</script>";
	}
	else
	{
		echo "Error: " . $query1 . "<br>" . $con->error;
	}
?>
