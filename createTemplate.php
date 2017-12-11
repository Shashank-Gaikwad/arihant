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
		<?php
			include'header.php';
			include'database_connection.php';
		?>
		<br><br><br>
		<?php
			//$con=mysqli_connect('localhost','root','','arihant') or die(mysqli_connect_error());

			echo"
<div class='container'>
<center><h2>Create Template</h2></center>
    <br>
    <br>
    <form role='form' action='insertTemplate.php' method=POST enctype='multipart/form-data'>
		<div class='row'>

            <div class='col-md-12'>
                <div class='form-group'>
                    <center><label for='templateName'>Template Name:</label></center>
                    <input type='text' class='form-control' id='templateName' name='templateName' placeholder='Template Name' required>
                </div>
            </div>
        </div>

        <div class='row'>
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='attribute1'>attribute 1</label></center>
                    <input type='text' class='form-control' id='attribute1' name='attribute1' placeholder='attribute 1'>
                </div>
            </div>
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='attribute2'>attribute 2</label></center>
                    <input type='text' class='form-control' id='attribute2' name='attribute2' placeholder='attribute 2'>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='attribute3'>attribute 3</label></center>
                    <input type='text' class='form-control' id='attribute3' name='attribute3' placeholder='attribute3'>
                </div>
            </div>
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='attribute4'>attribute 4</label></center>
                    <input type='text' class='form-control' id='attribute4' name='attribute4' placeholder='attribute 4'>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='attribute5'>attribute 5</label></center>
                    <input type='text' class='form-control' id='attribute5' name='attribute5' placeholder='attribute 5'>
                </div>
            </div>
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='attribute6'>attribute 6</label></center>
                    <input type='text' class='form-control' id='attribute6' name='attribute6' placeholder='attribute 6'>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='attribute7'>attribute 7</label></center>
                    <input type='text' class='form-control' id='attribute7' name='attribute7' placeholder='attribute 7'>
                </div>
            </div>
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='attribute8'>attribute 8</label></center>
                    <input type='text' class='form-control' id='attribute8' name='attribute8' placeholder='attribute 8'>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='attribute9'>attribute 9</label></center>
                    <input type='text' class='form-control' id='attribute9' name='attribute9' placeholder='attribute 9'>
                </div>
            </div>
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='attribute10'>attribute 10</label></center>
                    <input type='text' class='form-control' id='attribute10' name='attribute10' placeholder='attribute 10'>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='attribute11'>attribute 11</label></center>
                    <input type='text' class='form-control' id='attribute11' name='attribute11' placeholder='attribute 11'>
                </div>
            </div>
            <div class='col-md-6'>
                <div class='form-group'>
                    <center><label for='attribute12'>attribute 12</label></center>
                    <input type='text' class='form-control' id='attribute12' name='attribute12' placeholder='attribute 12'>
                </div>
            </div>
        </div>
        <center><button type='submit' value='submit' class='btn btn-success btn-lg'>Create</button>

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
<?php include'footer.php';?>
