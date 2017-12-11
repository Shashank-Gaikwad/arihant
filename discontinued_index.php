<?php
	session_start();
?>

<?php
if (isset($_SESSION['username']))
{
//echo 'Welcome'.$_SESSION['username'];
//echo "Session is active";
header('Location: adminProduct.php');
}
?>

<html>
	<head>
		<title>Arihant</title>
	</head>
	<body>
		<?php include'header.php'; ?>
			<?php include'database_connection.php';?>
			<?php
	$deleteNews="delete from news where newsEnd<CURDATE()";
	$newsResult=$con->query($deleteNews);
	$newsCount=0;
	$newsId_array=array();
	$newsTitle_array=array();
	$newsImage_array=array();
	$newsText_array=array();
	$newsStart_array=array();
	$newsEnd_array=array();

	$newsQuery="select * from news where newsEnd>=CURDATE()";
	$newsResult=$con->query($newsQuery);
	//$newsResult=mysqli_query($con,$newsQuery);
	//while($row=mysqli_fetch_array($newsResult))
	while($row=$newsResult->fetch_assoc())
	{
		$newsId_array[$newsCount]=$row['newsId'];
		$newsTitle_array[$newsCount]=$row['newsTitle'];
		$newsImage_array[$newsCount]=$row['newsImage'];
		$newsText_array[$newsCount]=$row['newsText'];
		$newsStart_array[$newsCount]=$row['newsStart'];
		$newsEnd_array[$newsCount]=$row['newsEnd'];
		$newsCount++;
	}

?>
		<br><br><br>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
		<?php
	for($i=0;$i<$newsCount;$i++)
	{
		if($i==0)
		{
			echo"
	<li data-target='#myCarousel' data-slide-to='$i' class='active'></li>
		";
		}
		else
		{
			echo"<li data-target='#myCarousel' data-slide-to='$i'></li>";
		}
	}
  ?>

  </ol>



  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
		<?php
		for($i=0;$i<$newsCount;$i++)
		{
			if($i==0)
			{
				echo"
				<div class='item active'>
      <center><img src='$newsImage_array[$i]' alt='banana' height='300' width='500'></center>
      <div class='carousel-caption'>
       <a href='newsDetail.php?news=$newsId_array[$i]' style='color:gold;'><h2>$newsTitle_array[$i]</h2></a>
       <p>$newsText_array[$i]</p>
      </div>
    </div>
				";
			}
			else
			{
				echo"
				<div class='item'>
      <center><img src='$newsImage_array[$i]' alt='banana' height='300' width='500'></center>
      <div class='carousel-caption'>
       <a href='newsDetail.php?news=$newsId_array[$i]' style='color:gold;'><h2>$newsTitle_array[$i]</h2></a>
       <p>$newsText_array[$i]</p>
      </div>
    </div>
				";
			}
		}
   ?>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--<div class="row">
	<center><a href="newsAll.php"><button class='btn btn-sm'>See All News</button></a></center>
</div>-->

<?php
$count=0;
$sku_array=array();
$productName_array=array();
$productAltName_array=array();
$productQuality_array=array();
$productMaterial_array=array();
$productPrice_array=array();
$productImage1_array=array();
$productImage2_array=array();
$productImage3_array=array();
$productImage4_array=array();
$a1_array=array();
$a2_array=array();
$a3_array=array();
$a4_array=array();
$a5_array=array();
$a6_array=array();
$a7_array=array();
$a8_array=array();
$a9_array=array();
$a10_array=array();
$a11_array=array();
$a12_array=array();
$templateId_array=array();
$query="select * from product";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
	$sku_array[$count]=$row['sku'];
	$productName_array[$count]=$row['productName'];
	$productAltName_array[$count]=$row['productAltName'];
	$productQuality_array[$count]=$row['productQuality'];
	$productMaterial_array[$count]=$row['productMaterial'];
	$productPrice_array[$count]=$row['productPrice'];
	$productImage1_array[$count]=$row['productImage1'];
	$productImage2_array[$count]=$row['productImage2'];
	$productImage3_array[$count]=$row['productImage3'];
	$productImage4_array[$count]=$row['productImage4'];
	$a1_array[$count]=$row['a1'];
	$a2_array[$count]=$row['a2'];
	$a3_array[$count]=$row['a3'];
	$a4_array[$count]=$row['a4'];
	$a5_array[$count]=$row['a5'];
	$a6_array[$count]=$row['a6'];
	$a7_array[$count]=$row['a7'];
	$a8_array[$count]=$row['a8'];
	$a9_array[$count]=$row['a9'];
	$a10_array[$count]=$row['a10'];
	$a11_array[$count]=$row['a11'];
	$a12_array[$count]=$row['a12'];
	$templateId_array[$count]=$row['templateId'];
	$count++;
}

?>
<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">Welcome to Arihant Suppliers</h2>
		<p class="text-muted">
			The difference between involvement and commitment is like an eggs-and-ham breakfast:<br>
			the chicken was involved; the pig was committed.
		</p>
	</div>
