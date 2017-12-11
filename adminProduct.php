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

<html>
	<body>
		<?php include'header.php';?>
		<div id="about" class="container-fluid">
  <div class="row">
    <br>
    <div class="container">
      <?php include'adminHeader.php'; ?>
    </div>
	<br>
  <div class="container">
	<a href="createTemplate.php" class="btn btn-default btn-lg" role="button"><span class="glyphicon glyphicon-plus"></span>Create Template</a>
	<a href="selectTemplate.php" class="btn btn-default btn-lg" role="button"><span class="glyphicon glyphicon-plus"></span>Add New product</a>
	<a href="viewTemplate.php" class="btn btn-default btn-lg" role="button"><span class="glyphicon glyphicon-edit"></span>View Templates</a>
  <a href="adminProduct.php" class="btn btn-default btn-lg" role="button"><span class="glyphicon glyphicon-edit"></span>View Products</a>
</div>
  </div>
	<center><h2>Products</h2></center>
	<br>
  <?php
  include'database_connection.php';
	//$con=mysqli_connect('localhost','root','','arihant') or die(mysqli_connect_error());
	if($_GET)
		{
			if($_GET['id'])
			{
				$id=$_GET['id'];
				if($id=="template_success")
					echo"<center>template created successfully</center>";
				if($id=="product_success")
					echo"<center>product added successfully</center>";
				if($id=="product_edit_success")
					echo"<center>product updated successfully</center>";
			}
		}
	$count=0;
	$sku_array=array();
	$productName_array=array();
	$productAltName_array=array();
	$productQuality_array=array();
	$productMaterial_array=array();
	$query="select sku,productName,productAltName,productQuality,productMaterial from product";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$sku_array[$count]=$row['sku'];
		$productName_array[$count]=$row['productName'];
		$productAltName_array[$count]=$row['productAltName'];
		$productQuality_array[$count]=$row['productQuality'];
		$productMaterial_array[$count]=$row['productMaterial'];
		$count++;
	}
  ?>
  <div class="row">
    <div class="col-sm-12">
    <table class="table table-hover">
    <thead>
      <tr>

		<th>SKU</th>
        <th>Name</th>
		<th>Alt Name</th>
        <th>Quality</th>
		<th>Material</th>
		<th></th>
		<th></th>
      </tr>
    </thead>
    <tbody>
	<?php
		for($i=0;$i<$count;$i++)
		{
			echo"
			<tr>
				<td>$sku_array[$i]</td>
				<td>$productName_array[$i]</td>
				<td>$productAltName_array[$i]</td>
				<td>$productQuality_array[$i]</td>
				<td>$productMaterial_array[$i]</td>
				<td><a href='editProduct.php?q=$sku_array[$i]' class='btn btn-default btn-sm' role='button'><span class='glyphicon glyphicon-edit'></span>Edit</a></td>
				<td><a href='deleteProduct.php?q=$sku_array[$i]' class='btn btn-default btn-sm' role='button'><span class='glyphicon glyphicon-trash'></span>Delete</a></td>
			</tr>
			";
		}
	?>

    </tbody>
  </table>
    </div>
    <!-- <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div> -->
  </div>
</div>
	</body>
</html>
<?php include'footer.php';?>
