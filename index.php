<?php
session_start();
if (isset($_SESSION['username']))
{
header('Location: adminProduct.php');
}
?>
<html>
  <head>
    <title>Arihant</title>
  </head>
  <body>
    <?php include'header.php';?>
    <br><br>
    <img class='center-block' src='images/under_construction.jpg'>
  </body>
</html>
