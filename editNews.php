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
		<center><h2>Edit News</h2></center>
		<br>
    <div class='container'>
      <?php
      include'database_connection.php';
      if($_GET)
        {
          if($_GET['q'])
          {
            $id=$_GET['q'];
          }
        }
        $query="select * from news where newsId=$id";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($result))
        {
          $newsId=$row['newsId'];
          $newsTitle=$row['newsTitle'];
          $newsImage=$row['newsImage'];
          $newsText=$row['newsText'];
          $newsStart=$row['newsStart'];
          $newsEnd=$row['newsEnd'];
        }
      echo "
        <form role='form' action='updateNews.php' method=POST>
            <div class='row'>
              <div class='form-group'>
                  <center><label for='newsTitle'>News Title:</label></center>
                  <input type='text' class='form-control' id='newsTitle' name='newsTitle' placeholder='News Title' value='$newsTitle'>
              </div>
            </div>
            <div class='row'>
              <div class='form-group'>
                  <center><label for='newsText'>News Text:</label></center>
                  <input type='text' class='form-control' id='newsText' name='newsText' placeholder='News Description' value='$newsText'>
              </div>
            </div>
            <div class='row'>
              <div class='form-group'>
                  <center><label for='startDate'>Start Date:</label></center>
                  <input type='date' class='form-control' id='startDate' name='startDate' placeholder='Start Date' value='$newsStart'>
              </div>
            </div>
            <div class='row'>
              <div class='form-group'>
                  <center><label for='endDate'>End Date:</label></center>
                  <input type='date' class='form-control' id='endDate' name='endDate' placeholder='End Date' value='$newsEnd'>
              </div>
            </div>
            <div class='row'>
              <div class='form-group'>
                  <center><label for='newsImage'>News Image:</label></center>
                  <input type='file' class='form-control' id='newsImage' name='newsImage' placeholder='News Image' disabled>
              </div>
            </div>

            <input type='hidden' id='editId' name='editId' value=$id>
            <div class='row'>
              <center><button type='submit' value='submit' class='btn btn-success btn-lg'>Update</button>
              <button type='reset' value='reset' class='btn btn-success btn-lg'>Clear</button></center>
            </div>
        </form>
        ";
        ?>
    </div>
  </body>
</html>
<?php include'footer.php'; ?>
