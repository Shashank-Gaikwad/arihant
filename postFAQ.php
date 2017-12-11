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
		<center><h2>Post FAQ</h2></center>
		<br>
    <div class="container">
        <form role="form" action="insertFAQ.php" method=POST>
            <div class="row">
              <div class="form-group">
                  <center><label for="quest">Question:</label></center>
                  <input type="text" class="form-control" id="quest" name="quest" placeholder="Question" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                  <center><label for="quest">Answer:</label></center>
                  <input type="text" class="form-control" id="ans" name="ans" placeholder="Answer" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                  <center><label for="home">Show on homepage:</label>
                  <input type="checkbox" id="home" name="home"></center>
              </div>
            </div>
            <div class="row">
              <center><button type="submit" value="submit" class="btn btn-success btn-lg">Add</button>

              <button type="reset" value="reset" class="btn btn-success btn-lg">Clear</button></center>
            </div>
        </form>
    </div>
  </body>
</html>
<?php include'footer.php'; ?>
