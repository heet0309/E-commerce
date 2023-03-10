<?php
$id=$_REQUEST['Registration_id'];
$con=mysqli_connect("localhost","root","","project_db");
$q="DELETE from tb_registration where Registration_id='$id'";
$c=mysqli_query($con,$q);
?>
<script>
 window.location="customer_details.php";
 </script>