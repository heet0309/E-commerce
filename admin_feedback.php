<?php
 include "header.php";
?>
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Feedbacks
    </div>
    <div class="table-responsive">
	<table class="table table-striped b-t b-light">



<?php
	$conn=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($conn,"project_db");
	$qry = "SELECT * FROM tb_feedback";
	$result=mysqli_query($conn,$qry);
	echo "<table border=2>
	<tr>
		<th>user ID</th>
		<th>SUBJECT</th>
		<th>MESSAGE</th>
		<th>FEEDBACK DATE</th>
		<th>DELETE</th>
	</tr>";
	if(mysqli_num_rows($result) > 0)
		while($row=mysqli_fetch_array($result))
		{
			 echo "<tr>
			 <td> ". $row[1]. "</td>
			 <td>". $row[2]. "</td>
			 <td>". $row[3]. "</td>
			  <td>". $row[4]. "</td>
			 <td><a href='delete_feedback.php?Feedback_id=". $row[0]. "'><img alt='Delete' width='35px' height='35px' src='images/delete.png' /></a></td>
			 </tr>";
		}
	else
		echo "<tr><td colspan=7>No Rows Available to Display.</td></tr>";
	echo "<tr><td colspan=7>". mysqli_num_rows($result). " row(s) selected.</td></tr>";
	echo "</table>";
?>
  </div>
</div>
</section>
 <?php
 include "fotter.php";
 ?>