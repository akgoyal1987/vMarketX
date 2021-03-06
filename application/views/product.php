<?php include('header.php');?>
	<!-- Main Container Starts -->
		<div id="main-container" class="container">
		<!-- Breadcrumb Starts -->
			<!--<ol class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li><a href="category-grid.html">Category</a></li>
				<li class="active">Product</li>
			</ol>-->
		<!-- Breadcrumb Ends -->
		<!-- Product Info Starts -->

			<div class="row product-info full">
			<!-- Left Starts -->
				<div class="col-sm-4 images-block">
					<!-- <a href="<?php echo base_url()."uploads/products/". $product[0]->image1 ?>"> -->
					<span class='zoom' id='ex0'>
						<img src="<?php if($product[0]->image1){ echo base_url()."uploads/products/". $product[0]->image1; } else { echo base_url()."images/default.jpeg"; } ?>" alt="Image" id="p_image1" class="img-responsive thumbnail" />
						</span>
					<!-- </a> -->
					<ul class="list-unstyled list-inline">
						<li>
							<!-- <a href="<?php echo base_url()."uploads/products/". $product[0]->image1 ?>"> -->
							<span class='zoom' id='ex1'>
								<img src="<?php if($product[0]->image1){ echo base_url()."uploads/products/". $product[0]->image1; } else { echo base_url()."images/default.jpeg"; } ?>" alt="Image" width=75 height= 75 class="img-responsive thumbnail" />
								</span>
							<!-- </a> -->
						</li>
						<li>
							<!-- <a href="<?php echo base_url()."uploads/products/". $product[0]->image2 ?>"> -->
							<span class='zoom' id='ex2'>
								<img src="<?php if($product[0]->image2){ echo base_url()."uploads/products/". $product[0]->image2; } else { echo base_url()."images/default.jpeg"; } ?>" alt="Image" width=75 height= 75 class="img-responsive thumbnail" />
								</span>
							<!-- </a> -->
						</li>
						<li>
							<!-- <a href="<?php echo base_url()."uploads/products/". $product[0]->image3 ?>"> -->
							<span class='zoom' id='ex3'>
								<img src="<?php if($product[0]->image3){ echo base_url()."uploads/products/". $product[0]->image3; } else { echo base_url()."images/default.jpeg"; } ?>" alt="Image" width=75 height= 75 class="img-responsive thumbnail" />
								</span>
							<!-- </a> -->
						</li>
						<li>
							<!-- <a href="<?php echo base_url()."uploads/products/". $product[0]->image4 ?>"> -->
							<span class='zoom' id='ex4'>
								<img src="<?php if($product[0]->image4){ echo base_url()."uploads/products/". $product[0]->image4; } else { echo base_url()."images/default.jpeg"; } ?>" alt="Image" width=75 height= 75 class="img-responsive thumbnail" />
								</span>
							<!-- </a> -->
						</li>
					</ul>
				</div>
			<!-- Left Ends -->
			<!-- Right Starts -->
				<div class="col-sm-8 product-details">
					<div class="panel-smart">
					<!-- Product Name Starts -->
						<h2>
						<?php
							echo $product[0]->product_name;
	        		    ?>
						</h2>
					<!-- Product Name Ends -->
						<hr />
					<!-- Manufacturer Starts -->
						<ul class="list-unstyled manufacturer">
							<li>
								<span>Category:</span> 
								<?php
							echo $product[0]->product_category;
	        		          ?>
							</li>
							<li><span>Subcategory:</span> 
								<?php
							echo $product[0]->product_subcategory;
	        		          ?>
							</li>
							<li><span>Shop Name:</span> 
								<?php
							echo $product[0]->shop_name;
	        		          ?>
							</li>
							<li><span>Min. Quantity :</span> 
								<?php
							echo $product[0]->min_quantity;?>&nbsp;&nbsp;<?php echo $product[0]->unit;
	        		          ?>
							</li>
							<!--<li><span>Reward Points:</span> 300</li>
							<li>
								<span>Availability:</span> <strong class="label label-danger">Out Of Stock</strong>
							</li>-->
						</ul>
					<!-- Manufacturer Ends -->
						<hr />
					<!-- Price Starts -->
						<div class="price">
							<span class="price-head">Price :</span>
							<span class="price-new">Rs. <?php
							echo $product[0]->selling_price;
	        		          ?></span> 
							<span class="price-old">Rs. <?php
							echo $product[0]->mrp_price;
	        		          ?></span>
							<!--<p class="price-tax">Ex Tax: $279.99</p>-->
						</div>
					<!-- Price Ends -->
						<hr />
					<!-- Available Options Starts -->
						<div class="options">
							<h3>Quantity :</h3>
							<!--<div class="form-group">
								<label for="select" class="control-label text-uppercase">Select:</label>
								<select name="select" id="select" class="form-control">
									<option value="1" selected>Select</option>
									<option value="2">Option 1</option>
									<option value="3">Option 1</option>
								</select>
							</div>	
							<div class="form-group">
								<label class="control-label text-uppercase">Radio:</label>
								<div class="radio">
									<label>
										<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
										Option one is this and that&mdash;be sure to include why it's great
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
										Option two can be something else and selecting it will deselect option one
									</label>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label text-uppercase">Checkbox:</label>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										Option one is this and that&mdash;be sure to include why it's great
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="" checked>
										Option two is checked
									</label>
								</div>
							</div>-->
							<div class="row">
							<div class="form-group col-md-4">
								<!--<label class="control-label text-uppercase" for="input-quantity">Qty:</label>-->
							<!-- <form method="post" action="<?php echo base_url() . "cart/add_to_cart1/" . $product[0]->p_id; ?>">								 -->
							<input type="text" name="quantity" value="<?php echo $product[0]->min_quantity; ?>" size="2" id="input-quantity" class="form-control" required />
							<input type="hidden" name="min_quantity" value="<?php echo $product[0]->min_quantity; ?>" size="2" id="min_quantity_val" class="form-control"  />
							<input type="hidden" name="unit" value="<?php echo $product[0]->unit; ?>" size="2" id="unit_val" class="form-control"  />


							</div>
							<div class="col-md-4"><?php
							echo $product[0]->unit;
	        		          ?></div>
							
							</div>
							<div class="cart-button button-group">
								<!--<button type="button" title="Wishlist" class="btn btn-wishlist">
									<i class="fa fa-heart"></i>
								</button>
								<button type="button" title="Compare" class="btn btn-compare">
									<i class="fa fa-bar-chart-o"></i>
								</button>-->
								<input type="hidden" main="<?php echo $product[0]->p_id; ?>" id="hidden_p_id">
								<input type="hidden" main="<?php echo $product[0]->s_id; ?>" id="hidden_s_id">
									<button type="submit"  class="btn btn-cart" id="cart_btn">
									Add to cart
									<i class="fa fa-shopping-cart"></i> 
								</button>

								<!-- </form>								 -->
							</div>
						</div>
					<!-- Available Options Ends -->
					</div>
				</div>
			<!-- Right Ends -->
			</div>
		<!-- Product Info Ends -->	
		<!-- Tabs Starts -->
			<div class="tabs-panel panel-smart">
			<!-- Nav Tabs Starts -->
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#tab-description">Description</a>
					</li>
					<!--<li>
						<a href="#tab-specification">Specification</a>
					</li>
					<li><a href="#tab-ainfo">Additional Information</a></li>
					<li><a href="#tab-review">Review</a></li>-->
				</ul>
			<!-- Nav Tabs Ends -->
			<!-- Tab Content Starts -->
				<div class="tab-content clearfix">
				<!-- Description Starts -->
					<div class="tab-pane active" id="tab-description">
						<p>
						<?php
							echo $product[0]->description;
	        		          ?>
						</p>
						
					</div>
				<!-- Description Ends -->
				<!-- Specification Starts -->
					<div class="tab-pane" id="tab-specification">
						<table class="table table-bordered">
							<thead>
							  <tr>
								<td colspan="2"><strong>Name</strong></td>
							  </tr>
							</thead>
							<tbody>
							  <tr>
								<td>Name</td>
								<td>Attribute Specification</td>
							  </tr>
							</tbody>
						</table>
						<table class="table table-bordered">
							<thead>
							  <tr>
								<td colspan="2"><strong>Name</strong></td>
							  </tr>
							</thead>
							<tbody>
							  <tr>
								<td>Name</td>
								<td>Attribute Specification</td>
							  </tr>
							</tbody>
						</table>
					</div>
				<!-- Specification Ends -->
				<!-- Additional Information Starts -->
					<div class="tab-pane" id="tab-ainfo">
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						</p>
					</div>
				<!-- Additional Information Ends -->
				<!-- Review Starts -->
					<div class="tab-pane" id="tab-review">
						<form class="form-horizontal">
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-name">Name</label>
								<div class="col-sm-10">
								<input type="text" name="name" value="" id="input-name" class="form-control" />
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-review">Review</label>
								<div class="col-sm-10">
									<textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
									<div class="help-block">
										Some note goes here..
									</div>
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label ratings">Ratings</label>
								<div class="col-sm-10">
									Bad&nbsp;
									<input type="radio" name="rating" value="1" />
									&nbsp;
									<input type="radio" name="rating" value="2" />
									&nbsp;
									<input type="radio" name="rating" value="3" />
									&nbsp;
									<input type="radio" name="rating" value="4" />
									&nbsp;
									<input type="radio" name="rating" value="5" />
									&nbsp;Good
								</div>
							</div>
							<div class="buttons">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="button" id="button-review" class="btn btn-warning">
										Submit
									</button>
								</div>
							</div>
						</form>
					</div>
				<!-- Review Ends -->
				</div>
			<!-- Tab Content Ends -->
			</div>
		<!-- Tabs Ends -->		
		<!-- Related Products Starts -->
			<div class="product-info-box">
				<h4 class="heading">Related Products</h4>
			<!-- Products Row Starts -->
				<div class="row">
				<!-- Product #1 Starts -->
					<?php foreach($related_products as $latest_product){ ?>
					<div class="col-md-3 col-sm-6">
						<div class="product-col">
							<div class="image">
								<a href="<?php echo base_url() . "home/product/" . $latest_product->p_id; ?>"><img src="<?php if($latest_product->image1){ echo base_url()."uploads/products/". $latest_product->image1; } else { echo base_url()."images/default.jpeg"; } ?>" alt="product" class="img-responsive" /></a>
							</div>
							<div class="caption">
								<h4><a href="<?php echo base_url() . "home/product/" . $latest_product->p_id; ?>"><?php echo $latest_product->product_name ?></a></h4>
								<div class="description">

									<?php echo substr($latest_product->description,0,31) ?>....
								</div>
								<div class="price">
									<span class="price-new">Rs.<?php echo $latest_product->selling_price ?></span> 
									<span class="price-old">Rs.<?php echo $latest_product->mrp_price ?></span>
								</div>
								<div class="cart-button button-group">
									<!--<button type="button" title="Wishlist" class="btn btn-wishlist">
										<i class="fa fa-heart"></i>
									</button>
									<button type="button" title="Compare" class="btn btn-compare">
										<i class="fa fa-bar-chart-o"></i>
									</button>-->
									<a href="<?php echo base_url() . "cart/add_to_cart/" . $latest_product->p_id."/".$latest_product->min_quantity; ?>">	<button type="button" class="btn btn-cart">
										Add to cart
										<i class="fa fa-shopping-cart"></i> 
									</button>									
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				<!-- Product #1 Ends -->
				
				</div>
			<!-- Products Row Ends -->
			</div>
		<!-- Related Products Ends -->
		</div>
		<script>
		$(document).ready(function(){
			$('#cart_btn').click(function(){
			var input_quan = parseInt($('#input-quantity').val());
			var min_quan = parseInt($('#min_quantity_val').val());
			var unit = $('#unit_val').val();
			var main_p_val = $('#hidden_p_id').attr('main');
			var main_s_val = $('#hidden_s_id').attr('main');
			// alert(main_p_val + main_s_val);
			if(input_quan >= min_quan)
			{
				$.ajax({
	            url:"<?php echo base_url() ?>index.php/cart/add_to_cart_qty",
	            type:"POST",
	            data:"input_quan="+input_quan+"&main_p_val="+main_p_val+"&main_s_val="+main_s_val,
	            success: function(response){
	           	window.location.href="<?php echo base_url(); ?>Shops/shop_page/"+main_s_val;
	            },
	            error: function(data)
				{
					alert(data);
				} 
	            });

			}
			else
			{
				alert("You Have To Select Minimum"+min_quan+" "+unit);
				document.getElementById("input-quantity").value = "";
			}
			});
		});
		</script>

		<script>
		$(document).ready(function(){
			$('ul li span img').click(function(){
			var img_id = $(this).attr('src');
			$("#p_image1").attr("src",img_id);
			});
		    });
		</script>


	<!-- Main Container Ends -->
	<?php include('footer.php');?>