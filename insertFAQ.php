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
  $question=$_POST['quest'];
  $answer=$_POST['ans'];
  if($_POST['home'])
    $homepage=1;
  else
    $homepage=0;

    $query="insert into faq(question,answer,homepage) values('$question','$answer',$homepage)";
    if(mysqli_query($con,$query))
    {
  		echo"<script>window.location='adminFAQ.php?id=faq_success';</script>";
  	}
  	else
  	{
  		echo "Error : " . mysqli_error($con);
  	}
?>
