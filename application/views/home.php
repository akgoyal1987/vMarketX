<?php include('header.php');?>
	<!-- Slider Section Starts -->
		<div class="slider">
			<div class="container">
				<div id="main-carousel" class="carousel slide" data-ride="carousel">
					<!-- Wrapper For Slides Starts -->
						<div class="carousel-inner">
							<div class="item active">
								<img src="images/slider-imgs/slide1-img.jpg" alt="Slider" class="img-responsive" />
							</div>
							<div class="item">
								<img src="images/slider-imgs/slide1-img.jpg" alt="Slider" class="img-responsive" />
							</div>
						</div>
					<!-- Wrapper For Slides Ends -->

					<!-- Controls Starts -->
						<a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					<!-- Controls Ends -->
				</div>				
			</div>
		</div>
	<!-- Slider Section Ends -->
	<!-- 3 Column Banners Starts -->
		<div class="col3-banners">
			<div class="container">
				<ul class="row list-unstyled">
					<li class="col-sm-4">
						<img src="images/banners/3col-banner1.jpg" alt="banners" class="img-responsive" />
					</li>
					<li class="col-sm-4">
						<img src="images/banners/3col-banner2.jpg" alt="banners" class="img-responsive" />
					</li>
					<li class="col-sm-4">
						<img src="images/banners/3col-banner3.jpg" alt="banners" class="img-responsive" />
					</li>
				</ul>
			</div>
		</div>
	<!-- 3 Column Banners Ends -->
	<!-- Latest Products Starts -->
		<section class="products-list">			
			<div class="container">
			<!-- Heading Starts -->
				<h2 class="product-head">Latest Products</h2>
			<!-- Heading Ends -->
			<!-- Products Row Starts -->
				<div class="row">
				<!-- Product #1 Starts -->
				<?php foreach($latest_products as $latest_product){ ?>
					<div class="col-md-3 col-sm-6">
						<div class="product-col">
							<div class="image">
								<img src="<?php echo base_url()."uploads/products/". $latest_product->image1 ?>" alt="product" class="img-responsive" />
							</div>
							<div class="caption">
								<h4><a href="product.html"><?php echo $latest_product->product_name ?></a></h4>
								<div class="description">

									<?php echo substr($latest_product->description,0,35) ?>
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
									<button type="button" class="btn btn-cart">
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
		</section>
	<!-- Latest Products Ends -->
	<!-- 2 Column Banners Starts -->
		<div class="col2-banners">
			<div class="container">
				<ul class="row list-unstyled">
					<li class="col-sm-4">
						<img src="images/banners/2col-banner1.jpg" alt="banners" class="img-responsive" />
					</li>
					<li class="col-sm-8">
						<img src="images/banners/2col-banner2.jpg" alt="banners" class="img-responsive" />
					</li>
				</ul>
			</div>
		</div>
	<!-- 2 Column Banners Ends -->
	<!-- Specials Products Starts -->
		<section class="products-list">			
			<div class="container">
			<!-- Heading Starts -->
				<h2 class="product-head">Specials Products</h2>
			<!-- Heading Ends -->
			<!-- Products Row Starts -->
				<div class="row">
				<!-- Product #1 Starts -->
				<?php foreach($special_products as $special_product){ ?>
					<div class="col-md-3 col-sm-6">
						<div class="product-col">
							<div class="image">
								<img src="<?php echo base_url()."uploads/products/". $special_product->image1 ?>" alt="product" class="img-responsive" />
							</div>
							<div class="caption">
								<h4><a href="<?php echo base_url()."home/product" ?>"><?php echo $special_product->product_name ?></a></h4>
								<div class="description">

									<?php echo substr($special_product->description,0,35) ?>
								</div>
								<div class="price">
									<span class="price-new">Rs.<?php echo $special_product->selling_price ?></span> 
									<span class="price-old">Rs.<?php echo $special_product->mrp_price ?></span>
								</div>
								<div class="cart-button button-group">
									<!--<button type="button" title="Wishlist" class="btn btn-wishlist">
										<i class="fa fa-heart"></i>
									</button>
									<button type="button" title="Compare" class="btn btn-compare">
										<i class="fa fa-bar-chart-o"></i>
									</button>-->
									<button type="button" class="btn btn-cart">
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
		</section>
	<!-- Specials Products Ends -->
<?php include('footer.php');?>