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
		<center><h2>Edit FAQ</h2></center>
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
        $query="select * from faq where faqId=$id";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($result))
        {
          $faqId=$row['faqId'];
          $question=$row['question'];
          $answer=$row['answer'];
          $homepage=$row['homepage'];
        }
      echo"
        <form role='form' action='updateFAQ.php' method=POST>
            <div class='row'>
              <div class='form-group'>
                  <center><label for='quest'>Question:</label></center>
                  <input type='text' class='form-control' id='quest' name='quest' placeholder='Question' value='$question'>
              </div>
            </div>
            <div class='row'>
              <div class='form-group'>
                  <center><label for='quest'>Answer:</label></center>
                  <input type='text' class='form-control' id='ans' name='ans' placeholder='Answer' value='$answer'>
              </div>
            </div>
            <div class='row'>
              <div class='form-group'>
                  <center><label for='home'>Show on homepage:</label>
                  <input type='checkbox' id='home' name='home'></center>
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
