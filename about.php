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

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom CSS -->
  <!--  <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/boot.css" rel="stylesheet">-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <?php include'header.php'; ?>
    <?php include'database_connection.php'; ?>
    <?php
      $aboutUs_query="select aboutUsText from websiteinfo";
      $result=mysqli_query($con,$aboutUs_query);
      while($row=mysqli_fetch_array($result))
      {
        $text=$row['aboutUsText'];
      }
    ?>
<div class="container">
<br>
<br>
<p>
</p>
        <div class="panel panel-default">
            <div class="panel-heading"><center><h2 style="color:#00b300";><b>About Us</b></h2></center></div>
                <div class="panel-body">
                    <center>
                      <?php echo $text; ?>
                    </center>
                </div>
            </div>
        </div>


            <!-- jQuery -->
            <script src="js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>
            </body>
            </html>
<?php include'footer.php'; ?>
