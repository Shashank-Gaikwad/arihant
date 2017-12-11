<?php

$pro_name_flag=0;
$sku_flag=0;
$pro_alt_name_flag=0;
$pro_type_flag=0;
$pro_subtype_flag=0;
$pro_quality_flag=0;
$pro_material_flag=0;
$pro_size_flag=0;
$pro_length_flag=0;
$pro_height_flag=0;
$pro_width_flag=0;
$pro_thickness_flag=0;
$pro_dia_flag=0;
$pro_inside_dia_flag=0;
$pro_outside_dia_flag=0;
$std_pkt_flag=0;
$price_per_pkt_flag=0;
$model_number_flag=0;
$thread_flag=0;
$capacity_flag=0;
$std_lift_flag=0;
$lift_height_min_flag=0;
$lift_height_max_flag=0;
$no_of_holes_flag=0;
$slider_flag=0;
$warranty_flag=0;
$remark1_flag=0;
$remark2_flag=0;
$remark3_flag=0;
$featurs_flag=0;
$application_flag=0;
$img_flag=0;


//echo "hi";
$pro_name=$_POST['product_name'];
$sku=$_POST['sku'];
$pro_alt_name=$_POST['product_alt_name'];
$pro_type=$_POST['product_type'];
$pro_subtype=$_POST['product_subtype'];
$pro_quality=$_POST['product_quality'];
$pro_material=$_POST['product_material'];
$pro_size=$_POST['product_size'];
$pro_length=$_POST['product_length'];
$pro_height=$_POST['product_height'];
$pro_width=$_POST['product_width'];
$pro_thickness=$_POST['product_thickness'];
$pro_dia=$_POST['product_diameter'];
$pro_inside_dia=$_POST['inside_dia'];
$pro_outside_dia=$_POST['outside_dia'];
$std_pkt=$_POST['std_pkt'];
$price_per_pkt=$_POST['price_per_pkt'];
$model_number=$_POST['model_number'];
$thread=$_POST['thread'];
$capacity=$_POST['capacity'];
$std_lift=$_POST['standered_lift'];
$lift_height_min=$_POST['lift_height_min'];
$lift_height_max=$_POST['lift_height_max'];
$no_of_holes=$_POST['no_of_holes'];
$slider=$_POST['slider'];
$warranty=$_POST['warranty'];
$remark1=$_POST['remark1'];
$remark2=$_POST['remark2'];
$remark3=$_POST['remark3'];
$featurs=$_POST['features'];
$application=$_POST['application'];
//echo "hi2";



if(isset($_FILES['product_img']))
	{
		if (($_FILES['product_img']['type']=='image/gif') || ($_FILES['product_img']['type']=='image/jpeg') ||($_FILES['product_img']['type']=='image/png') || ($_FILES['product_img']['type']=='image/jpg'))
		{
			if($_FILES['product_img']['error']>0)
			{
				echo "Error:".$_FILES['product_img']['error']."<br>";
			}
			else
			{
				echo "hello";
				echo"<script>alert('hello');</script>";

				$name=$_FILES['product_img']['name'];
				//echo "file name=".$_FILES['file']['name'];
				$target_dir = "images/";
				$target_file = $target_dir.basename($_FILES['product_img']['name']);
				if(file_exists($target_file))
				{
					echo "<script>alert('file with this name already exists in target directory');</script>";
					//echo "<script>window.location='addProduct.php'</script>";
				}
				else
				{
					move_uploaded_file($_FILES['product_img']['tmp_name'], $target_file);
				}
			}
		}
		else
		{
			echo "file is not image";
			echo "<script>alert('unsupported file format');</script>";
		}
	}

$con=mysqli_connect("localhost","root","","arihant");
$query="insert into product(productImg,productName,sku,productAltName,productType,productSubType,productQuality,productMaterial,productSize,productLength,productHeight,productWidth,productThickness,productDiameter,productInsideDia,productOutsideDia,productStanderdPkt,pricePerPack,modelNumber,Thread,Capacity,stdLift,liftHieghtMin,liftHeightMax,noOfHoles,Slider,Warrenty,remark1,remark2,remark3,Features,Application)values('$target_file','$pro_name','$sku','$pro_alt_name','$pro_type','$pro_subtype','$pro_quality','$pro_material','$pro_size','$pro_length','$pro_height','$pro_width','$pro_thickness','$pro_dia','$pro_inside_dia','$pro_outside_dia','$std_pkt','$price_per_pkt','$model_number','$thread','$capacity','$std_lift','$lift_height_min','$lift_height_max','$no_of_holes','$slider','$warranty','$remark1','$remark2','$remark3','$featurs','$application')";
$result=mysqli_query($con,$query);



 ?>
