<?php include('userhome_header.php');?>	
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
				My Shops
			</h2>
		<!-- Main Heading Ends -->
		<!-- Shopping Cart Table Starts -->
			<div class="table-responsive shopping-cart-table">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td class="text-center">Logo</td>
							<td class="text-center">Shop Name</td>
							<td class="text-center">Shop Category</td>
							<td class="text-center">Email Address</td>
							<td class="text-center">Action</td>
						</tr>
					</thead>
					<tbody>
						<?php
	        				 foreach($results as $row){
			   				    ?>
			   				    <tr>
			   				    <td class="text-center">
								<a href="product.html">
									<img src="<?php echo base_url();?>images/product-images/cart-thumb-img1.jpg" alt="Product Name" title="Product Name" class="img-thumbnail" />
								</a>
							</td>
							<td class="text-center"><a href="<?php echo base_url() . "products/shophome/" . $row->s_id; ?>"><?php echo $row->shop_name; ?></a></td>
							<td class="text-center"><?php echo $row->shop_category; ?></td>
							<td class="text-center"><?php echo $row->email; ?></td>
    						<td class='text-center'>
							<a title='Update' class='btn btn-default tool-tip' href="<?php echo base_url() . "Shops/selectShop/" . $row->s_id; ?>">
							
						     <i class='fa fa-refresh'>
						     </i>
						    </a>
						     </button>
						    <a title='Remove' class='btn btn-default tool-tip' href="<?php echo base_url() . "Shops/delete/" . $row->s_id; ?>">
			   				  <i class='fa fa-times-circle'>
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
		
		</div>
	<!-- Main Container Ends -->
<?php include('footer.php');?>