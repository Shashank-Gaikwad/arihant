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

  $q="select newsImage from news where newsId=$delete_id";
  $r=mysqli_query($con,$q);
  while($ans=mysqli_fetch_array($r))
  {
    $image=$ans['newsImage'];
  }
  unlink($image);

	$query1="delete from news where newsId=$delete_id";
	if(mysqli_query($con,$query1))
	{
		echo"<script>window.location='adminNews.php'</script>";
	}
	else
	{
		echo "Error: " . $query1 . "<br>" . $con->error;
	}
?>
