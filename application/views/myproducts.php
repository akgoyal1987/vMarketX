<?php include('shophome_header.php');?>	
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
				Your Products
			</h2>
		<!-- Main Heading Ends -->
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
								<a href="product.html">
									<img src="<?php echo base_url();?>images/product-images/cart-thumb-img1.jpg" alt="Product Name" title="Product Name" class="img-thumbnail" />
								</a>
							</td>
							<td class="text-center"><?php echo $row->product_name; ?></td>
							<td class="text-center"><?php echo $row->product_category; ?></td>
							<td class="text-center"><?php echo $row->product_subcategory; ?></td>
							<td class='text-center'>
							<a title='Update' class='btn btn-default tool-tip' href="<?php echo base_url() . "products/selectProduct/" . $row->p_id; ?>">
						    <i class='fa fa-refresh'>
						    </i>
						    </a>
						    </button>
						    <a title='Remove' class='btn btn-default tool-tip' href="<?php echo base_url() . "products/deleteProduct/" . $row->p_id; ?>">
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