<?php
$id=$_REQUEST['Feedback_id'];
$con=mysqli_connect("localhost","root","","project_db");
$q="DELETE from tb_feedback where Feedback_id='$id'";
$c=mysqli_query($con,$q);
?>
<script>
 window.location="admin_feedback.php";
 </script>