<?php 
include "c_header.php";
?>
<?php
if(isset($_POST['login']))
{
    $un=$_POST['username'];
    $pw=$_POST['password'];
    $conn=mysqli_connect("localhost","root","","project_db");
    $q="select * from tb_registration where username='$un' AND Password='$pw'";
    $c=mysqli_query($conn,$q);
    $r=mysqli_num_rows($c);
    if($r>=1)
    {
        ?>
        <script>
        	
            window.location="c_index.php";
        </script>
    <?php
    }
    else
    {
        echo "LOGIN DENIDED";
    }
}


?>




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
          <li class="active">Login</li>
         </ol>
         <h2>Login</h2>
         <div class="col-md-6 log">          
                

                 <form action="#" method="post" enctype="multipart/form-data">
            USERNAME:-<input type="text" name="username" placeholder="username" ><br>
            PASSWORD:-<input type="password"  name="password" placeholder="PASSWORD" >
                <div class="clearfix"></div>
                <input  type="submit" value="Sign In" name="login">
        </form>      



         </div>
          <div class="col-md-6 login-right">
                <h3>NEW REGISTRATION</h3>
                <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                <a class="acount-btn" href="c_registration.php">Create an Account</a>
         </div>
         <div class="clearfix"></div>        
         
     </div>
</div>
</body>
</html>

 <?php
 include "c_fotter.php";
 ?>