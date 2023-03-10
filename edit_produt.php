<?php
 include "header.php";

 
if (isset($_POST['btn'])) 
{
 
 	$pnm=$_POST['2'];
 	$cid=$_POST['3'];
	$filename1=$_FILES['4']['name'];
	$filename2=$_FILES['5']['name'];
	$filename3=$_FILES['6']['name'];
 	$Pr=$_POST['7'];
 	$st=$_POST['8'];

 	$con=mysqli_connect("localhost","root","","project_db");
 	$q="insert into tb_product values('','$pnm','$cid','$filename1','$filename2','$filename3','$Pr','$st')";
 	$c=mysqli_query($con,$q);

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
				<td><input type="text" class="form-control" name="2"/>
				</div>
				</td>
            </tr>
			<tr data-expanded="true">
				<td>Category id</td>
				<div>
				<td><input type="text" class="form-control" name="3"/>
				</div>
				</td>
            </tr>
			<tr data-expanded="true">
				<td>image1</td>
				<div>
				<td><input type="file" class="form-control" name="4"/>
				</div>
				</td>
            </tr>
            <tr data-expanded="true">
				<td>image2</td>
				<div>
				<td><input type="file" class="form-control" name="5"/>
				</div>
				</td>
            </tr>
            <tr data-expanded="true">
				<td>image3</td>
				<div>
				<td><input type="file" class="form-control" name="6"/>
				</div>
				</td>
            </tr>
			<tr data-expanded="true">
				<td>Price</td>
				<div>
				<td><input type="text" class="form-control" name="7"/>
				
				</div>
				</td>
            </tr>
			<tr data-expanded="true">
				<td>stock</td>
				<div>
				<td><input type="text" class="form-control" name="8"/>
				</a>
				</div>
				</td>
            </tr>

		  
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        <center><h1>
<input type="submit" name="btn" value="Insert"/>
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
