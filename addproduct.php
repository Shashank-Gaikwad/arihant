<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Arihant Suppliers</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/boot.css" rel="stylesheet">
</head>

<body>
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
                    <!--<li>
                        <a href="a.html" style="color:white;">Home</a>
                    </li>
                    <li>
                        <a href="product.html" style="color:white;">Products</a>
                    </li>
                    <li>
                        <a href="about.html" style="color:white;">About</a>
                    </li>-->
                    <li>
                        <a href="#" style="color:white;">Log Out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<div class="container">
    <br>
    <br>
    <form role="form" action="add.php" method=POST enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="product_img">Product Image:</label></center>
                    <input type="file" class="form-control" id="product_img" name="product_img">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="product_name">Product Name:</label></center>
                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="sku">SKU:</label></center>
                    <input type="text" class="form-control" id="sku" name="sku" placeholder="SKU">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="product_alt_name">Product Alternative Name:</label></center>
                    <input type="text" class="form-control" id="product_alt_name" name="product_alt_name" placeholder="Product Alternative Name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="product_type">Product Type:</label></center>
                    <input type="text" class="form-control" id="product_type" name="product_type" placeholder="Product Type">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="product_subtype">Product SubType:</label></center>
                    <input type="text" class="form-control" id="product_subtype" name="product_subtype" placeholder="Product SubType">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="product_quality">Product Quality:</label></center>
                    <input type="text" class="form-control" id="product_quality" name="product_quality" placeholder="Product Quality">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="product_material">Product Material:</label></center>
                    <input type="text" class="form-control" id="product_material" name="product_material" placeholder="Product Material">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="product_size">Product Size:</label></center>
                    <input type="text" class="form-control" id="product_size" name="product_size" placeholder="Product Size">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="product_length">Product Length:</label></center>
                    <input type="text" class="form-control" id="product_length" name="product_length" placeholder="Product Length">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="product_height">Product Height:</label></center>
                    <input type="text" class="form-control" id="product_height" name="product_height" placeholder="Product Height">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="product_width">Product Width:</label></center>
                    <input type="text" class="form-control" id="product_width" name="product_width" placeholder="Product Width">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="product_thickness">Product Thickness:</label></center>
                    <input type="text" class="form-control" id="product_thickness" name="product_thickness" placeholder="Product Thickness">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="product_diameter">Product Diameter mm:</label></center>
                    <input type="text" class="form-control" id="product_diameter" name="product_diameter" placeholder="Product Diameter">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="inside_dia">Inside Diameter(d)mm:</label></center>
                    <input type="text" class="form-control" id="inside_dia" name="inside_dia" placeholder="Inside Diameter">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="outside_dia">Outside Diameter(D)mm:</label></center>
                    <input type="text" class="form-control" id="outside_dia" name="outside_dia" placeholder="Outside Diameter">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="std_pkt">Standerd pkt:</label></center>
                    <input type="text" class="form-control" id="std_pkt" name="std_pkt" placeholder="Standerd pkt">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="price_per_pkt">Price per pkt:</label></center>
                    <input type="text" class="form-control" id="price_per_pkt" name="price_per_pkt" placeholder="Price per pkt">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="model_number">Model Number:</label></center>
                    <input type="text" class="form-control" id="model_number" name="model_number" placeholder="Model Number">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="thread">Thread:</label></center>
                    <input type="text" class="form-control" id="thread" name="thread" placeholder="Thread">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="capacity">Capacity:</label></center>
                    <input type="text" class="form-control" id="capacity" name="capacity" placeholder="Capacity">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="standered_lift">Standered Lift:</label></center>
                    <input type="text" class="form-control" id="standered_lift" name="standered_lift" placeholder="Standered Lift">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="lift_height(min)">Lift Height(min):</label></center>
                    <input type="text" class="form-control" id="lift_height_min" name="lift_height_min" placeholder="Lift Height(min)">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="lift_height(max)">Lift Height(max):</label></center>
                    <input type="text" class="form-control" id="lift_height_max" name="lift_height_max" placeholder="Lift Height(max)">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="no_of_holes">No Of Holes:</label></center>
                    <input type="text" class="form-control" id="no_of_holes" name="no_of_holes" placeholder="No Of Holes">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="slider">Slider:</label></center>
                    <input type="text" class="form-control" id="slider" name="slider" placeholder="Slider">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="warranty">Warranty:</label></center>
                    <input type="text" class="form-control" id="warranty" name="warranty" placeholder="Warranty">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="remark1">Remark1:</label></center>
                    <input type="text" class="form-control" id="remark1" name="remark1" placeholder="Remark1">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="remark2">Remark2:</label></center>
                    <input type="text" class="form-control" id="remark2" name="remark2" placeholder="Remark2">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <center><label for="remark3">Remark3:</label></center>
                    <input type="text" class="form-control" id="remark3" name="remark3" placeholder="Remark3">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <center><label for="features">Features:</label></center>
                    <textarea rows="4" cols="50" class="form-control" id="features" name="features" placeholder="Features"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <center><label for="application">Application:</label></center>
                    <textarea rows="4" cols="50" class="form-control" id="application" name="application" placeholder="Application"></textarea>
                </div>
            </div>
        </div>
        <center><button type="submit" value="submit" class="btn btn-success btn-lg">Add</button>

        <button type="reset" value="reset" class="btn btn-success btn-lg">Clear</button></center>
        <hr>
        <!--<center><button type="button" value="submit" class="btn btn-success btn-lg">&nbsp&nbsp&nbspAdd&nbsp&nbsp&nbsp</button>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <button type="button" value="reset" class="btn btn-success btn-lg">&nbsp&nbspClear&nbsp&nbsp</button></center>-->
    </form>
<p><br></p>
<p><br></p>
<p></p>

</div>

</body>
</html>
