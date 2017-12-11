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
	<a href="postFAQ.php" class="btn btn-default btn-lg" role="button"><span class="glyphicon glyphicon-plus"></span>Post FAQ</a>
  </div>
	</div>
	<center><h2>FAQs</h2></center>
	<br>
  <?php
	//$con=mysqli_connect('localhost','root','','arihant') or die(mysqli_connect_error());
  include'database_connection.php';
	if($_GET)
		{
			if($_GET['id'])
			{
				$id=$_GET['id'];
				if($id=="faq_success")
					echo"<center>FAQ posted successfully</center>";
					if($id=="faq_edit_success")
						echo"<center>FAQ updated successfully</center>";
			}
		}
  $count=0;
	$faqId_array=array();
	$question_array=array();
	$answer_array=array();
	$homepage_array=array();

	$query="select * from faq";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$faqId_array[$count]=$row['faqId'];
		$question_array[$count]=$row['question'];
		$answer_array[$count]=$row['answer'];
		$homepage_array[$count]=$row['homepage'];
		$count++;
	}
  ?>
  <div class="row">
    <div class="col-sm-12">
    <table class="table table-hover">
    <thead>
      <tr>

		<th>Id</th>
        <th>Question</th>
		<th>Answer</th>
        <th>Homepage</th>
		<th></th>
		<th></th>
      </tr>
    </thead>
    <tbody>
	<?php
		for($i=0;$i<$count;$i++)
		{
			echo"
			<tr>
				<td>$faqId_array[$i]</td>
				<td>$question_array[$i]</td>
				<td>$answer_array[$i]</td>
				<td>$homepage_array[$i]</td>
				<td><a href='editFAQ.php?q=$faqId_array[$i]' class='btn btn-default btn-sm' role='button'><span class='glyphicon glyphicon-edit'></span>Edit</a></td>
				<td><a href='deleteFAQ.php?q=$faqId_array[$i]' class='btn btn-default btn-sm' role='button'><span class='glyphicon glyphicon-trash'></span>Delete</a></td>
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
