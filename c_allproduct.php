<?php
 include "c_header.php";
?>



<div class="gallery" id="gallery" style="background-color:white">
	<h2 class="tittle" style="color:black" align="center" >All Products</h2>
			<div class="gallery-bottom">
				 <?php 
				 $con=mysqli_connect("localhost","root","","project_db");
				$db=mysqli_select_db($con,"project_db");
				 $q="select * from tb_product";
				 $c=mysqli_query($con,$q);
				 while($r=mysqli_fetch_array($c))
				 {
					 ?>

					 <div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
				 <div class="view view-fifth">
                    <a href="c_single.php?id=<?php echo $r['Product_id'];?>" title="Image Title"><img src="../admin/upload/<?php echo $r['Image1'];?>" style="width:320px; height:200px " alt="" class="img-responsive">
                    	
						<div class="mask">
						<br><br>
							<h2 style="margin-top:30px"  ><?php echo $r['Product_name'];?></h2>
							<h2 style="margin-top:30px"  >PRICE:-<?php echo $r['Price'];?></h2>

						</div>
					</a>
                </div>
					<?php
				 }
				 ?>
		
                <div class="clearfix"> </div>
            </div>
		</div>






 <?php
 include "c_fotter.php";
 ?>