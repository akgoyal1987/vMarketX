<?php include('shophome_header.php');?>	
	<!-- Main Container Starts -->
		<div id="main-container" class="container">
		<!-- Breadcrumb Starts -->
			<!-- <ol class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li class="active">Register</li>
			</ol> -->
		<!-- Breadcrumb Ends -->
		<!-- Main Heading Starts -->
			<h2 class="main-heading text-center">
				<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
				</fb:login-button>

				<div id="status">
				</div>
			</h2>
		<!-- Main Heading Ends -->
		<!-- Login Form Section Starts -->
			<section class="login-area">
				<div class="row">
					<div class="col-sm-6">
					<!-- Login Panel Starts -->
						
					<!-- Login Panel Ends -->
					</div>
					<div class="col-sm-6">
					<!-- Account Panel Starts -->						
					<!-- Account Panel Ends -->
					<!-- Guest Checkout Panel Starts -->
						<!-- <div class="panel panel-smart">
							<div class="panel-heading">
								<h3 class="panel-title">
									Checkout as Guest
								</h3>
							</div>
							<div class="panel-body">
								<p>
									Checkout as a guest instead!
								</p>
								<button class="btn btn-warning">As Guest</button>
							</div>
						</div> -->
					<!-- Guest Checkout Panel Ends -->
					</div>
				</div>
			</section>
		<!-- Login Form Section Ends -->
		<div class="panel panel-smart">
							<div class="panel-heading">
								<h3 class="panel-title">
									Edit Product
								</h3>
							</div>
							<div class="panel-body">
							<!-- Form Starts -->
								<form class="form-horizontal"  role="form" method="post" action="<?php echo base_url() . "products/update/".$id."/".$results[0]->p_id; ?>" enctype="multipart/form-data">
									<div class="form-group">
										<label for="inputFname" class="col-sm-3 control-label">Product Name :</label>
										<div class="col-sm-6">
											<input type="text" value="<?php echo $results[0]->product_name ?>" class="form-control" id="inputFname" name="product_name" placeholder="Product Name" required>
										</div>
									</div>
									<div class="form-group">
										<label for="inputCountry" class="col-sm-3 control-label">Product Category :</label>
										<div class="col-sm-6">
											<select class="form-control" id="inputCountry1" name="product_category"  required>
											<option value="">--Select Category--</option>
											<?php foreach($categories as $category){ ?>
											<option value="<?php echo $category->name ?>" <?php if($results[0]->product_category==$category->name) echo "selected='selected'"; ?>><?php echo $category->name ?>
											</option>
											<?php } ?>
											</select>
										</div>
									</div>
										<div class="form-group">
										<label for="inputCountry" class="col-sm-3 control-label">Product Subcategory :</label>
										<div class="col-sm-6">
											<select class="form-control" id="inputCountry1" name="product_subcategory"  required>
											<option value="">--Select Subategory--</option>
											<?php foreach($subcategories as $subcategory){ ?>
											<option value="<?php echo $subcategory->name ?>" <?php if($results[0]->product_subcategory==$subcategory->name) echo "selected='selected'"; ?>><?php echo $subcategory->name ?>
											</option>
											<?php } ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputAddress1" class="col-sm-3 control-label"> Minimum Quantity :</label>
										<div class="col-sm-6">
											<input type="text" value="<?php echo $results[0]->min_quantity ?>" class="form-control" id="inputAddress1" name="min_quantity" placeholder="Minimum Quantity"  pattern="[0-9]{1,5}" title="For Ex. -10 OR 100" required>
										</div>
									</div>
									<div class="form-group">
									<div class="form-group">
										<label for="inputCountry" class="col-sm-3 control-label">Unit :</label>
										<div class="col-sm-6">
											<select class="form-control" id="inputCountry1" name="unit"  required>
											<option value="">--Select Unit--</option>
										<option value="kg" <?php if($results[0]->unit=='kg') echo "selected"; ?>>kg</option>
											<option value="piece" <?php if($results[0]->unit=='piece') echo "selected"; ?>>Piece</option>
											<option value="packet" <?php if($results[0]->unit=='packet') echo "selected='selected'"; ?>>Packet</option>
											<option value="bottle" <?php if($results[0]->unit=='bottle') echo "selected='selected'"; ?>>Bottle</option>
											<option value="gram" <?php if($results[0]->unit=='gram') echo "selected"; ?>>Gram</option>
											<option value="leter" <?php if($results[0]->unit=='leter') echo "selected='selected'"; ?>>Leter</option>
											<option value="meter" <?php if($results[0]->unit=='meter') echo "selected='selected'"; ?>>Meter</option>
											
											</select>
										</div>
									</div>
										<div class="form-group">
										<label for="inputFname" class="col-sm-3 control-label">Price (MRP) :</label>
										<div class="col-sm-6">
											<input type="text" value="<?php echo $results[0]->mrp_price ?>" class="form-control" id="inputFname" name="mrp_price" placeholder="Price (MRP)" pattern="([1-9][0-9]*|0)(\.[0-9]{1,2})?$" title=" For Ex.-500 OR 500.22">
										</div>
									</div>
										<div class="form-group">
										<label for="inputFname" class="col-sm-3 control-label">Price (Selling) :</label>
										<div class="col-sm-6">
											<input type="text" value="<?php echo $results[0]->selling_price ?>" class="form-control" id="inputFname" name="selling_price" placeholder="Price (Selling)" pattern="([1-9][0-9]*|0)(\.[0-9]{1,2})?$" title=" For Ex.-500 OR 500.22" >
										</div>
									</div>
									<div class="form-group">
										<label for="inputPhone" class="col-sm-3 control-label">Description :</label>
										<div class="col-sm-6">
											<textarea rows="8" class="form-control" placeholder="Description" name="description" required><?php echo $results[0]->description ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3" for="inputPhone">Edit Images</label>
									</div>
									<div class="row">
										<div class="col-md-3 img_container">
											<input id="image1" type="file" name='image1' accept="image/*" onchange="checkFile(this)"/>
											<input type="hidden" name='image1' id="hidden_img1" value="<?php echo $results[0]->image1; ?>">
											<img class="form-control" id="target1" alt="Click to Select Image" src="<?php if($results[0]->image1){ echo base_url()."uploads/products/". $results[0]->image1; } else { echo base_url()."images/default.jpeg"; } ?>" />
										</div>
										<div class="col-md-3 img_container">
											<input id="image2" type="file" name='image2' accept="image/*" onchange="checkFile(this)"/>
											<input type="hidden" name='image2' id="hidden_img2" value="<?php echo $results[0]->image2; ?>">
											<img class="form-control" id="target2" alt="Click to Select Image" src="<?php if($results[0]->image2){ echo base_url()."uploads/products/". $results[0]->image2; } else { echo base_url()."images/default.jpeg"; } ?>" />
										</div>
										<div class="col-md-3 img_container">
											<input id="image3" type="file" name='image3' accept="image/*" onchange="checkFile(this)"/>
											<input type="hidden" name='image3' id="hidden_img3" value="<?php echo $results[0]->image3; ?>">
											<img class="form-control" id="target3" alt="Click to Select Image" src="<?php if($results[0]->image3){ echo base_url()."uploads/products/". $results[0]->image3; } else { echo base_url()."images/default.jpeg"; } ?>" />
										</div>
										<div class="col-md-3 img_container">
											<input id="image4" type="file" name='image4' accept="image/*" onchange="checkFile(this)"/>
											<input type="hidden"name='image4' id="hidden_img4" value="<?php echo $results[0]->image4; ?>">
											<img class="form-control" id="target4" alt="Click to Select Image" src="<?php if($results[0]->image4){ echo base_url()."uploads/products/". $results[0]->image4; } else { echo base_url()."images/default.jpeg"; } ?>"/>
										</div>
									</div>
									
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-6">
											<input type="submit" class="btn btn-warning">
									
											
										</div>
									</div>
								</form>
							<!-- Form Ends -->
							</div>
						</div>
					<!-- Shipment Information Block Ends -->
					</div>
		</div>
		<style>
			.img_container input{
				display: none;
			}
			.img_container img{
				background-color: white;
				cursor:pointer;
			}
		</style>
		<script>
			function showImage(src,target) {
			  var fr=new FileReader();
			  // when image is loaded, set the src of the image where you want to display it
			  fr.onload = function(e) { target.src = this.result; };
			  src.addEventListener("change",function() {
			    // fill fr with image data    
			    fr.readAsDataURL(src.files[0]);
			  });
			}
			var image1 = document.getElementById("image1");
			var target1 = document.getElementById("target1");
			showImage(image1,target1);
			var image2 = document.getElementById("image2");
			var target2 = document.getElementById("target2");
			showImage(image2,target2);
			var image3 = document.getElementById("image3");
			var target3 = document.getElementById("target3");
			showImage(image3,target3);
			var image4 = document.getElementById("image4");
			var target4 = document.getElementById("target4");
			showImage(image4,target4);
			

			$(document).ready(function(){
				$(".img_container img").height($(".img_container img").width());
				$(".img_container img").click(function(){
			  		$(this).parent().children('input').click();
				});
			})

			function checkFile(fieldObj)
   		{
        		var FileName  = fieldObj.value;
        		var FileExt = FileName.substr(FileName.lastIndexOf('.')+1);
        		var FileSize = fieldObj.files[0].size;
        		var FileSizeMB = (FileSize/1048576).toFixed(2);
        if (FileExt=='jpg'|| FileExt=='png' || FileExt=='gif' || FileExt=='jpeg' || FileExt=='JPG'|| FileExt=='PNG' || FileExt=='GIF' || FileExt=='JPEG')
        {
        	if(FileSize<1048576)
        	{
        	    showImage();
            }
        	else
        	{
        		alert("Max File Size Should Be 1 MB");
        		location.reload(true);
        	}            
        }
        else
        {
        	   alert("You Can Upload Only jpg,png,gif Images");
        	   location.reload(true);
        }
    }
		</script>
	<!-- Main Container Ends -->
<?php include('footer.php');?>