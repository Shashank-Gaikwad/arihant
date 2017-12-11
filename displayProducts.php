<?php
	session_start();
?>
<html>
<?php
  include'header.php';
  include 'database_connection.php';

  $count=0;
  $sku_array=array();
  $productName_array=array();
  $productAltName_array=array();
  $productQuality_array=array();
  $productMaterial_array=array();
  $productPrice_array=array();
  $productImage1_array=array();
  $productImage2_array=array();
  $productImage3_array=array();
  $productImage4_array=array();
  $a1_array=array();
  $a2_array=array();
  $a3_array=array();
  $a4_array=array();
  $a5_array=array();
  $a6_array=array();
  $a7_array=array();
  $a8_array=array();
  $a9_array=array();
  $a10_array=array();
  $a11_array=array();
  $a12_array=array();
  $templateId_array=array();
  $query="select * from product";
  $result=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($result))
  {
    $sku_array[$count]=$row['sku'];
    $productName_array[$count]=$row['productName'];
    $productAltName_array[$count]=$row['productAltName'];
    $productQuality_array[$count]=$row['productQuality'];
    $productMaterial_array[$count]=$row['productMaterial'];
    $productPrice_array[$count]=$row['productPrice'];
    $productImage1_array[$count]=$row['productImage1'];
    $productImage2_array[$count]=$row['productImage2'];
    $productImage3_array[$count]=$row['productImage3'];
    $productImage4_array[$count]=$row['productImage4'];
    $a1_array[$count]=$row['a1'];
    $a2_array[$count]=$row['a2'];
    $a3_array[$count]=$row['a3'];
    $a4_array[$count]=$row['a4'];
    $a5_array[$count]=$row['a5'];
    $a6_array[$count]=$row['a6'];
    $a7_array[$count]=$row['a7'];
    $a8_array[$count]=$row['a8'];
    $a9_array[$count]=$row['a9'];
    $a10_array[$count]=$row['a10'];
    $a11_array[$count]=$row['a11'];
    $a12_array[$count]=$row['a12'];
    $templateId_array[$count]=$row['templateId'];
    $count++;
  }
  echo "<div class='container'>";
  for($i=0;$i<$count;$i++)
  {
    echo "
    <div class='col-md-4 col-sm-6 highlight  hero-feature'>
                <img src='$productImage1_array[$i]' alt='' height='300' width='300'>
                <div class='caption'>

                    <p>$productPrice_array[$i]</p>
                    <p>
                       <center> <a href='details.php?product=$sku_array[$i]' class='btn btn-primary'>View Now!</a></center>
                    </p>
                </div>
    <h4 class='text-center'>$productName_array[$i]</h4>
    </div>
    ";
  }
  echo "</div>";
?>
</html>
<?php include'footer.php';?>
