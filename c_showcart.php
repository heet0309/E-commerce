

<?php
 include "c_header.php";


 
?>

 <?php 

	 $con=mysqli_connect("localhost","root","","project_db");
				$db=mysqli_select_db($con,"project_db");
  $query="select * from tb_cart ";
				 $cc=mysqli_query($con,$query);
				 while($row=mysqli_fetch_array($cc))
				 {
 

 ?> 






 <div class="view view-fifth">
                  	<div class="cart-item cyc">
           <form action="c_order.php" method="post" enctype="multipart/form-data">
							 <img src="../admin/upload/<?php echo $row['Image1'];?>" style="width:320px; height:200px " alt="" class="img-responsive">
						</div>
					   <div class="cart-item-info">
								<h4 style="margin-top:30px" >NAME:-<?php echo $row['Product_name'];?></h3>
							
								<h5 style="margin-top:30px" ><spam>PRICE:-<?php echo $row['Price'];?></spam></h5>
							 <p class="qty">Quantity ::    </p>
							 <input min="1" type="number" name="quantity" value="1" class="form-control input-small">
							 <br>
							 <p class="qty">Username ::</p>
							  <input min="1" type="text"  name="username" value="" class="form-control input-small">
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
			 <center><h1>
				    <input type="submit" name="btn" value="Place Order"/>
				    	</form>
		 </center></h1>
	</form>	 
			</div>
	 </div>
</div>

 <?php
 include "c_fotter.php";
 ?>


