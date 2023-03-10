
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
					 ?>

<div class="product-main">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Single</li>
		 </ol>
		 <div class="ctnt-bar cntnt">
			 <div class="content-bar">
				 <div class="single-page">					 
					 <!--Include the Etalage files-->
						<link rel="stylesheet" href="css/etalage.css">
						<script src="js/jquery.etalage.min.js"></script>
					 <!-- Include the Etalage files -->
					 <script>
							jQuery(document).ready(function($){
					
								$('#etalage').etalage({
									thumb_image_width: 300,
									thumb_image_height: 400,
									source_image_width: 700,
									source_image_height: 800,
									show_hint: true,
									click_callback: function(image_anchor, instance_id){
										alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
									}
								});
								// This is for the dropdown list example:
								$('.dropdownlist').change(function(){
									etalage_show( $(this).find('option:selected').attr('class') );
								});
					
							});
						</script>
						<!--//details-product-slider-->
					 <div class="details-left-slider">
						  <ul id="etalage">
							 <li>
								<a href="optionallink.html">
								<img class="etalage_thumb_image" src="../admin/upload/<?php echo $r['Image1'];?>" style="width:320px; height:200px " alt="" class="img-responsive"> />
								<img class="etalage_source_image" src="../admin/upload/<?php echo $r['Image1'];?>" style="width:320px; height:200px " alt="" class="img-responsive"> />
								</a>
							 </li>
							 <li>
								<img class="etalage_thumb_image" src="../admin/upload/<?php echo $r['Image2'];?>" style="width:320px; height:200px " alt="" class="img-responsive"> />
								<img class="etalage_source_image" src="../admin/upload/<?php echo $r['Image2'];?>" style="width:320px; height:200px " alt="" class="img-responsive">/>
							 </li>
							 <li>
								<img class="etalage_thumb_image" src="../admin/upload/<?php echo $r['Image3'];?>" style="width:320px; height:200px " alt="" class="img-responsive"> />
								<img class="etalage_source_image" src="../admin/upload/<?php echo $r['Image3'];?>" style="width:320px; height:200px " alt="" class="img-responsive"> />
							 </li>
							 
							 <div class="clearfix"></div>
						 </ul>
					 </div>
					 <div class="details-left-info">
					 <div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
											
							<h4 style="margin-top:30px" >NAME:-<?php echo $r['Product_name'];?></h3>
							
								<h5 style="margin-top:30px" >PRICE:-<?php echo $r['Price'];?></h5>
								
								<h5 style="margin-top:30px" >STOCK:-<?php echo $r['stock'];?></h5>
							
							<div class="btn_form">
								<a href="c_cart.php?id=<?php echo $r['Product_id'];?>">Add to cart</a>
							</div>
					<?php
				 }
				 ?>
					 <div class="clearfix"></div>				 	
				 </div>
			 </div>
		 </div>	

		  <?php
 include "c_fotter.php";
 ?>