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
  $newsStart=$_POST['startDate'];
  $newsEnd=$_POST['endDate'];
  $id=$_POST['editId'];
    $query="update news set newsTitle='$newsTitle',newsText='$newsText',newsStart='$newsStart',newsEnd='$newsEnd' where newsId=$id";
    if(mysqli_query($con,$query))
    {
  		echo"<script>window.location='adminNews.php?id=news_edit_success';</script>";
  	}
  	else
  	{
  		echo "Error : " . mysqli_error($con);
  	}
?>
