<?php
	session_start();
?>


<html>
  <head>
    <title>Arihant</title>
  </head>
  <body>
    <?php
      include'header.php';
      include'database_connection.php';
    ?>
      <br>
    <?php
      $faqCount=0;
      $faqId_array=array();
      $question_array=array();
      $answer_array=array();
      $query="select * from faq";
      $result=mysqli_query($con,$query);
      while($row=mysqli_fetch_array($result))
      {
        $faqId_array[$faqCount]=$row['faqId'];
        $question_array[$faqCount]=$row['question'];
        $answer_array[$faqCount]=$row['answer'];
        $faqCount++;
      }
      echo"
      <div class='container'>
      <div class='row'>
      ";

      for($i=0;$i<$faqCount;$i++)
      {
          echo"
          <div class='col-sm-6'>
            <h3>$question_array[$i]</h3>
            <p>
            $answer_array[$i];
            </p>
          </div>
          ";
      }
      echo"
      </div>
      </div>
      ";
    ?>
  </body>
</html>
<?php include'footer.php';?>
