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

<?php
  include'database_connection.php';

  $newsTitle=$_POST['newsTitle'];
  //$newsImage=$_POST['newsImage'];
  $newsText=$_POST['newsText'];
  $startDate=$_POST['startDate'];
  $endDate=$_POST['endDate'];

	if($_FILES['newsImage']['tmp_name'])
	{
		if (($_FILES['newsImage']['type']=='image/gif') || ($_FILES['newsImage']['type']=='image/jpeg') ||($_FILES['newsImage']['type']=='image/png') || ($_FILES['newsImage']['type']=='image/jpg'))
		{
			if($_FILES['newsImage']['error']>0)
			{
				echo "Error:".$_FILES['newsImage']['error']."<br>";
			}
			else
			{
				//echo "hello";
				//echo"<script>alert('hello');</script>";

				$name=$_FILES['newsImage']['name'];
				//echo "file name=".$_FILES['file']['name'];
				$target_dir = "images/";
				$target_file = $target_dir.basename($_FILES['newsImage']['name']);
				if(file_exists($target_file))
				{
					echo "<script>alert('file with this name already exists in target directory');</script>";
					echo "<script>window.location='adminNews.php'</script>";
				}
				else
				{
					move_uploaded_file($_FILES['newsImage']['tmp_name'], $target_file);
					/*$q="select * from homepageimages";
					$r=mysqli_query($con,$q);
					$r1=mysqli_num_rows($r);
					$id=$r1+1;
					echo"id=$id";*/
					//$query="insert into masterdata(imageUrl) values('$target_file')";
					//$result=mysqli_query($con,$query) or die(mysqli_error($con));
					$query="insert into news(newsTitle,newsImage,newsText,newsStart,newsEnd) values('$newsTitle','$target_file','$newsText','$startDate','$endDate')";
			    if(mysqli_query($con,$query))
			    {
			  		echo"<script>window.location='adminNews.php?id=news_success';</script>";
			  	}
			  	else
			  	{
			  		echo "Error : " . mysqli_error($con);
			  	}
				}
			}
		}
		else
		{
			//echo "file is not image";
			echo "<script>alert('unsupported file format');</script>";
			echo "<script>window.location='adminNews.php'</script>";
		}
	}
?>
