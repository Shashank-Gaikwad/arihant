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
  <head>
    <title>Arihant</title>
  </head>
  <body>
    <?php include'header.php'; ?>
    <br><br><br>
		<center><h2>Post News</h2></center>
		<br>
    <div class="container">
        <form role="form" action="insertNews.php" method=POST enctype="multipart/form-data">
            <div class="row">
              <div class="form-group">
                  <center><label for="newsTitle">News Title:</label></center>
                  <input type="text" class="form-control" id="newsTitle" name="newsTitle" placeholder="News Title" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                  <center><label for="newsText">News Text:</label></center>
                  <input type="text" class="form-control" id="newsText" name="newsText" placeholder="News Description" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                  <center><label for="startDate">Start Date:</label></center>
                  <input type="date" class="form-control" id="startDate" name="startDate" placeholder="Start Date" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                  <center><label for="endDate">End Date:</label></center>
                  <input type="date" class="form-control" id="endDate" name="endDate" placeholder="End Date" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                  <center><label for="newsImage">News Image:</label></center>
                  <input type="file" class="form-control" id="newsImage" name="newsImage" placeholder="News Image" required>
              </div>
            </div>

            <div class="row">
              <center><button type="submit" value="submit" class="btn btn-success btn-lg">Post</button>

              <button type="reset" value="reset" class="btn btn-success btn-lg">Clear</button></center>
            </div>
        </form>
    </div>
  </body>
</html>
<?php include'footer.php'; ?>
