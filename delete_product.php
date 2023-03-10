<?php
$id=$_REQUEST['Product_id'];
$con=mysqli_connect("localhost","root","","project_db");
$q="DELETE from tb_product where Product_id='$id'";
$c=mysqli_query($con,$q);
?>
<script>
 window.location="product_details.php";
 </script>