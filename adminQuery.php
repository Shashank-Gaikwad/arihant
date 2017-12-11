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
	<center><h2>Queries</h2></center>
	<br>
  <?php
	include'database_connection.php';
	//$con=mysqli_connect('localhost','root','','arihant') or die(mysqli_connect_error());
	$count=0;
	$queryId_array=array();
	$name_array=array();
	$email_array=array();
	$mobile_array=array();
	$queryText_array=array();
	$query="select * from query";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$queryId_array[$count]=$row['queryId'];
		$name_array[$count]=$row['name'];
		$email_array[$count]=$row['email'];
		$mobile_array[$count]=$row['mobile'];
		$queryText_array[$count]=$row['queryText'];
		$count++;
	}
  ?>
  <div class="row">
    <div class="col-sm-12">
    <table class="table table-hover">
    <thead>
      <tr>
		<th>Id</th>
        <th>Name</th>
		<th>Email</th>
        <th>Mobile</th>
		<th>Query</th>

		<th></th>
      </tr>
    </thead>
    <tbody>
	<?php
		for($i=0;$i<$count;$i++)
		{
			echo"
			<tr>
				<td>$queryId_array[$i]</td>
				<td>$name_array[$i]</td>
				<td>$email_array[$i]</td>
				<td>$mobile_array[$i]</td>
				<td>$queryText_array[$i]</td>
				<td><a href='deleteQuery.php?q=$queryId_array[$i]' class='btn btn-default btn-sm' role='button'><span class='glyphicon glyphicon-trash'></span>Delete</a></td>

			</tr>
			";
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
