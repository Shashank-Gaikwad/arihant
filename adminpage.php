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
	</div>
	<center><h2>Website Settings</h2></center>
	<br>
  <?php
	//$con=mysqli_connect('localhost','root','','arihant') or die(mysqli_connect_error());
	include'database_connection.php';
	if($_GET)
		{
			if($_GET['id'])
			{
				$id=$_GET['id'];
				if($id=="update_success")
					echo"<center>Website information updated successfully</center>";
			}
		}
  ?>
	<br>
	<div class="container">
  <div class="row">

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

					<?php
						echo"
						<form action='updateWebsiteInfo.php' method='POST'>
							<div class='input-group form-group'>
								<span class='input-group-addon' id='name'>Website Name</span>
								<input type='text' name='name' class='form-control' aria-describedby='name' placeholder='Full Name' value='$websiteName' disabled>
							</div>

							<div class='input-group form-group'>
								<span class='input-group-addon' id='email'> &nbsp&nbsp&nbsp&nbsp Email ID &nbsp&nbsp&nbsp&nbsp </span>
								<input type='email' name='email' class='form-control' aria-describedby='email' placeholder='Email ID' value='$emailId'>
							</div>

							<div class='input-group form-group'>
								<span class='input-group-addon' id='phno'> &nbsp Mobile No 1 &nbsp </span>
								<input type='text' name='mobile1' pattern='[0-9]{10}' class='form-control' aria-describedby='mobile1' placeholder='Phone No' value='$mobileNumber1'>
							</div>

							<div class='input-group form-group'>
								<span class='input-group-addon' id='address'> &nbsp&nbsp&nbsp&nbsp Address &nbsp&nbsp&nbsp&nbsp </span>
								<input type='text' name='address' class='form-control' aria-describedby='address' placeholder='Address' value='$address'>
							</div>

							<div class='input-group form-group'>
								<span class='input-group-addon' id='aboutus'>&nbsp About Us Text</span>
								<input type='text' name='aboutUsText' class='form-control' aria-describedby='aboutUsText' placeholder='About Us Text' value='$aboutUsText'>
							</div>

							<div class='col-md-6'>
								<button type='submit' class='btn btn-primary btn-lg btn-block' style='background-color:#404040;'>Update</button>
							</div>
							<div class='col-md-6'>
								<button type='submit' class='btn btn-primary btn-lg btn-block' style='background-color:#404040;'>Cancel</button>
							</div>
						</form>
						";
						?>


</div>
</div>
	</body>
</html>
<?php include'footer.php';?>
