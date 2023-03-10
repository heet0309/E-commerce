<?php
$id=$_REQUEST['category_id'];
$con=mysqli_connect("localhost","root","","project_db");
$q="DELETE from tb_category where category_id='$id'";
$c=mysqli_query($con,$q);
?>
<script>
 window.location="category_details.php";
 </script>