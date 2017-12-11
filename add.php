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
	echo"template=$templateName";
	$query="select * from template where templateName='$templateName'";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		//$tsku=$row['sku'];
		//$tproductName=$row['productName'];
		$templateId=$row['templateId'];
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
	echo"<br>templateId=$templateId<br>t1=$t1<br>t2=$t2<br>t3=$t3<br>t4=$t4<br>t5=$t5<br>t6=$t6<br>t7=$t7<br>t8=$t8<br>t9=$t9<br>t10=$t10<br>t11=$t11<br>t12=$t12<br>";
	$sku=$_POST['sku'];
	$productName=$_POST['productName'];
	$productAltName=$_POST['productAltName'];
	$productQuality=$_POST['productQuality'];
	$productMaterial=$_POST['productMaterial'];
	$productPrice=$_POST['productPrice'];
	$productImage1=$row['productImage1'];
	$productImage2=$row['productImage2'];
	$productImage3=$row['productImage3'];
	$productImage4=$row['productImage4'];
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


echo"after concat<br><br>";

echo"a1=$a1<br>a2=$a2<br>a3=$a3<br>a4=$a4<br>a5=$a5<br>a6=$a6<br>a7=$a7<br>a8=$a8<br>a9=$a9<br>a10=$a10<br>a11=$a11<br>a12=$a12<br>";

	$image1_flag=0;
	$image2_flag=0;
	$image3_flag=0;
	$image4_flag=0;

if($_FILES['productImage1']['tmp_name'])
	{
		if (($_FILES['productImage1']['type']=='image/gif') || ($_FILES['productImage1']['type']=='image/jpeg') ||($_FILES['productImage1']['type']=='image/png') || ($_FILES['productImage1']['type']=='image/jpg'))
		{
			if($_FILES['productImage1']['error']>0)
			{
				echo "Error:".$_FILES['productImage1']['error']."<br>";
			}
			else
			{
				//echo "hello";
				//echo"<script>alert('hello');</script>";

				$name=$_FILES['productImage1']['name'];
				//echo "file name=".$_FILES['file']['name'];
				$target_dir = "images/";
				$target_file1 = $target_dir.basename($_FILES['productImage1']['name']);
				if(file_exists($target_file1))
				{
					echo "<script>alert('file with this name already exists in target directory');</script>";
					//echo "<script>window.location='addProduct.php'</script>";
				}
				else
				{
					move_uploaded_file($_FILES['productImage1']['tmp_name'], $target_file1);
				}
			}
		}
		else
		{
			echo "file is not image";
			echo "<script>alert('unsupported file format');</script>";
		}
	}

	if($_FILES['productImage2']['tmp_name'])
	{
		if (($_FILES['productImage2']['type']=='image/gif') || ($_FILES['productImage2']['type']=='image/jpeg') ||($_FILES['productImage2']['type']=='image/png') || ($_FILES['productImage2']['type']=='image/jpg'))
		{
			if($_FILES['productImage2']['error']>0)
			{
				echo "Error:".$_FILES['productImage2']['error']."<br>";
			}
			else
			{
				//echo "hello";
				//echo"<script>alert('hello');</script>";

				$name=$_FILES['productImage2']['name'];
				//echo "file name=".$_FILES['file']['name'];
				$target_dir = "images/";
				$target_file2 = $target_dir.basename($_FILES['productImage2']['name']);
				if(file_exists($target_file2))
				{
					echo "<script>alert('file with this name already exists in target directory');</script>";
					//echo "<script>window.location='addProduct.php'</script>";
				}
				else
				{
					move_uploaded_file($_FILES['productImage2']['tmp_name'], $target_file2);
				}
			}
		}
		else
		{
			echo "file is not image";
			echo "<script>alert('unsupported file format');</script>";
		}
	}

	if($_FILES['productImage3']['tmp_name'])
	{
		if (($_FILES['productImage3']['type']=='image/gif') || ($_FILES['productImage3']['type']=='image/jpeg') ||($_FILES['productImage3']['type']=='image/png') || ($_FILES['productImage3']['type']=='image/jpg'))
		{
			if($_FILES['productImage3']['error']>0)
			{
				echo "Error:".$_FILES['productImage1']['error']."<br>";
			}
			else
			{
				//echo "hello";
				//echo"<script>alert('hello');</script>";

				$name=$_FILES['productImage3']['name'];
				//echo "file name=".$_FILES['file']['name'];
				$target_dir = "images/";
				$target_file3 = $target_dir.basename($_FILES['productImage3']['name']);
				if(file_exists($target_file3))
				{
					echo "<script>alert('file with this name already exists in target directory');</script>";
					//echo "<script>window.location='addProduct.php'</script>";
				}
				else
				{
					move_uploaded_file($_FILES['productImage3']['tmp_name'], $target_file3);
				}
			}
		}
		else
		{
			echo "file is not image";
			echo "<script>alert('unsupported file format');</script>";
		}
	}

	if($_FILES['productImage4']['tmp_name'])
	{
		if (($_FILES['productImage4']['type']=='image/gif') || ($_FILES['productImage4']['type']=='image/jpeg') ||($_FILES['productImage4']['type']=='image/png') || ($_FILES['productImage4']['type']=='image/jpg'))
		{
			if($_FILES['productImage4']['error']>0)
			{
				echo "Error:".$_FILES['productImage4']['error']."<br>";
			}
			else
			{
				//echo "hello";
				//echo"<script>alert('hello');</script>";

				$name=$_FILES['productImage4']['name'];
				//echo "file name=".$_FILES['file']['name'];
				$target_dir = "images/";
				$target_file4 = $target_dir.basename($_FILES['productImage4']['name']);
				if(file_exists($target_file4))
				{
					echo "<script>alert('file with this name already exists in target directory');</script>";
					//echo "<script>window.location='addProduct.php'</script>";
				}
				else
				{
					move_uploaded_file($_FILES['productImage4']['tmp_name'], $target_file4);
				}
			}
		}
		else
		{
			echo "file is not image";
			echo "<script>alert('unsupported file format');</script>";
		}
	}

	if($_FILES['productImage1']['tmp_name'])
			$image1_flag=1;

		if($_FILES['productImage2']['tmp_name'])
			$image2_flag=1;

		if($_FILES['productImage3']['tmp_name'])
			$image3_flag=1;

		if($_FILES['productImage4']['tmp_name'])
			$image4_flag=1;

