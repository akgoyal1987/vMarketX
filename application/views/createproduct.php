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
									Add Products
								</h3>
							</div>
							<div class="panel-body">
							<!-- Form Starts -->
								<form class="form-horizontal" role="form" method="post" action="<?php echo base_url();?>products/createproduct">
									<div class="form-group">
										<label for="inputFname" class="col-sm-3 control-label">Product Name :</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="inputFname" name="product_name" placeholder="Product Name" required>
										</div>
									</div>
									<div class="form-group">
										<label for="inputCountry" class="col-sm-3 control-label">Product Category :</label>
										<div class="col-sm-6">
											<select class="form-control" id="inputCountry1" name="product_category"  required>
												<option value="">--Select Category--</option>
											<?php foreach($categories as $category){ ?>
											<option value="<?php echo $category->name ?>"><?php echo $category->name ?>
											</option>
											<?php } ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputCountry" class="col-sm-3 control-label">Product Subcategory :</label>
										<div class="col-sm-6">
											<select class="form-control" id="inputCountry1" name="product_subcategory"  required>
												<option value="">--Select Subcategory--</option>
											<?php foreach($subcategories as $subcategory){ ?>
											<option value="<?php echo $subcategory->name ?>"><?php echo $subcategory->name ?>
											</option>
											<?php } ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputCountry" class="col-sm-3 control-label">Unit :</label>
										<div class="col-sm-6">
											<select class="form-control" id="inputCountry1" name="unit"  required>
												<option value="">--Select Unit--</option>
											<option value="per/kg">Per/Kg</option>
											<option value="per/piece">Per/Piece</option>
											<option value="per/packet">Per/Packet</option>
											<option value="per/bottle">Per/Bottle</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputAddress1" class="col-sm-3 control-label"> Price (MRP) :</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="inputAddress1" name="mrp_price" placeholder="Price (MRP)"  pattern="([1-9][0-9]*|0)(\.[0-9]{1,2})?$" title=" For Ex.-500 OR 500.22">
										</div>
									</div>
									<div class="form-group">
										<label for="inputPostCode" class="col-sm-3 control-label">Price (Selling) :</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="inputPostCode" name="selling_price" placeholder="Price (Selling)"  pattern="([1-9][0-9]*|0)(\.[0-9]{1,2})?$" title=" For Ex.-500 OR 500.22">
										</div>
									</div>
									<div class="form-group">
										<label for="inputPhone" class="col-sm-3 control-label">Description :</label>
										<div class="col-sm-6">
											<textarea rows="8" class="form-control" placeholder="Description" name="description" required></textarea>
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
	<!-- Main Container Ends -->
<?php include('footer.php');?>