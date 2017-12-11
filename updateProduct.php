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

  $pid=$_POST['editProductId'];
	$tid=$_POST['editTemplateId'];

  $query="select * from template where templateId=$tid";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		//$tsku=$row['sku'];
		//$tproductName=$row['productName'];
		$t1=$row['t1'];
		$t2=$row['t2'];
		$t3=$row['t3'];
		$t4=$row['t4'];
		$t5=$row['t5'];
		$t6=$row['t6'];
		$t7=$row['t7'];
		$t8=$row['t8'];
		$t9=$row['t9'];
		$t10=$row['t10'];
		$t11=$row['t11'];
		$t12=$row['t12'];

	}

  $sku=$_POST['sku'];
  $productName=$_POST['productName'];
  $productAltName=$_POST['productAltName'];
  $productQuality=$_POST['productQuality'];
  $productMaterial=$_POST['productMaterial'];
  $productPrice=$_POST['productPrice'];
  //$productImage1=$row['productImage1'];
  //$productImage2=$row['productImage2'];
  //$productImage3=$row['productImage3'];
  //$productImage4=$row['productImage4'];
  $a1=$t1."~".$_POST["$t1"];
	$a2=$t2."~".$_POST["$t2"];
	$a3=$t3."~".$_POST["$t3"];
	$a4=$t4."~".$_POST["$t4"];
	$a5=$t5."~".$_POST["$t5"];
	$a6=$t6."~".$_POST["$t6"];
	$a7=$t7."~".$_POST["$t7"];
	$a8=$t8."~".$_POST["$t8"];
	$a9=$t9."~".$_POST["$t9"];
	$a10=$t10."~".$_POST["$t10"];
	$a11=$t11."~".$_POST["$t11"];
	$a12=$t12."~".$_POST["$t12"];

  $query="update product set sku='$sku',productName='$productName',productAltName='$productAltName',productQuality='$productQuality',productMaterial='$productMaterial',productPrice=$productPrice,a1='$a1',a2='$a2',a3='$a3',a4='$a4',a5='$a5',a6='$a6',a7='$a7',a8='$a8',a9='$a9',a10='$a10',a11='$a11',a12='$a12' where sku='$pid'";
  //$result=mysqli_query($con,$query);
  if(mysqli_query($con,$query))
  {
  	echo"<script>window.location='adminProduct.php?id=product_edit_success';</script>";
  }
  else
  {
  	echo"Error : ".$con->error;
  }
?>
