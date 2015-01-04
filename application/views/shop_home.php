<?php include('shophome_header.php');?>	
	<!-- Main Container Starts -->
		<div id="main-container" class="container">
		<!-- Breadcrumb Starts -->
			<!-- <ol class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li class="active">Register</li>
			</ol> -->
			<h2 class="main-heading text-center">Welcome
				<?php
	        		foreach($results1 as $row){
	        		?>
	        		<?php echo $row->shop_name; ?>
	        		<?php } ?>
			</h2>
		<!-- Breadcrumb Ends -->
		<!-- Shopping Cart Table Starts -->
			<div class="table-responsive shopping-cart-table">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td class="text-center">Logo</td>
							<td class="text-center">Product Name</td>
							<td class="text-center">Product Category</td>
							<td class="text-center">Product Subcategory</td>
							<td class="text-center">Action</td>
						</tr>
					</thead>
					<tbody>
						<?php
	        				 foreach($results as $row){
	        				 ?>
			   				    <tr>
			   				    <td class="text-center">
								<a href="">
								<img src="<?php echo base_url()."uploads/products/". $row->image1 ?>" alt="Product Name" title="Product Name" class="img-thumbnail" width=120 height=120/>
								</a>
							</td>
							<td class="text-center"><?php echo $row->product_name; ?></td>
							<td class="text-center"><?php echo $row->product_category; ?></td>
							<td class="text-center"><?php echo $row->product_subcategory; ?></td>
							<td class='text-center'>
							<a title='Update' class='btn btn-default tool-tip' href="<?php echo base_url() . "products/selectProduct/" .$id."/". $row->p_id; ?>">
						    <i class='fa fa-edit'>
						    </i>
						    </a>
						    </button>
						    <a title='Remove' class='btn btn-default tool-tip' onclick="return confirm('Are You Sure?')" href="<?php echo base_url() . "products/deleteProduct/".$id."/" . $row->p_id; ?>">
			   				<i class="fa fa-trash-o">
							</i>
			    			</a>
			    			</td>
			   			</tr>
			   			<?php } ?>
					</tbody>
					<tfoot>
						<!-- <tr>
						  <td colspan="4" class="text-right">
							<strong>Total :</strong>
						  </td>
						  <td colspan="2" class="text-left">
							$300
						  </td>
						</tr> -->
					</tfoot>
				</table>				
			</div>
		<!-- Shopping Cart Table Ends -->
		
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
		</div>
	<!-- Main Container Ends -->
<?php include('footer.php');?>