<?php
 include "c_header.php";
?>



<div class="gallery" id="gallery" style="background-color:white">
	<h2 class="tittle" style="color:black" align="center" >Select Category</h2>
			<div class="gallery-bottom">
				 <?php 
				 $con=mysqli_connect("localhost","root","","project_db");
				$db=mysqli_select_db($con,"project_db");
				 $q="select * from tb_category";
				 $c=mysqli_query($con,$q);
				 while($r=mysqli_fetch_array($c))
				 {
					 ?>

				 <div class="view view-fifth">
                    <a href="c_product.php?id=<?php echo $r['category_id'];?>" title="Image Title"><img src="../admin/upload/<?php echo $r['image'];?>" style="width:320px; height:200px " alt="" class="img-responsive">
						<div class="mask">
						<br><br>
							<h2 style="margin-top:30px" align="center" ><?php echo $r['Category_name'];?></h2>
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