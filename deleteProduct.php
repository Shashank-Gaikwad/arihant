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

	$query3="select productImage1,productImage2,productImage3,productImage4 from product";
  $result3=mysqli_query($con,$query3);
  while($row=mysqli_fetch_array($result3))
  {
    $productImage1=$row['productImage1'];
    $productImage2=$row['productImage2'];
    $productImage3=$row['productImage3'];
    $productImage4=$row['productImage4'];
  }
  if($productImage1)
    unlink($productImage1);
  if($productImage2)
    unlink($productImage2);
  if($productImage3)
    unlink($productImage3);
  if($productImage4)
    unlink($productImage4);

	$query1="delete from product where sku='$delete_id'";
	if(mysqli_query($con,$query1))
	{
		echo"<script>window.location='adminProduct.php'</script>";
	}
	else
	{
		echo "Error: " . $query1 . "<br>" . $con->error;
	}
?>
