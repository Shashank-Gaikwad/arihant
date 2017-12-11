<?php
	session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Arihant</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/boot.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <?php include'header.php';?>
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
<?php
if($_GET)
	{
		if($_GET['id']=="success")
		{
			echo"<br><br><h6><center>Your query submitted successfully</center></h6>";
		}
	}
?>

<div class="container">
        <div class="row" style="margin: 2em 0em 2em 0em;">
			<div class="page-header">
				<h2 class="text-center"  style="color:#00b300";>
				<b>Contact Us</b></h2>
			</div>
        </div>
   <div class="row">
     <div class="col-md-5 col-md-offset-1">
       <div class="row" style="padding: 2em 2em 2em 2em;">
           <i class="fa fa-user fa-3x col-md-1" aria-hidden="true"></i>
           <h4 class="text-center col-md-6 col-md-offset-1">Mr. Vaibhav Achha</h4>
       </div>
       <div class="row" style="padding: 2em 2em 2em 2em;">
           <i class="fa fa-map-marker fa-3x col-md-1" aria-hidden="true"></i>
           <p class="text-center col-md-8 col-md-offset-1">
               <?php echo $address; ?>
           </p>
       </div>
       <div class="row" style="padding: 2em 2em 2em 2em;">
           <i class="fa fa-phone fa-3x col-md-1" aria-hidden="true"></i>
           <p class="text-center col-md-8 col-md-offset-1">
               <?php echo $mobileNumber1; ?>
           </p>
       </div>
       <div class="row" style="padding: 1em 1em 1em 1em;">
           <i class="fa fa-envelope fa-3x col-md-1" aria-hidden="true"></i>
           <p class="text-center col-md-8 col-md-offset-1">
               <?php echo $emailId; ?>
           </p>
       </div>
     </div>
     <div class="col-md-6">
		<form action="insertQuery.php" method="POST">
            <div class="input-group form-group" style="padding: 1em 1em 1em 1em;">
                 <span class="input-group-addon" id="name">&nbsp&nbsp&nbsp&nbsp Name &nbsp&nbsp&nbsp&nbsp&nbsp</span>
                      <input type="text" name="name" pattern="[a-zA-Z\ ]+" class="form-control" aria-describedby="name" placeholder="Name" required>
            </div>

                                      <div class="input-group form-group" style="padding: 1em 1em 1em 1em;">
                                          <span class="input-group-addon" id="phno">&nbsp Mobile No &nbsp</span>
                                          <input type="text" name="mobile" pattern="[0-9]{10}" class="form-control" aria-describedby="mobile" placeholder="Mobile No" required>
                                      </div>

                                      <div class="input-group form-group" style="padding: 1em 1em 1em 1em;">
                                          <span class="input-group-addon" id="email">&nbsp&nbsp Email ID &nbsp&nbsp&nbsp</span>
                                          <input type="email" name="email" class="form-control" aria-describedby="email" placeholder="Email ID" required>
                                      </div>

                                      <div class="input-group form-group" style="padding: 1em 1em 1em 1em;">
                                          <span class="input-group-addon" id="address">Enquiry Text &nbsp&nbsp</span>
                                          <textarea rows="7" name="queryText" class="form-control" aria-describedby="queryText" placeholder="Enquiry" required></textarea>
                                      </div>

                                      <div class="col-md-6">
                                          <button type="submit" class="btn btn-success btn-block">Submit</button>
                                      </div>

                                      <div class="col-md-6">
                                          <button type="reset" class="btn btn-success btn-block">Cancel</button>
                                      </div>
        </form>
     </div>
   </div>
</div>


    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    </body>
    </html>
<?php include'footer.php';?>
