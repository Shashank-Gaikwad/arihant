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
	$c=0;
	$productImage1_array=array();
	$productImage2_array=array();
	$productImage3_array=array();
	$productImage4_array=array();
  $query3="select productImage1,productImage2,productImage3,productImage4 from product where templateId=$delete_id";
  $result3=mysqli_query($con,$query3);
  while($row=mysqli_fetch_array($result3))
  {
    $productImage1[$c]=$row['productImage1'];
    $productImage2[$c]=$row['productImage2'];
    $productImage3[$c]=$row['productImage3'];
    $productImage4[$c]=$row['productImage4'];
		$c++;
  }
	for($i=0;$i<$c;$i++)
	{
		if($productImage1[$i])
	    unlink($productImage1[$i]);
	  if($productImage2[$i])
	    unlink($productImage2[$i]);
	  if($productImage3[$i])
	    unlink($productImage3[$i]);
	  if($productImage4[$i])
	    unlink($productImage4[$i]);
	}


	$query1="delete from template where templateId=$delete_id";
  $query2="delete from product where templateId=$delete_id";
	if(mysqli_query($con,$query2) && mysqli_query($con,$query1))
	{
		//echo "template deleted successfully";
		echo"<script>window.location='viewTemplate.php'</script>";
	}
	else
	{
		echo "Error: " . $query1 . "<br>" . $con->error;
	}
?>
