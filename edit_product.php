 <?php
 include "header.php";
?>



 <?php 
 $id=$_REQUEST['Product_id'];
	 $con=mysqli_connect("localhost","root","","project_db");
				$db=mysqli_select_db($con,"project_db");
				 $q="select * from tb_product where Product_id=$id";
				 $c=mysqli_query($con,$q);
				 while($row=mysqli_fetch_array($c))
				 {
					

 
if (isset($_POST['btn'])) 
{
 
 	$pnm=$_POST['2'];
 	$cid=$_POST['3'];
	$filename1=$_FILES['4']['name'];
	$filename2=$_FILES['5']['name'];
	$filename3=$_FILES['6']['name'];
 	$Pr=$_POST['7'];
 	$st=$_POST['8'];
	$wt=$_POST['9'];
 	$con=mysqli_connect("localhost","root","","project_db");
 	$que="UPDATE tb_product SET Product_name='$pnm',Category_id=$cid',image1=$filename1',image1='$filename2',image1='$filename3',Price='$Pr',stock='$st',
 	warranty='$wt'";
 	$cc=mysqli_query($con,$que);

 	if ($c)
 	 {
 		move_uploaded_file($_FILES['4']['tmp_name'],"upload/".$filename1);
 		move_uploaded_file($_FILES['5']['tmp_name'],"upload/".$filename2);
 		move_uploaded_file($_FILES['6']['tmp_name'],"upload/".$filename3);
 		echo "succesfully inserted";
 	}
 	else
 	{
		 echo $q;
 		echo "erorrrr";
 	}
 }
 ?> 
<html>
<form action="#" method="post" enctype="multipart/form-data">
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     edit product
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
			
            </tr>
			<tr data-expanded="true">
				<td>product name</td>
				<div>
				<td><input type="text" class="form-control" name="nmtxt" value="<?php echo $row['Product_name'];?>">
				</div>
				</td>
            </tr>
			<tr data-expanded="true">
				<td>Category id</td>
				<div>
				<td><input type="text" class="form-control" name="nmtxt2" value="<?php echo $row['Category_id'];?>">
				</div>
				</td>
            </tr>
			<tr data-expanded="true">
				<td>image1</td>
				<div>
				<td><input type="file" class="form-control" name="img1" />
				</div>
				</td>
            </tr>
            <tr data-expanded="true">
				<td>image2</td>
				<div>
				<td><input type="file" class="form-control" name="img2"/>
				</div>
				</td>
            </tr>
            <tr data-expanded="true">
				<td>image3</td>
				<div>
				<td><input type="file" class="form-control" name="img3"/>
				</div>
				</td>
            </tr>
			<tr data-expanded="true">
				<td>Price</td>
				<div>
				<td><input type="text" class="form-control" name="nmtxt3"  value="<?php echo $row['Price'];?>"/>
				
				</div>
				</td>
            </tr>
			<tr data-expanded="true">
				<td>stock</td>
				<div>
				<td><input type="text" class="form-control" name="nmtxt4"  value="<?php echo $row['stock'];?>"/>
				</a>
				</div>
				</td>
            </tr>
			<tr data-expanded="true">
				<td>Warranty Time</td>
				<div>
				<td><input type="text" class="form-control" name="9"/>
				</a>
				</div>
				</td>
            </tr>
		  	 
		 	<?php
				 }
				 ?>
			
      </table>
    </div>


    <footer class="panel-footer">
      <div class="row">
        <center><h1>
<input type="submit" name="btn" value="Update"/>
</center>        </h1>
      </div>
    </footer>
  </div>
</div>
</section>
  </form>
  
  </html>


 <?php
 include "fotter.php";
 ?> 
