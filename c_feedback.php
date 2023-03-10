
<?php 
include "c_header.php";
?>
<?php 



 
if (isset($_POST['btn'])) 
{
 
    $un=$_POST['1'];
 	$sub=$_POST['2'];
 	$msg=$_POST['3'];
 	$date=$_POST['4'];
 	$con=mysqli_connect("localhost","root","","project_db");
 	$q="insert into tb_feedback values('','$un','$sub','$msg','$date')";
 	$c=mysqli_query($con,$q);

 	
 }
 ?> 




<!--main content start-->
<!DOCTYPE html>
<html>
<head>
<title>CUSTOMER PANEL</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,600,800,700,500,300,100,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/component.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Fashions Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" 
        />      
<script src="js/jquery.min.js"></script>
<script src="js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- start menu -->
</head>
<body>
<div class="login">
     <div class="container">
            <ol class="breadcrumb">
          <li><a href="c_index.php">Home</a></li>
          <li class="active">Feedback</li>
         </ol>
         <h2>Feedback</h2>
         <div class="col-md-6 log">          
                
 <form action="#" method="post" enctype="multipart/form-data">
            USERNAME:-<input type="text" name="1" placeholder="username" ><br>
            SUBJECT:-<input type="text"  name="2" placeholder="feedback subject" ><br>
            MESSAGE:-<input type="text"  name="3" placeholder="feedback message" ><br>
            DATE:-<input type="date"  name="4"  >
                <div class="clearfix"></div>
                <input type="submit" value="Send" name="btn">
        </form>  
                    
       
         <div class="clearfix"></div>        
         
     </div>
</div>
</body>
</html>


 <?php
 include "c_fotter.php";
 ?>

