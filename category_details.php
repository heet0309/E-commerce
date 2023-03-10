<?php
 include "header.php";
?>
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Category
    </div>
    <div class="table-responsive">
	<table class="table table-striped b-t b-light">



<?php
	$conn=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($conn,"project_db");
	$qry = "SELECT * FROM tb_category";
	$result=mysqli_query($conn,$qry);
	echo "<table border=2>
	<tr>
		<th>CATEGORY ID</th>
		<th>CATEGORY NAME</th>
		<th>IMAGE</th>
		
		<th>DELETE</th>
	</tr>";
	if(mysqli_num_rows($result) > 0)
		while($row=mysqli_fetch_array($result))
		{
			 echo "<tr><td>". $row[0]. "</td>
			 <td> ". $row[1]. "</td>
			 <td> <img src='upload/".$row[2]."' height=100 width=100/> </td>
			 
			
			 <td><a href='delete_category.php?category_id=". $row[0]. "'><img alt='Delete' width='35px' height='35px' src='images/delete.png' /></a></td>
			 </tr>";
		}
	else
		echo "<tr><td colspan=7>No Rows Available to Display.</td></tr>";
	echo "<tr><td colspan=7>". mysqli_num_rows($result). " row(s) selected.</td></tr>";
	echo "</table>";
?>
<p>Wanna Insert a New Category??? <a href="insert_category.php">Click Here</a></p>
  </div>
</div>
</section>
 <?php
 include "fotter.php";
 ?>