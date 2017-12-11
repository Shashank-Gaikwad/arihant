<?php
	session_start();
?>

<html>
<head>
<script type="text/javascript">
	function image_click(image_id){
		var small_image = document.getElementById(image_id);
		small_image.setAttribute("border", "2px");

		var child = document.getElementById("myid");
		document.getElementById("image_div").removeChild(child);
		var image = document.createElement("img");
		image.setAttribute("height", "570");
		image.setAttribute("width", "820");
		image.setAttribute("class", "img-responsive");
		image.setAttribute("src", image_id);
		image.setAttribute("id", "myid");
		document.getElementById("image_div").appendChild(image);
	}
</script>
<style>
th,td
{
	color:black;
}
</style>
<!--<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
<!-- <link rel="stylesheet" href="mylib/bootstrap/css/bootstrap.min.css">
<script src="mylib/jquery-2.2.3.min.js"></script>
<script src="mylib/bootstrap/js/bootstrap.min.js"></script> -->

</head>
<body>
	<?php include 'header.php'; ?>
	<br>
	<!-- <div class="row" style="background-color: rgba(0, 0, 0, 0.2);">
		<div class="col-md-2"><br><img class="responsive" alt="logo" width="125px" height="125px" /><br></div>
		<div class="col-md-10"><center><h2>Ideal Jewellery</h2></center></div>
	</div> -->

	<br><br>
<div class="container">
	<?php
	if($_GET)
	{
		if($_GET['product'])
		{
			$pid=$_GET['product'];
		}
	}
	include'database_connection.php';
	//$con=mysqli_connect('localhost','root','','arihant') or die(mysqli_connect_error());
	$image_count=0;
	$image_array=array();
	$query="select * from product where sku='$pid'";
	$result=$con->query($query);
	//$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	//while($row=$result->fetch_assoc())
	{
		$sku=$row['sku'];
		$productName=$row['productName'];
		$productAltName=$row['productAltName'];
		$productQuality=$row['productQuality'];
		$productMaterial=$row['productMaterial'];
		$productPrice=$row['productPrice'];
		$productImage1=$row['productImage1'];
		if($productImage1!=NULL)
		{
			$image_array[$image_count]=$productImage1;
			$image_count++;
		}
		$productImage2=$row['productImage2'];
		if($productImage2!=NULL)
		{
			$image_array[$image_count]=$productImage2;
			$image_count++;
		}
		$productImage3=$row['productImage3'];
		if($productImage3!=NULL)
		{
			$image_array[$image_count]=$productImage3;
			$image_count++;
		}
		$productImage4=$row['productImage4'];
		if($productImage4!=NULL)
		{
			$image_array[$image_count]=$productImage4;
			$image_count++;
		}
		$a1=$row['a1'];
		$a2=$row['a2'];
		$a3=$row['a3'];
		$a4=$row['a4'];
		$a5=$row['a5'];
		$a6=$row['a6'];
		$a7=$row['a7'];
		$a8=$row['a8'];
		$a9=$row['a9'];
		$a10=$row['a10'];
		$a11=$row['a11'];
		$a12=$row['a12'];
	}
	$a1=explode("~",$a1);
	$a2=explode("~",$a2);
	$a3=explode("~",$a3);
	$a4=explode("~",$a4);
	$a5=explode("~",$a5);
	$a6=explode("~",$a6);
	$a7=explode("~",$a7);
	$a8=explode("~",$a8);
	$a9=explode("~",$a9);
	$a10=explode("~",$a10);
	$a11=explode("~",$a11);
	$a12=explode("~",$a12);
	echo"<div class='row'>
		<div class='col-md-4'>
			<h3 style='color:white;'>$productName</h3>
			<div class='row'>
				<table class='table table-hover'>
			    <tbody>
			      <tr>
			        <td>Product Name</td>
			        <td>$productName</td>
			      </tr>
				   <tr>
			        <td>Product Alternative Name</td>
			        <td>$productAltName</td>
			      </tr>
			      <tr>
			        <td>Product Quality</td>
			        <td>$productQuality</td>
			      </tr>
				  <tr>
			        <td>Product Material</td>
			        <td>$productMaterial</td>
			      </tr>
			      <tr>
			        <td>Product Price</td>
			        <td>$productPrice</td>
			      </tr>
						";
						if($a1[0]!=NULL)
						{
							echo"
			      <tr>
			        <td>$a1[0]</td>
							<td>$a1[1]</td>
			      </tr>
						";
					  }
						if($a2[0]!=NULL)
						{
							echo"
				   <tr>
			        <td>$a2[0]</td>
							<td>$a2[1]</td>
			      </tr>
						";
						}
						if($a3[0]!=NULL)
						{
							echo"
				   <tr>
			        <td>$a3[0]</td>
							<td>$a3[1]</td>
			      </tr>
						";
						}
						if($a4[0]!=NULL)
						{
							echo"
				   <tr>
			        <td>$a4[0]</td>
							<td>$a4[1]</td>
			      </tr>
						";
						}
						if($a5[0]!=NULL)
						{
							echo"
				   <tr>
			        <td>$a5[0]</td>
							<td>$a5[1]</td>
			      </tr>
						";
						}
						if($a6[0]!=NULL)
						{
							echo"
				   <tr>
			        <td>$a6[0]</td>
							<td>$a6[1]</td>
			      </tr>
						";
						}
						if($a7[0]!=NULL)
						{
							echo"
				   <tr>
			        <td>$a7[0]</td>
							<td>$a7[1]</td>
			      </tr>
						";
						}
						if($a8[0]!=NULL)
						{
							echo"
				   <tr>
			        <td>$a8[0]</td>
							<td>$a8[1]</td>
			      </tr>
						";
						}
						if($a9[0]!=NULL)
						{
							echo"
				   <tr>
			        <td>$a9[0]</td>
							<td>$a9[1]</td>
			      </tr>
						";
						}
						if($a10[0]!=NULL)
						{
							echo"
				   <tr>
			        <td>$a10[0]</td>
							<td>$a10[1]</td>
			      </tr>
						";
						}
						if($a11[0]!=NULL)
						{
							echo"
				   <tr>
			        <td>$a11[0]</td>
							<td>$a11[1]</td>
			      </tr>
						";
						}
						if($a12[0]!=NULL)
						{
							echo"
				   <tr>
			        <td>$a12[0]</td>
							<td>$a12[1]</td>
			      </tr>
						";
						}
						echo"
			    </tbody>
			  </table>
			  <br>

			  <h4>Price:<font color='red'> Rs. $productPrice</font></h4>


			</div>
		</div>
		<div class='col-md-8'>
		<center>
			<img alt='img' src='$productImage1' height='417' width='417'><br>
			<button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal'>View Gallery</button>
		</center>
		</div>
	</div>";
?>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Gallery</h4>
        </div>
        <div class="modal-body">
          <div class="row">
          	<div class="col-md-12" id="image_div">
          	<img alt="img" src=<?php echo"$productImage1";?> class="img-thumbnail" id="myid" height='570' width='820'>
          	</div>
          </div>

		<div class='row'>
          	<div class='col-md-12'>
			<?php
				for($i=0;$i<$image_count;$i++)
				{
					echo"<img id='$image_array[$i]' alt='img' src='$image_array[$i]' class='img-thumbnail' height='100px' width='100px' onclick='image_click(this.id)'>";
				}
			?>

          	</div>
        </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<br>
<?php include 'footer.php'; ?>