<!-- /Intro-->
<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">

			<h3 class="text-center thin">New Products</h3>

			<?php
				for($i=$count-3;$i<$count;$i++)
				{
					echo"
					<div class='col-md-4 col-sm-6 highlight  hero-feature'>
											<img src='$productImage1_array[$i]' alt='' height='300' width='300'>
											<div class='caption'>

													<p>$productPrice_array[$i]</p>
													<p>
														 <center> <a href='details.php?product=$sku_array[$i]' class='btn btn-primary'>View Now!</a></center>
													</p>
											</div>
					<h4 class='text-center'>$productName_array[$i]</h4>
					</div>
					";
				}
			?>

			<div class="row">
				<center> <a href='displayProducts.php' class='btn btn-primary'>See More</a></center>
			</div>
			<!--<div class="row">
				<div class="col-md-4 col-sm-6 highlight  hero-feature">
					<div class="thumbnail">
                    <img src="assets/images/3.jpg" alt="" height="400" width="400">
                    <div class="caption">

                        <p>some text for product description</p>
                        <p>
                           <center> <a href="#" class="btn btn-primary">Buy Now!</a></center>
                        </p>
                    </div>
                </div>
				<h4 class="text-center">Product Name</h4>
				</div>
				<div class="col-md-4 col-sm-6 highlight  hero-feature">
					<div class="thumbnail">
                    <img src="assets/images/2.jpg" alt="" height="400" width="400">
                    <div class="caption">

                        <p>some text for product description</p>
                        <p>
                           <center> <a href="#" class="btn btn-primary">Buy Now!</a></center>
                        </p>
                    </div>
                </div>
				<h4 class="text-center">Product Name</h4>
				</div>
				<div class="col-md-4 col-sm-6 highlight  hero-feature">
					<div class="thumbnail">
                    <img src="assets/images/4.jpg" alt="" height="400" width="400">
                    <div class="caption">

                        <p>some text for product description</p>
                        <p>
                           <center> <a href="#" class="btn btn-primary">Buy Now!</a></center>
                        </p>
                    </div>
                </div>
				<h4 class="text-center">Product Name</h4>
				</div>
			</div>--> <!-- /row  -->

		</div>
	</div>
	<div class="jumbotron top-space">
		<div class="container">

			<h3 class="text-center thin">Trending Products</h3>

			<?php
				for($i=$count-3;$i<$count;$i++)
				{
					echo"
					<div class='col-md-4 col-sm-6 highlight  hero-feature'>
											<img src='$productImage1_array[$i]' alt='' height='300' width='300'>
											<div class='caption'>

													<p>$productPrice_array[$i]</p>
													<p>
														 <center> <a href='details.php?product=$sku_array[$i]' class='btn btn-primary'>View Now!</a></center>
													</p>
											</div>
					<h4 class='text-center'>$productName_array[$i]</h4>
					</div>
					";
				}
			?>

			<div class="row">
				<center> <a href='displayProducts.php' class='btn btn-primary'>See More</a></center>
			</div>

			<!--<div class="row">
				<div class="col-md-4 col-sm-6 highlight  hero-feature">
					<div class="thumbnail">
                    <img src="assets/images/3.jpg" alt="" height="400" width="400">
                    <div class="caption">

                        <p>some text for product description</p>
                        <p>
                           <center> <a href="#" class="btn btn-primary">Buy Now!</a></center>
                        </p>
                    </div>
                </div>
				<h4 class="text-center">Product Name</h4>
				</div>
				<div class="col-md-4 col-sm-6 highlight  hero-feature">
					<div class="thumbnail">
                    <img src="assets/images/2.jpg" alt="" height="400" width="400">
                    <div class="caption">

                        <p>some text for product description</p>
                        <p>
                           <center> <a href="#" class="btn btn-primary">Buy Now!</a></center>
                        </p>
                    </div>
                </div>
				<h4 class="text-center">Product Name</h4>
				</div>
				<div class="col-md-4 col-sm-6 highlight  hero-feature">
					<div class="thumbnail">
                    <img src="assets/images/4.jpg" alt="" height="400" width="400">
                    <div class="caption">

                        <p>some text for product description</p>
                        <p>
                           <center> <a href="#" class="btn btn-primary">Buy Now!</a></center>
                        </p>
                    </div>
                </div>
				<h4 class="text-center">Product Name</h4>
				</div>
			</div>--> <!-- /row  -->

		</div>
	</div>
	<?php
		$faqCount=0;
		$faqId_array=array();
		$question_array=array();
		$answer_array=array();
		$query="select * from faq where homepage=1";
		$result=mysqli_query($con,$query);
		while($row=mysqli_fetch_array($result))
		{
			$faqId_array[$faqCount]=$row['faqId'];
			$question_array[$faqCount]=$row['question'];
			$answer_array[$faqCount]=$row['answer'];
			$faqCount++;
		}
		echo"
		<div class='container'>
		<div class='row'>
		";

		for($i=0;$i<$faqCount;$i++)
		{
				echo"
				<div class='col-sm-6'>
					<h3>$question_array[$i]</h3>
					<p>
					$answer_array[$i];
					</p>
				</div>
				";
		}
		echo"
		</div>
		</div>
		";
	?>


		<div class="jumbotron top-space">
			<h4>Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga.</h4>
     		<p class="text-right"><a href="faqDetail.php" class="btn btn-primary btn-large">See more »</a></p>
  		</div>

	</body>

</html>

<?php include'footer.php'; ?>
