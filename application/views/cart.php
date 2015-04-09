<style type="text/css">
	#cart_image1
	{
		width: 120px;
		height:120px;
	}
</style>
<?php include('header.php');?>
	<!-- Main Container Starts -->
		<div id="main-container" class="container">
		<!-- Breadcrumb Starts -->
<!-- 			<ol class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li class="active">Shopping Cart</li>
			</ol> -->
		<!-- Breadcrumb Ends -->
		<!-- Main Heading Starts -->
			<h2 class="main-heading text-center">
				Shopping Cart
			</h2>
		<!-- Main Heading Ends -->
		<!-- Shopping Cart Table Starts -->
			<div class="table-responsive shopping-cart-table">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td class="text-center">
								Image
							</td>
							<td class="text-center">
								Product Details
							</td>							
							<td class="text-center">
								Quantity
							</td>
							<td class="text-center">
								Unit
							</td>
							<td class="text-center">
								Price
							</td>
							<td class="text-center">
								Action
							</td>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($this->cart->contents() as $items): ?>
						<tr>
							<td class="text-center">
								<a href="<?php echo base_url("home/product/".$items['id']); ?>">
									<img id="cart_image1" src="<?php if($items['options']['image']){ echo base_url()."uploads/products/". $items['options']['image']; } else { echo base_url()."images/default.jpeg"; } ?>" alt="Product Name" title="Product Name" class="img-thumbnail" />
								</a>
							</td>
							<td class="text-center">
								<a href="<?php echo base_url("home/product/".$items['id']);?>"><?php echo $items['name'];?></a>
							</td>							
							<td class="text-center">
								<div class="input-group btn-block">
									<?php echo $items['options']['quantity']; ?>
								</div>								
							</td>
							<td class="text-center">
								<?php echo $items['options']['unit']; ?>
							</td>
							<td class="text-center">
								Rs. <?php echo number_format((float)$items['price'], 2, '.', ''); ?>
							</td>
							<td class="text-center">
								<a href="<?php echo base_url("cart/delete_item/".$items['rowid']); ?>">
										<i class="fa fa-times-circle"></i>
										</a>
								</button>
							</td>
						</tr>
						<?php endforeach;?>

						
					</tfoot>
				</table>				
			</div>
		<!-- Shopping Cart Table Ends -->
		<!-- Shipping Section Starts -->
			<section class="registration-area">
				<div class="row">
				<!-- Shipping & Shipment Block Starts -->
					<div class="col-sm-6">
					<div class="panel panel-smart">
							<div class="panel-heading">
								<h3 class="panel-title">
									Terms &amp; Conditions
								</h3>
							</div>
							<div class="panel-body">
								<p>
									HTML Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. 
								</p>
								<p>
									Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. 
								</p>
								<p>
									Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat.
								</p>								
							</div>
							</div>
					<!-- Taxes Block Starts -->
						<!--<div class="panel panel-smart">
							<div class="panel-heading">
								<h3 class="panel-title">
									Shipping &amp; Taxes
								</h3>
							</div>
							<div class="panel-body">
							<!-- Form Starts -->
								<!--<form class="form-horizontal" role="form">
									<div class="form-group">
										<label for="inputCountry" class="col-sm-3 control-label">Country :</label>
										<div class="col-sm-9">
											<select class="form-control" id="inputCountry">
												<option>- All Countries -</option>
												<option>India</option>
												<option>USA</option>
												<option>UK</option>
												<option>China</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputRegion" class="col-sm-3 control-label">Region :</label>
										<div class="col-sm-9">
											<select class="form-control" id="inputRegion">
												<option>- All Regions -</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputZipCode" class="col-sm-3 control-label">Zip Code :</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputZipCode" placeholder="Zip Code">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-9">
											<button type="submit" class="btn btn-default">
												Get Info
											</button>
										</div>
									</div>
								</form>
							<!-- Form Ends
							</div>
						</div>-->
					<!-- Taxes Block Ends -->
					<!-- Shipment Information Block Starts -->
						<!--<div class="panel panel-smart">
							<div class="panel-heading">
								<h3 class="panel-title">
									Shipment Information
								</h3>
							</div>
							<div class="panel-body">
							<!-- Form Starts 
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label for="inputFname" class="col-sm-3 control-label">First Name :</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputFname" placeholder="First Name">
										</div>
									</div>
									<div class="form-group">
										<label for="inputLname" class="col-sm-3 control-label">Last Name :</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputLname" placeholder="Last Name">
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail" class="col-sm-3 control-label">Email :</label>
										<div class="col-sm-9">
											<input type="email" class="form-control" id="inputEmail" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<label for="inputPhone" class="col-sm-3 control-label">Phone :</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputPhone" placeholder="Phone">
										</div>
									</div>
									<div class="form-group">
										<label for="inputAddress1" class="col-sm-3 control-label">Address/1 :</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputAddress1" placeholder="Address/1">
										</div>
									</div>
									<div class="form-group">
										<label for="inputAddress2" class="col-sm-3 control-label">Address/2 :</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputAddress2" placeholder="Address/2">
										</div>
									</div>
									<div class="form-group">
										<label for="inputCity" class="col-sm-3 control-label">City :</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputCity" placeholder="City">
										</div>
									</div>
									<div class="form-group">
										<label for="inputPostCode" class="col-sm-3 control-label">Postal Code :</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputPostCode" placeholder="Postal Code">
										</div>
									</div>
									<div class="form-group">
										<label for="inputCountry" class="col-sm-3 control-label">Country :</label>
										<div class="col-sm-9">
											<select class="form-control" id="inputCountry1">
												<option>- All Countries -</option>
												<option>India</option>
												<option>USA</option>
												<option>UK</option>
												<option>China</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputRegion" class="col-sm-3 control-label">Region :</label>
										<div class="col-sm-9">
											<select class="form-control" id="inputRegion1">
												<option>- All Regions -</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-9">
											<button type="submit" class="btn btn-warning">
												Submit
											</button>
										</div>
									</div>
								</form>
							<!-- Form Ends 
							</div>
						</div>
					<!-- Shipment Information Block Ends -->
					</div>
				<!-- Shipping & Shipment Block Ends -->
				<!-- Discount & Conditions Blocks Starts -->
					<div class="col-sm-6">
					<!-- Conditions Panel Ends -->
					<!-- Total Panel Starts -->
						<div class="panel panel-smart">
							<div class="panel-heading">
								<h3 class="panel-title">
									Total
								</h3>
							</div>
							<?php
							$price = number_format((float)$items['price'], 2, '.', '');
							$val = (float) $price*4/100;
							$ship_fee = 10.00;
							?>
							<div class="panel-body">
								<dl class="dl-horizontal">
									<dt>Subtotal :</dt>
									<dd><?php echo number_format((float)$items['price'], 2, '.', ''); ?> Rs.</dd>
									<dt>Tax Total :</dt>
									<dd><?php echo $val; ?>&nbsp;Rs.&nbsp;(4%)</dd>
									<dt>Shipment Fee :</dt>
									<dd><?php echo $ship_fee; ?>.00&nbsp;Rs.</dd>
								</dl>
								<hr />
								<dl class="dl-horizontal total">
									<dt>Total :</dt>
									<dd><?php echo $price+$val+$ship_fee; ?>&nbsp;Rs.</dd>
								</dl>
								<hr />
								<div class="text-uppercase clearfix">
									<a href="<?php echo base_url(); ?>Shops/shop_page/<?php echo $items['shops_id_data'][0]->s_id; ?>" class="btn btn-default pull-left">
										<span class="hidden-xs">Continue Shopping</span>
										<span class="visible-xs">Continue</span>
									</a>
									<a href="#" class="btn btn-default pull-right">		
										Checkout
									</a>
								</div>
							</div>
						</div>
					<!-- Total Panel Ends -->
					</div>
				<!-- Discount & Conditions Blocks Ends -->
				</div>
			</section>
		<!-- Shipping Section Ends -->
		</div>
	<!-- Main Container Ends -->
<?php include('footer.php');?>