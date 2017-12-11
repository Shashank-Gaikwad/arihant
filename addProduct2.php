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

<!DOCTYPE html>
<html lang="en">
<head>
      <title>Arihant</title>
</head>

<body>
    <!-- Navigation -->
    <?php include'header.php'; ?>
    <br><br><br>
	<?php
    include'database_connection.php';
		//$con=mysqli_connect('localhost','root','','arihant') or die(mysqli_connect_error());
	/*	if($_GET)
		{
			if($_GET['q'])
			{
				$template_id=$_GET['q'];
			}
		}*/
    $template_id=$_POST['temp'];
			//echo"template=$template_id";
		$query="select templateId,templateName,t1,t2,t3,t4,t5,t6,t7,t8,t8,t9,t10,t11,t12 from template where templateName='$template_id'";

		$result=mysqli_query($con,$query);
		while($row=mysqli_fetch_array($result))
		{
			//$s=$row['sku'];
			//$p=$row['productName'];
			$a1=$row['t1'];
			$a2=$row['t2'];
			$a3=$row['t3'];
			$a4=$row['t4'];
			$a5=$row['t5'];
			$a6=$row['t6'];
			$a7=$row['t7'];
			$a8=$row['t8'];
			$a9=$row['t9'];
			$a10=$row['t10'];
			$a11=$row['t11'];
			$a12=$row['t12'];
		}

	echo"
<div class='container'>
<center><h2>Add Product</h2></center>
    <br>
    <br>
    <form role='form' action='add.php' method=POST enctype='multipart/form-data'>
		<div class='row'>
			<div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='sku'>SKU:</label></center>
                    <input type='text' class='form-control' id='sku' name='sku' placeholder='SKU' required>
                </div>
            </div>
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='productName'>Product Name:</label></center>
                    <input type='text' class='form-control' id='productName' name='productName' placeholder='Product Name' required>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='productImage1'>Product Image 1:</label></center>
                    <input type='file' class='form-control' id='productImage1' name='productImage1' required>
                </div>
            </div>
			<div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='productImage2'>Product Image 2:</label></center>
                    <input type='file' class='form-control' id='productImage2' name='productImage2'>
                </div>
            </div>
		</div>
		<div class='row'>
			<div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='productImage3'>Product Image 3:</label></center>
                    <input type='file' class='form-control' id='productImage3' name='productImage3'>
                </div>
            </div>
			<div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='productImage4'>Product Image 4:</label></center>
                    <input type='file' class='form-control' id='productImage4' name='productImage4'>
                </div>
            </div>
		</div>
        <div class='row'>
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='productAltName'>Product Alternative Name:</label></center>
                    <input type='text' class='form-control' id='productAltName' name='productAltName' placeholder='Product Alternative Name' required>
                </div>
            </div>

            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='productQuality'>Product Quality:</label></center>
                    <input type='text' class='form-control' id='productQuality' name='productQuality' placeholder='Product Quality' required>
                </div>
            </div>
        </div>
		<div class='row'>
			<div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='productMaterial'>Product Material:</label></center>
                    <input type='text' class='form-control' id='productMaterial' name='productMaterial' placeholder='Product Material' required>
                </div>
            </div>
			<div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='productPrice'>Product Price:</label></center>
                    <input type='text' class='form-control' id='productPrice' name='productPrice' placeholder='Product Price' required>
                </div>
            </div>
		</div>";
        echo"<div class='row'>";
				if($a1!=NULL)
				{
					echo"
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='$a1'>$a1</label></center>
                    <input type='text' class='form-control' id='$a1' name='$a1' placeholder='$a1' required>
                </div>
            </div>
						";
				}
				if($a2!=NULL)
				{
					echo"
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='$a2'>$a2</label></center>
                    <input type='text' class='form-control' id='$a2' name='$a2' placeholder='$a2' required>
                </div>
            </div>
						";
				}
        echo"</div>";

        echo"<div class='row'>";
				if($a3!=NULL)
				{
					echo"
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='$a3'>$a3</label></center>
                    <input type='text' class='form-control' id='$a3' name='$a3' placeholder='$a3' required>
                </div>
            </div>
						";
				}
				if($a4!=NULL)
				{
					echo"
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='$a4'>$a4</label></center>
                    <input type='text' class='form-control' id='$a4' name='$a4' placeholder='$a4' required>
                </div>
            </div>
						";
				}
        echo"</div>";

        echo"<div class='row'>";
				if($a5!=NULL)
				{
					echo"
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='$a5'>$a5</label></center>
                    <input type='text' class='form-control' id='$a5' name='$a5' placeholder='$a5' required>
                </div>
            </div>
						";
				}
				if($a6!=NULL)
				{
					echo"
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='$a6'>$a6</label></center>
                    <input type='text' class='form-control' id='$a6' name='$a6' placeholder='$a6' required>
                </div>
            </div>
						";
				}
        echo"</div>";

        echo"<div class='row'>";
				if($a7!=NULL)
				{
					echo"
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='$a7'>$a7</label></center>
                    <input type='text' class='form-control' id='$a7' name='$a7' placeholder='$a7' required>
                </div>
            </div>
						";
				}
				if($a8!=NULL)
				{
					echo"
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='$a8'>$a8</label></center>
                    <input type='text' class='form-control' id='$a8' name='$a8' placeholder='$a8' required>
                </div>
            </div>
						";
				}
        echo"</div>";

				echo"<div class='row'>";
				if($a9!=NULL)
				{
					echo"
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='$a9'>$a9</label></center>
                    <input type='text' class='form-control' id='$a9' name='$a9' placeholder='$a9' required>
                </div>
            </div>
						";
				}
				if($a10!=NULL)
				{
					echo"
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='$a10'>$a10</label></center>
                    <input type='text' class='form-control' id='$a10' name='$a10' placeholder='$a10' required>
                </div>
            </div>
						";
				}
        echo"</div>";

        echo"<div class='row'>";
				if($a11!=NULL)
				{
					echo"
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='$a11'>$a11</label></center>
                    <input type='text' class='form-control' id='$a11' name='$a11' placeholder='$a11' required>
                </div>
            </div>
						";
				}
				if($a12!=NULL)
				{
					echo"
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='$a12'>$a12</label></center>
                    <input type='text' class='form-control' id='$a12' name='$a12' placeholder='$a12' required>
                </div>
            </div>
						";
				}
        echo"</div>";

				echo"
		<input type='hidden' id='templateName' name='templateName' value='$template_id'>

        <center><button type='submit' value='submit' class='btn btn-success btn-lg'>Add</button>

        <button type='reset' value='reset' class='btn btn-success btn-lg'>Clear</button></center>
        <hr>
        <!--<center><button type='button' value='submit' class='btn btn-success btn-lg'>&nbsp&nbsp&nbspAdd&nbsp&nbsp&nbsp</button>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <button type='button' value='reset' class='btn btn-success btn-lg'>&nbsp&nbspClear&nbsp&nbsp</button></center>-->
    </form>
<p><br></p>
<p><br></p>
<p></p>

</div>";
?>
</body>
</html>
<?php include'footer.php'; ?>
