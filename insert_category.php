<?php
 include "header.php";

if (isset($_POST['btn'])) 
{
 
 	$cnm=$_POST['1'];
 
	$filename1=$_FILES['2']['name'];


 	$con=mysqli_connect("localhost","root","","project_db");

 	$q="insert into tb_category values('','$cnm','$filename1')";
 	$c=mysqli_query($con,$q);

 	if ($c)
 	 {
 		move_uploaded_file($_FILES['2']['tmp_name'],"upload/".$filename1);
 		echo "succesfully inserted";
 	}
 	else
 	{
 		echo "erorrrr";
 	}
 }
 ?> 

<html>

<form action="#" method="post" enctype="multipart/form-data">

	<html>

<form action="#" method="post" enctype="multipart/form-data">
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Add  New category
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
			
			<tr data-expanded="true">
				<td>Category name</td>
				<div>
				<td><input type="text" class="form-control" name="1"/>
				</div>
				</td>
            </tr>
            <tr data-expanded="true">
				<td>image1</td>
				<div>
				<td><input type="file" class="form-control" name="2"/>
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
</form>
  
  </html>
 <?php
 include "fotter.php";
 ?> 
