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
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label for="inputFname" class="col-sm-3 control-label">Shop Name :</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="inputFname" placeholder="Shop Name" required>
										</div>
									</div>
									<div class="form-group">
										<label for="inputCountry" class="col-sm-3 control-label">Shop Category :</label>
										<div class="col-sm-6">
											<select class="form-control" id="inputCountry1" required>
												<option value="">--Select Category--</option>
												<option value="kirana">kirana</option>
												<option>cloth</option>
												<option>fdf</option>
												<option></option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputAddress1" class="col-sm-3 control-label">Address :</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="inputAddress1" placeholder="Address" required>
										</div>
									</div>
									<div class="form-group">
										<label for="inputAddress2" class="col-sm-3 control-label">Location :</label>
										<div class="col-sm-6">
											<select class="form-control" id="inputCountry1" required>
												<option value="">--Select Location--</option>
												<option>India</option>
												<option>USA</option>
												<option>UK</option>
												<option>China</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputCity" class="col-sm-3 control-label">City :</label>
										<div class="col-sm-6">
											<select class="form-control" id="inputCountry1" required>
												<option value="">--Select City--</option>
												<option>India</option>
												<option>USA</option>
												<option>UK</option>
												<option>China</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputRegion" class="col-sm-3 control-label">State :</label>
										<div class="col-sm-6">
											<select class="form-control" id="inputCountry1" required>
												<option value="">--Select State--</option>
												<option>India</option>
												<option>USA</option>
												<option>UK</option>
												<option>China</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputPostCode" class="col-sm-3 control-label">Postal Code :</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="inputPostCode" placeholder="Postal code" pattern="[0-9]{6}" required title=" For Ex.-452002">
										</div>
									</div>

									<div class="form-group">
										<label for="inputPhone" class="col-sm-3 control-label">Phone :</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="inputPhone" placeholder="Phone" pattern="[0-9]{10}" required title=" For Ex.-9074739352">
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail" class="col-sm-3 control-label">Email :</label>
										<div class="col-sm-6">
											<input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail" class="col-sm-3 control-label">Minimum Amount :</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="inputEmail" placeholder="Min Amount" required>
										</div>
									</div>
									<div class="form-group">
										<label for="inputPhone" class="col-sm-3 control-label">Description :</label>
										<div class="col-sm-6">
											<textarea rows="8" class="form-control" placeholder="Description" required></textarea>
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