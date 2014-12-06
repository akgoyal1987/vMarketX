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
									Edit Shop
								</h3>
							</div>
							<div class="panel-body">
							<!-- Form Starts -->
								<form class="form-horizontal"  role="form" method="post" action="<?php echo base_url() . "Shops/update/" . $results[0]->s_id; ?>">
									<div class="form-group">
										<label for="inputFname" class="col-sm-3 control-label">Shop Name :</label>
										<div class="col-sm-6">
											<input type="text" value="<?php echo $results[0]->shop_name ?>" class="form-control" id="inputFname" name="shop_name" placeholder="Shop Name" required>
										</div>
									</div>
									<div class="form-group">
										<label for="inputCountry" class="col-sm-3 control-label">Shop Category :</label>
										<div class="col-sm-6">
											<select class="form-control" id="inputCountry1" name="shop_category"  required>
											<option value="">--Select Category--</option>
											<option value="kirana" <?php if($results[0]->shop_category=='kirana') echo "selected"; ?>>kirana</option>
											<option value="cloth" <?php if($results[0]->shop_category=='cloth') echo "selected='selected'"; ?>>cloth</option>
											<option value="fdf" <?php if($results[0]->shop_category=='fdf') echo "selected='selected'"; ?>>fdf</option>
											
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputAddress1" class="col-sm-3 control-label">Address :</label>
										<div class="col-sm-6">
											<input type="text" value="<?php echo $results[0]->address ?>" class="form-control" id="inputAddress1" name="address" placeholder="Address" required>
										</div>
									</div>
									<div class="form-group">
										<label for="inputAddress2" class="col-sm-3 control-label">Location :</label>
										<div class="col-sm-6">
											<select class="form-control" id="inputCountry1" name="location" required>
											<option value="">--Select Location--</option>
											<?php foreach($locations as $location){ ?>
											<option value="<?php echo $location->name ?>" <?php if($results[0]->location==
											$location->name) echo "selected='selected'"; ?>><?php echo $location->name ?>
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
											<option value="<?php echo $city->name ?>" <?php if($results[0]->city==
											$city->name) echo "selected='selected'"; ?>><?php echo $city->name ?>
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
											<option value="<?php echo $state->name ?>" <?php if($results[0]->state==
											$state->name) echo "selected='selected'"; ?>><?php echo $state->name ?>
											</option>
											<?php } ?>
												
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputPostCode" class="col-sm-3 control-label">Postal Code :</label>
										<div class="col-sm-6">
											<input type="text" value="<?php echo $results[0]->postal_code ?>" class="form-control" id="inputPostCode" name="postal_code" placeholder="Postal code" pattern="[0-9]{6}" required title=" For Ex.-452002">
										</div>
									</div>

									<div class="form-group">
										<label for="inputPhone" class="col-sm-3 control-label">Phone :</label>
										<div class="col-sm-6">
											<input type="text" value="<?php echo $results[0]->phone_no ?>" class="form-control" id="inputPhone" name="phone_no" placeholder="Phone" pattern="[0-9]{10}" required title=" For Ex.-9074739352">
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail"  class="col-sm-3 control-label">Email :</label>
										<div class="col-sm-6">
											<input type="email" value="<?php echo $results[0]->email ?>" class="form-control" id="inputEmail" name="email" placeholder="Email" required>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail" class="col-sm-3 control-label">Minimum Amount :</label>
										<div class="col-sm-6">
											<input type="text" value="<?php echo $results[0]->min_ammount ?>" class="form-control" id="inputEmail" name="min_ammount" placeholder="Min Amount" required>
										</div>
									</div>
									<div class="form-group">
										<label for="inputPhone" class="col-sm-3 control-label">Description :</label>
										<div class="col-sm-6">
											<textarea rows="8" class="form-control" placeholder="Description" name="description" required><?php echo $results[0]->description ?></textarea>
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