//$query="insert into product(productImg,productName,sku,productAltName,productType,productSubType,productQuality,productMaterial,productSize,productLength,productHeight,productWidth,productThickness,productDiameter,productInsideDia,productOutsideDia,productStanderdPkt,pricePerPack,modelNumber,Thread,Capacity,stdLift,liftHeightMin,liftHeightMax,noOfHoles,Slider,Warrenty,remark1,remark2,remark3,Features,Application)values('$target_file','$pro_name','$sku','$pro_alt_name','$pro_type','$pro_subtype','$pro_quality','$pro_material',$pro_size,$pro_length,$pro_height,$pro_width,$pro_thickness,$pro_dia,$pro_inside_dia,$pro_outside_dia,$std_pkt,$price_per_pkt,$model_number,$thread,$capacity,$std_lift,$lift_height_min,$lift_height_max,$no_of_holes,'$slider','$warranty','$remark1','$remark2','$remark3','$featurs','$application')";
//$query="insert into product values('$sku','$productName','$productAltName','$productQuality','$productMaterial','$productPrice','$target_file1','$target_file2','$target_file3','$target_file4','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12',$templateId)";
//$result=mysqli_query($con,$query);

if($image1_flag==1)
	$query="insert into product(sku,productName,productAltName,productQuality,productMaterial,productPrice,productImage1,a1,a2,a3,a4,a5,a6,a7,a8,a9,a10,a11,a12,templateId) values('$sku','$productName','$productAltName','$productQuality','$productMaterial',$productPrice,'$target_file1','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12',$templateId)";
if($image1_flag==1 && $image2_flag==1)
	$query="insert into product(sku,productName,productAltName,productQuality,productMaterial,productPrice,productImage1,productImage2,a1,a2,a3,a4,a5,a6,a7,a8,a9,a10,a11,a12,templateId) values('$sku','$productName','$productAltName','$productQuality','$productMaterial',$productPrice,'$target_file1','$target_file2','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12',$templateId)";
if($image1_flag==1 && $image3_flag==1)
	$query="insert into product(sku,productName,productAltName,productQuality,productMaterial,productPrice,productImage1,productImage3,a1,a2,a3,a4,a5,a6,a7,a8,a9,a10,a11,a12,templateId) values('$sku','$productName','$productAltName','$productQuality','$productMaterial',$productPrice,'$target_file1','$target_file3','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12',$templateId)";
if($image1_flag==1 && $image4_flag==1)
	$query="insert into product(sku,productName,productAltName,productQuality,productMaterial,productPrice,productImage1,productImage4,a1,a2,a3,a4,a5,a6,a7,a8,a9,a10,a11,a12,templateId) values('$sku','$productName','$productAltName','$productQuality','$productMaterial',$productPrice,'$target_file1','$target_file4','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12',$templateId)";
if($image1_flag==1 && $image2_flag==1 && $image3_flag==1)
	$query="insert into product(sku,productName,productAltName,productQuality,productMaterial,productPrice,productImage1,productImage2,productImage3,a1,a2,a3,a4,a5,a6,a7,a8,a9,a10,a11,a12,templateId) values('$sku','$productName','$productAltName','$productQuality','$productMaterial',$productPrice,'$target_file1','$target_file2','$target_file3','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12',$templateId)";
if($image1_flag==1 && $image2_flag==1 && $image4_flag==1)
	$query="insert into product(sku,productName,productAltName,productQuality,productMaterial,productPrice,productImage1,productImage2,productImage4,a1,a2,a3,a4,a5,a6,a7,a8,a9,a10,a11,a12,templateId) values('$sku','$productName','$productAltName','$productQuality','$productMaterial',$productPrice,'$target_file1','$target_file2','$target_file4','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12',$templateId)";
if($image1_flag==1 && $image3_flag==1 && $image4_flag==1)
	$query="insert into product(sku,productName,productAltName,productQuality,productMaterial,productPrice,productImage1,productImage3,productImage4,a1,a2,a3,a4,a5,a6,a7,a8,a9,a10,a11,a12,templateId) values('$sku','$productName','$productAltName','$productQuality','$productMaterial',$productPrice,'$target_file1','$target_file3','$target_file4','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12',$templateId)";
if($image1_flag==1 && $image2_flag==1 && $image3_flag==1 && $image4_flag==1)
	$query="insert into product(sku,productName,productAltName,productQuality,productMaterial,productPrice,productImage1,productImage2,productImage3,productImage4,a1,a2,a3,a4,a5,a6,a7,a8,a9,a10,a11,a12,templateId) values('$sku','$productName','$productAltName','$productQuality','$productMaterial',$productPrice,'$target_file1','$target_file2','$target_file3','$target_file4','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12',$templateId)";
if(mysqli_query($con,$query))
{
	echo"<script>window.location='adminProduct.php?id=product_success';</script>";
}
else
{
	echo"Error : ".$con->error;
}


 ?>
