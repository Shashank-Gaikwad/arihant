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
	<br>
	<div class="container">
	<a href="postNews.php" class="btn btn-default btn-lg" role="button"><span class="glyphicon glyphicon-plus"></span>Post News</a>
  </div>
	</div>
	<center><h2>News</h2></center>
	<br>
  <?php
	//$con=mysqli_connect('localhost','root','','arihant') or die(mysqli_connect_error());
  include'database_connection.php';
	if($_GET)
		{
			if($_GET['id'])
			{
				$id=$_GET['id'];
				if($id=="news_success")
					echo"<center>News posted successfully</center>";
				if($id=="news_edit_success")
					echo"<center>News updated successfully</center>";
			}
		}
  $count=0;
	$newsId_array=array();
	$newsTitle_array=array();
	$newsImage_array=array();
	$newsText_array=array();
	$startDate_array=array();
  $endDate_array=array();
	$query="select * from news";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$newsId_array[$count]=$row['newsId'];
		$newsTitle_array[$count]=$row['newsTitle'];
		$newsImage_array[$count]=$row['newsImage'];
		$newsText_array[$count]=$row['newsText'];
		$startDate_array[$count]=$row['newsStart'];
    $endDate_array[$count]=$row['newsEnd'];
		$count++;
	}
  ?>
  <div class="row">
    <div class="col-sm-12">
    <table class="table table-hover">
    <thead>
      <tr>

		<th>Id</th>
        <th>Title</th>
		<th>Description</th>
        <th>Start Date</th>
		<th>End Date</th>
		<ht></th>
		<th></th>
      </tr>
    </thead>
    <tbody>
	<?php
		for($i=0;$i<$count;$i++)
		{
			echo"
			<tr>

				<td>$newsId_array[$i]</td>
				<td>$newsTitle_array[$i]</td>
				<td>$newsText_array[$i]</td>
				<td>$startDate_array[$i]</td>
				<td>$endDate_array[$i]</td>
				<td><a href='editNews.php?q=$newsId_array[$i]' class='btn btn-default btn-sm' role='button'><span class='glyphicon glyphicon-edit'></span>Edit</a></td>
				<td><a href='deleteNews.php?q=$newsId_array[$i]' class='btn btn-default btn-sm' role='button'><span class='glyphicon glyphicon-trash'></span>Delete</a></td>

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
