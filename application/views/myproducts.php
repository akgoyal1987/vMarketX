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
			<div class="table-responsive shopping-cart-table" class="pagination pagination-lg">
				<table class="table table-bordered" id="table_data1">
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
								<img src="<?php if($row->image1){ echo base_url()."uploads/products/". $row->image1; } else { echo base_url()."images/default.jpeg"; } ?>" alt="Product Name" title="Product Name" class="img-thumbnail" width=120 height=120/>
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
		
		</div>
		<script>
          $(document).ready(function() {
		  $('#table_data1').dataTable({
    "bPaginate": true,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": true,
    "bAutoWidth": false });
});
</script>
	<!-- Main Container Ends -->
<?php include('footer.php');?>