<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

	<title>Arihant</title>

	<!--<link rel="shortcut icon" href="assets/images/gt_favicon.png">-->

	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<!--<link rel="stylesheet" href="assets/css/bootstrap.min.css">-->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/heroic-features.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	</head>
	<body class="home">
		<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php">Arihant</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
				<!--
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-left.html">Left Sidebar</a></li>
							<li class="active"><a href="sidebar-right.html">Right Sidebar</a></li>
						</ul>
					</li>
				-->
					<li><a href="displayProducts.php">Products</a></li>
					<li><a href="contactus.php">Contact</a></li>
				<!--	<li><a class="btn" href="adminpage.php">Admin</a></li>-->
					<?php
						if (!isset($_SESSION['username']))
						{
							echo"<li><a href='#' data-toggle='modal' data-target='#myLoginModal'><span class='glyphicon glyphicon-log-in'></span> Admin Login</a></li>";
						}
						else
						{
							//<a href="login.php?action=logout">Logout</a>
							echo"<li><a href='login.php?action=logout'><span class='glyphicon glyphicon-log-in'></span> Log Out</a></li>";
						}
					?>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>

	<div class="modal fade" id="myLoginModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Admin Login</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="login.php">
          	<div class="row">
          		<div class="col-md-2">UserName:</div>
          		<div class="col-md-6"><input type="text" name="username"></div>
          	</div><br>
          	<div class="row">
          		<div class="col-md-2">Password:</div>
          		<div class="col-md-6"><input type="password" name="password" /></div>
          	</div><br>
          	<!--<div class="row">
          		<div class="col-md-8"><div class="g-recaptcha" data-sitekey="6LflyxsTAAAAADDF1bDA8x7r6sQvMC8PUT3rPDKX"></div><br></div>
          	</div><br>-->
          	<div class="row">
          		<div class="col-md-4"><input type="submit" name="bttLogin" value="Login"></div>
          		<div class="col-md-4"><input type="button" value="Clear"></div>
          	</div>


          </form>
        </div>

      </div>
    </div>
  </div>

	</body>
</html>
