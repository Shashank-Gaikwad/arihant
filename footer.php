<html>
<head>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</head>

<body>
<?php include'database_connection.php';?>
<?php
	$query="select * from websiteinfo";
	$result=mysqli_query($con,$query);

	while($row=mysqli_fetch_array($result))
	{
		$websiteName=$row['websiteName'];
		$mobileNumber1=$row['mobileNumber1'];
		$emailId=$row['emailId'];
		$address=$row['address'];
		$aboutUsText=$row['aboutUsText'];
	}
?>
<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">

					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p><?php echo $mobileNumber1;?><br>
								<a href="mailto:#"><?php echo $emailId; ?></a><br>
								<br>
								<?php echo $address;?>
							</p>
						</div>
					</div>

					<!--<div class="col-md-3 widget">
						<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>
						</div>
					</div>-->

					<div class="col-md-6 widget">
						<h3 class="widget-title">About Us</h3>
						<div class="widget-body">
							<?php echo $aboutUsText; ?>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="index.php">Home</a> |
								<a href="about.php">About</a> |
								<a href="sidebar-right.html">Charity</a> |
								<a href="contactus.php">Contact</a> |
								<!--<b><a href="adminpage.php">Admin</a></b>-->
								<?php
									if (!isset($_SESSION['username']))
									{
										echo"<b><a href='#' data-toggle='modal' data-target='#myLoginModal'>Admin</a></b>";
									}
									else
									{
										//<a href="login.php?action=logout">Logout</a>
										echo"<b><a href='login.php?action=logout'>Log Out</a></b>";
									}
								?>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2016, Arihant Suppliers. Designed by <a href="" rel="designer">Neeta Tech</a>
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>
	</body>

	</html>
