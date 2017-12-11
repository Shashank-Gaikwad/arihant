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
    <br><br>
    <?php
      	//$con=mysqli_connect('localhost','root','','arihant') or die(mysqli_connect_error());
				include'database_connection.php';
        $count=0;
        $templateId_array=array();
        $templateName_array=array();
        $query="select templateId,templateName from template";
        $result=mysqli_query($con,$query);

        while($row=mysqli_fetch_array($result))
        {
          $templateId_array[$count]=$row['templateId'];
          $templateName_array[$count]=$row['templateName'];
          $count++;
        }
    ?>
    <div class="container">
			<center><h2>Select Template</h2></center>
      <div class="row">
        <form action="addProduct2.php" method="post">
          <div class="form-group">
            <label for="sel1">Select Template (select one):</label>
            <select class="form-control" id="temp" name="temp">
              <?php
                for($i=0;$i<$count;$i++)
                {
                  echo"<option id=$templateId_array[$i]>$templateName_array[$i]</option>";
                }
              ?>
            </select>
            <br>
          </div>
          <center><button type='submit' value='submit' class='btn btn-success btn-lg'>Proceed</button>
          <button type='reset' value='reset' class='btn btn-success btn-lg'>Cancel</button></center>
        </form>
      </div>
    </div>
  </body>
</html>
<?php include'footer.php';?>
