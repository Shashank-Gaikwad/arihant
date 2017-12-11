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
		<center><h2>Templates</h2></center>
		<br>
	</div>
  <br>
  <?php
	//$con=mysqli_connect('localhost','root','','arihant') or die(mysqli_connect_error());
  include'database_connection.php';

  $count=0;
	$templateId_array=array();
	$templateName_array=array();

	$query="select * from template";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$templateId_array[$count]=$row['templateId'];
		$templateName_array[$count]=$row['templateName'];
		$count++;
	}
  ?>
  <div class="row">
    <div class="col-sm-12">
    <table class="table table-hover">
    <thead>
      <tr>

		<th>Template Id</th>
        <th>Template Name</th>
		<!--<th></th>-->
		<th></th>
      </tr>
    </thead>
    <tbody>
	<?php
		for($i=0;$i<$count;$i++)
		{
			echo"
			<tr>
				<td>$templateId_array[$i]</td>
				<td>$templateName_array[$i]</td>

				<td><a href='deleteTemplate.php?q=$templateId_array[$i]' class='btn btn-default btn-sm' role='button'><span class='glyphicon glyphicon-trash'></span>Delete</a></td>

			</tr>
			";
			/*
			<td>$answer_array[$i]</td>
			<td>$homepage_array[$i]</td>
			<td><a href='editTemplate.php?q=$faqId_array[$i]' class='btn btn-default btn-sm' role='button'><span class='glyphicon glyphicon-edit'></span>Edit</a></td>
			*/
		}
	?>

    </tbody>
  </table>
    </div>
    <!-- <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div> -->
  </div>
</div>
	</body>
</html>
<?php include'footer.php';?>
