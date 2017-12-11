
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/boot.css" rel="stylesheet">
</head>

<body>
<?php
$con=mysqli_connect("localhost","root","","arihant");
 ?>
    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation" style="background-color:#00b300;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" style="color:white;">Arihant Suppliers</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="a.html" style="color:white;">Home</a>
                    </li>
                    <li>
                        <a href="product.html" style="color:white;">Products</a>
                    </li>
                    <li>
                        <a href="about.html" style="color:white;">About</a>
                    </li>
                    <li>
                        <a href="contact.html" style="color:white;">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="row">
            <center><h2 style="color:#00b300;"><b>Products</b></h2></center>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <a href="addproduct.php"><button type="button" class="btn btn-success btn-lg">Add New Product</button></a>
    </div><hr>
     <div class="row"><br>
         <div class="col-md-12">
            <div class="container" style="background-color:#d9d9d9;"><br><br>
                <?php
                $count=0;
                $pro_name_array=array();
                $sku_array=array();
                $pro_alt_name_array=array();
                $pro_type_array=array();
                $pro_subtype_array=array();
                $pro_quality_array=array();
                $pro_material_array=array();
                $pro_size_array=array();
                $pro_length_array=array();
                $pro_height_array=array();
                $pro_width_array=array();
                $pro_thickness_array=array();
                $pro_dia_array=array();
                $pro_inside_dia_array=array();
                $pro_outside_dia_array=array();
                $std_pkt_array=array();
                $price_per_pkt_array=array();
                $model_number_array=array();
                $thread_array=array();
                $capacity_array=array();
                $std_lift_array=array();
                $lift_height_min_array=array();
                $lift_height_max_array=array();
                $no_of_holes_array=array();
                $slider_array=array();
                $warranty_array=array();
                $remark1_array=array();
                $remark2_array=array();
                $remark3_array=array();
                $featurs_array=array();
                $application_array=array();
                $img_array=array();


                $query="select * from product";
                $result=mysqli_query($con,$query);
                while($result1=mysqli_fetch_array($result))
                {
                    $pro_name_array[$count]=$row['productName'];
                    $sku_array[$count]=$row['sku'];
                    $pro_alt_name_array[$count]=$row['productAltName'];
                    $pro_type_array[$count]=$row['productType'];
                    $pro_subtype_array[$count]=$row['productSubType'];
                    $pro_quality_array[$count]=$row['productQuality'];
                    $pro_material_array[$count]=$row['productMaterial'];
                    $pro_size_array[$count]=$row['productSize'];
                    $pro_length_array[$count]=$row['productLength'];
                    $pro_height_array[$count]=$row['productHeight'];
                    $pro_width_array[$count]=$row['productWidth'];
                    $pro_thickness_array[$count]=$row['productThickness'];
                    $pro_dia_array[$count]=$row['productDiameter'];
                    $pro_inside_dia_array[$count]=$row['productInsideDia'];
                    $pro_outside_dia_array[$count]=$row['productOutsideDia'];
                    $std_pkt_array[$count]=$row['productStanderdPkt'];
                    $price_per_pkt_array[$count]=$row['pricePerPack'];
                    $model_number_array[$count]=$row['modelNumber'];
                    $thread_array[$count]=$row['Thread'];
                    $capacity_array[$count]=$row['Capacity'];
                    $std_lift_array[$count]=$row['stdLift'];
                    $lift_height_min_array[$count]=$row['liftHeightMin'];
                    $lift_height_max_array[$count]=$row['liftHeightMax'];
                    $no_of_holes_array[$count]=$row['noOfHoles'];
                    $slider_array[$count]=$row['Slider'];
                    $warranty_array[$count]=$row['Warrenty'];
                    $remark1_array[$count]=$row['remark1'];
                    $remark2_array[$count]=$row['remark2'];
                    $remark3_array[$count]=$row['remark3'];
                    $featurs_array[$count]=$row['Features'];
                    $application_array[$count]=$row['Application'];
                    $img_array[$count]=$row['remark3'];
                    //echo "hi2";

                    echo"<div class='col-md-4'>
                       <div class='panel panel-default'>
                           <div class='panel-heading'  style='color:#00b300';>
                           <center><b><i>productName</i></b></center>
                        </div>
                        <div class='panel-body'>
                            <img src='img/51.jpg' class='img-rounded' alt='' width='300' height='150'>
                        </div>
                        <div class='panel-footer'><center>
                            <button type='button' class='btn btn-success'>Details</button>
                             <button type='button' class='btn btn-success'>Update</button>
                            <button type='button' class='btn btn-success'>Delete</button>
                        </center>
                        </div>
                        ";
                }
                ?>

                  </div>
               </div>
            </div>
         </div>
     </div>
     <hr>


    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
