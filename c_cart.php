<?php
 include "c_header.php";


 
?>

 <?php 
 $id=$_REQUEST['id'];
	 $con=mysqli_connect("localhost","root","","project_db");
				$db=mysqli_select_db($con,"project_db");
				 $q="select * from tb_product where Product_id=$id";
				 $c=mysqli_query($con,$q);
				 while($r=mysqli_fetch_array($c))
				 {
					

	$pnm=$r['Product_name'];
	$pr=$r['Price'];
	$img=$r['Image1'];
}
	 


 	$que="insert into tb_cart values('','$pnm','$pr','$img')";
 	$co=mysqli_query($con,$que);

 

  $query="select * from tb_cart ";
				 $cc=mysqli_query($con,$query);
				 while($row=mysqli_fetch_array($cc))
				 {


 ?> 




<form action="order.php" method="post" enctype="multipart/form-data">

 <div class="view view-fifth">
                  	<div class="cart-item cyc">
           
							 <img src="../admin/upload/<?php echo $row['Image1'];?>" style="width:320px; height:200px " alt="" class="img-responsive">
						</div>
					   <div class="cart-item-info">
								<h4 style="margin-top:30px" >NAME:-<?php echo $row['Product_name'];?></h3>
							
								<h5 style="margin-top:30px" ><spam>PRICE:-<?php echo $row['Price'];?></spam></h5>
							 <p class="qty">Quantity ::    </p>
							 <input min="1" type="number" name="quantity" value="1" class="form-control input-small">
							 <br>
							
							 	 	<div class="btn_form">
								<a href="c_updatedcart.php?id=<?php echo $row['Cart_id'];?>">Delete</a>
								
							</div>
					   </div>
                </div>
					
		
                <div class="clearfix"> </div>
            </div>
		</div>

		 
		 	<?php
				 }
				 ?>
			



			 <a class="continue" href="c_category.php">Continue Shopping</a>
			
			 <a class="order" href="c_showcart.php">Place Order</a>
		

			</div>
	 </div>
</div>

 <?php
 include "c_fotter.php";
 ?>