<?php include('header.php');?>
<?php 
error_reporting(0);
ini_set('display_errors', 0);
?>
	<!-- Main Container Starts -->
		<div id="main-container" class="container">
			<div class="row">
			<!-- Sidebar Starts -->
				<div class="col-md-3">
				<!-- Categories Links Starts -->
					<h3 class="side-heading">Categories</h3>
					<div class="list-group">
						<a href="category-grid.html" class="list-group-item">
							<i class="fa fa-chevron-right"></i>
							Spices &amp; Herbs
						</a>
						<a href="category-grid.html" class="list-group-item">
							<i class="fa fa-chevron-right"></i>
							Chili Powder
						</a>
						<a href="category-grid.html" class="list-group-item">
							<i class="fa fa-chevron-right"></i>
							Herb Blends
						</a>
						<a href="category-grid.html" class="list-group-item">
							<i class="fa fa-chevron-right"></i>
							Seasonings
						</a>
						<a href="category-grid.html" class="list-group-item">
							<i class="fa fa-chevron-right"></i>
							Salt Free Spices
						</a>
					</div>
				<!-- Categories Links Ends -->
				<!-- Shopping Options Starts -->
					<h3 class="side-heading">Shopping Options</h3>
					<div class="list-group">
						<div class="list-group-item">
							Brands
						</div>
						<div class="list-group-item">
							<div class="filter-group">
								<label class="checkbox">
									<input name="filter1" type="checkbox" value="br1" checked="checked" />
									Brand Name 1
								</label>
								<label class="checkbox">
									<input name="filter2" type="checkbox" value="br2" />
									Brand Name 2
								</label>
								<label class="checkbox">
									<input name="filter2" type="checkbox" value="br2" />
									Brand Name 3
								</label>
							</div>
						</div>
						<div class="list-group-item">
							Manufacturer
						</div>
						<div class="list-group-item">
							<div class="filter-group">
								<label class="radio">
									<input name="filter-manuf" type="radio" value="mr1" checked="checked" />
									Manufacturer Name 1
								</label>
								<label class="radio">
									<input name="filter-manuf" type="radio" value="mr2" />
									Manufacturer Name 2
								</label>
								<label class="radio">
									<input name="filter-manuf" type="radio" value="mr3" />
									Manufacturer Name 3
								</label>
							</div>							
						</div>	
						<div class="list-group-item">
							<button type="button" class="btn btn-warning">Filter</button>
						</div>
					</div>
				<!-- Shopping Options Ends -->
				<!-- Bestsellers Links Starts -->
					<!--<h3 class="side-heading">Bestsellers</h3>
					<div class="product-col">
						<div class="image">
							<img src="images/product-images/pimg1.jpg" alt="product" class="img-responsive" />
						</div>
						<div class="caption">
							<h4>
								<a href="product-full.html">Simply Organic Seeds</a>
							</h4>
							<div class="description">
								We are so lucky living in such a wonderful time. Our almost unlimited ...
							</div>
							<div class="price">
								<span class="price-new">$199.50</span> 
								<span class="price-old">$249.50</span>
							</div>
							<div class="cart-button button-group">
								<button type="button" title="Wishlist" class="btn btn-wishlist">
									<i class="fa fa-heart"></i>
								</button>
								<button type="button" title="Compare" class="btn btn-compare">
									<i class="fa fa-bar-chart-o"></i>
								</button>
								<button type="button" class="btn btn-cart">
									Add to cart
									<i class="fa fa-shopping-cart"></i> 
								</button>									
							</div>
						</div>
					</div>-->
				<!-- Bestsellers Links Ends -->
				</div>
			<!-- Sidebar Ends -->
			<!-- Primary Content Starts -->
				<div class="col-md-9">
				<!-- Breadcrumb Starts -->
					<ol class="breadcrumb">
						<li><a href="<?php echo base_url();?>">Home</a></li>
						<li class=""><?php echo $products[0]->product_category ?></li>
						<li class="active"><?php echo $products[0]->product_subcategory ?></li>
					</ol>
				<!-- Breadcrumb Ends -->
				
				<!-- Product Grid Display Starts -->
					<div class="row">
					<!-- Product #1 Starts -->
					<?php foreach($products as $latest_product){ ?>
					<div class="col-md-4 col-sm-6">
						<div class="product-col">
							<div class="image">
								<a href="<?php echo base_url() . "home/product/" . $latest_product->p_id; ?>"><img src="<?php echo base_url()."uploads/products/". $latest_product->image1 ?>" alt="product" class="img-responsive" /></a>
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
									<a href="<?php echo base_url() . "cart/add_to_cart/" . $latest_product->p_id; ?>">	<button type="button" class="btn btn-cart">									
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
				<!-- Product Grid Display Ends -->
				</div>
			<!-- Primary Content Ends -->
			
			</div>
		</div>
	<!-- Main Container Ends -->
<?php include('footer.php');?>