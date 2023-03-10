<?php
 include "c_header.php";
?>



<?php
$id=$_REQUEST['id'];
$con=mysqli_connect("localhost","root","","project_db");
$q="DELETE from tb_cart where Cart_id='$id'";
$c=mysqli_query($con,$q);
?>


 <?php

  $query="select * from tb_cart ";
				 $cc=mysqli_query($con,$query);
				 while($row=mysqli_fetch_array($cc))
				 {


 ?> 






 <div class="view view-fifth">
                  	<div class="cart-item cyc">
           
							 <img src="../admin/upload/<?php echo $row['Image1'];?>" style="width:320px; height:200px " alt="" class="img-responsive">
						</div>
					   <div class="cart-item-info">
								<h4 style="margin-top:30px" >NAME:-<?php echo $row['Product_name'];?></h3>
							
								<h5 style="margin-top:30px" ><spam>PRICE:-<?php echo $row['Price'];?></spam></h5>
							 <p class="qty">Qty ::</p>
							 <input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small">
							 
							 	 	<div class="btn_form">
								<a href="c_deleteproduct.php?id=<?php echo $row['Cart_id'];?>">Delete</a>
								
							</div>
					   </div>
                </div>
					
		
                <div class="clearfix"> </div>
            </div>
		</div>

		 
		 	<?php
				 }
				 ?>
			



			 <a class="continue" href="#">Continue to basket</a>
			
			 <a class="order" href="#">Place Order</a>
		

			</div>
	 </div>
</div>

 <?php
 include "c_fotter.php";
 ?>