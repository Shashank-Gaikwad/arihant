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
	//$con=mysqli_connect('localhost','root','','arihant') or die(mysqli_connect_error());
  include'database_connection.php';
  if($_GET)
	{
		if($_GET['q'])
		{
			$delete_id=$_GET['q'];
		}
	}

	$query1="delete from faq where faqId=$delete_id";
	if(mysqli_query($con,$query1))
	{
		echo"<script>window.location='adminFAQ.php'</script>";
	}
	else
	{
		echo "Error: " . $query1 . "<br>" . $con->error;
	}
?>
