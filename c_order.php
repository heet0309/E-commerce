<?php
 include "c_header.php";




	 $con=mysqli_connect("localhost","root","","project_db");
				$db=mysqli_select_db($con,"project_db");
  $query="select * from tb_cart ";
				 $c=mysqli_query($con,$query);
				 while($r=mysqli_fetch_array($c))
				 {
 

 
	$pnm=$r['Product_name'];
	$pr=$r['Price'];
 	

  $quer="select * from tb_registration ";
				 $cc=mysqli_query($con,$quer);
				 while($rr=mysqli_fetch_array($cc))
				 {
 

	$add=$rr['Address'];



 
if (isset($_POST['btn'])) 
{
	$qty=$_POST['quantity'];
	$un=$_POST['username'];
 
$am=$qty*$pr;

 $que="insert into tb_order_master values('','$un','$add','$qty','$pr','$pnm','$am')";
 	$ccc=mysqli_query($con,$que);

?>

<div class="gallery" id="gallery" style="background-color:white">
	<h2 class="tittle" style="color:black" align="center" >your orders</h2>
			<div class="gallery-bottom">
			
<?php


  $queryy="select * from tb_order_master";
				 $co=mysqli_query($con,$queryy);
				 while($row=mysqli_fetch_array($co))
				 {

 ?> 

		 
		


 <div class="view view-fifth">
                  
								<h4 style="margin-top:30px" >USERNAME:-<?php echo $row['username'];?></h3>
								<h4 style="margin-top:30px" >PRODUCT_NAME:-<?php echo $row['Product_name'];?></h3>
								<h5 style="margin-top:30px" ><spam>PRICE:-<?php echo $row['price'];?></spam></h5>
								<h5 style="margin-top:30px" ><spam>QUANTITY:-<?php echo $row['quantity'];?></spam></h5>
								<h5 style="margin-top:30px" ><spam>TOTAL AMOUNT:-<?php echo $row['amount'];?></spam></h5>
								<h5 style="margin-top:30px" ><spam>ADDRESS:-<?php echo $row['Address'];?></spam></h5>
							</div>
					   </div>
                </div>
					
		 	<?php
				 }
				}
			}
		}
				 ?>
				 
                <div class="clearfix"> </div>
            </div>
		</div>



<<?php 
include "c_fotter.php"
 ?>