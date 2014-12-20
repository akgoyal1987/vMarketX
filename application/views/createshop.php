<?php include('userhome_header.php');?>	
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
									Create Shop
								</h3>
							</div>
							<div class="panel-body">
							<!-- Form Starts -->
								<form class="form-horizontal" role="form" action="<?php echo base_url();?>Shops/createshop" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label for="inputFname" class="col-sm-3 control-label">Shop Name :</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="inputFname" name="shop_name" placeholder="Shop Name" required>
										</div>
									</div>
									<div class="form-group">
										<label for="inputCountry" class="col-sm-3 control-label">Shop Category :</label>
										<div class="col-sm-6">
											<select class="form-control" id="inputCountry1" name="shop_category"  required>
												<option value="">--Select Category--</option>
												<option value="kirana">kirana</option>
												<option value="cloth">cloth</option>
												<option value="fdf">fdf</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputAddress1" class="col-sm-3 control-label">Address :</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="inputAddress1" name="address" placeholder="Address" required>
										</div>
									</div>
									<div class="form-group">
										<label for="inputAddress2" class="col-sm-3 control-label">Location :</label>
										<div class="col-sm-6">
											<select class="form-control" id="inputCountry1" name="location" required>
												<option value="">--Select Location--</option>
												<?php foreach($locations as $location){ ?>
											<option value="<?php echo $location->name ?>"><?php echo $location->name ?>
											</option>
											<?php } ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputCity" class="col-sm-3 control-label">City :</label>
										<div class="col-sm-6">
											<select class="form-control" id="inputCountry1" name="city" required>
												<option value="">--Select City--</option>
													<?php foreach($cities as $city){ ?>
											<option value="<?php echo $city->name ?>"><?php echo $city->name ?>
											</option>
											<?php } ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputRegion" class="col-sm-3 control-label">State :</label>
										<div class="col-sm-6">
											<select class="form-control" id="inputCountry1" name="state" required>
												<option value="">--Select State--</option>
												<?php foreach($states as $state){ ?>
											<option value="<?php echo $state->name ?>"><?php echo $state->name ?>
											</option>
											<?php } ?>
											
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputPostCode" class="col-sm-3 control-label">Postal Code :</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="inputPostCode" name="postal_code" placeholder="Postal code" pattern="[0-9]{6}" required title=" For Ex.-452002">
										</div>
									</div>

									<div class="form-group">
										<label for="inputPhone" class="col-sm-3 control-label">Phone :</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="inputPhone" name="phone_no" placeholder="Phone" pattern="[0-9]{10}" required title=" For Ex.-9074739352">
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail" class="col-sm-3 control-label">Email :</label>
										<div class="col-sm-6">
											<input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" required>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail" class="col-sm-3 control-label">Minimum Amount :</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="inputEmail" name="min_ammount" placeholder="Min Amount" required>
										</div>
									</div>
									<div class="form-group">
										<label for="inputPhone" class="col-sm-3 control-label">Description :</label>
										<div class="col-sm-6">
											<textarea rows="8" class="form-control" placeholder="Description" name="description" required></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3" for="inputPhone">Select Images</label>
									</div>
									<div class="row">
										<div class="col-md-3 img_container">
											<input id="image1" type="file" name='image1' accept="image/*" onchange="checkFile(this)"/>
											<img class="form-control" id="target1" alt="Click to Select Image" src="<?php echo base_url();?>images/default.jpeg"/>
										</div>
										<div class="col-md-3 img_container">
											<input id="image2" type="file" name='image2' accept="image/*" onchange="checkFile(this)"/>
											<img class="form-control" id="target2" alt="Click to Select Image" src="<?php echo base_url();?>images/default.jpeg"/>
										</div>
										<div class="col-md-3 img_container">
											<input id="image3" type="file" name='image3' accept="image/*" onchange="checkFile(this)"/>
											<img class="form-control" id="target3" alt="Click to Select Image" src="<?php echo base_url();?>images/default.jpeg"/>
										</div>
										<div class="col-md-3 img_container">
											<input id="image4" type="file" name='image4' accept="image/*" onchange="checkFile(this)"/>
											<img class="form-control" id="target4" alt="Click to Select Image" src="<?php echo base_url();?>images/default.jpeg"/>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-6">
											<input type="submit" class="btn btn-warning" id="i_submit">
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