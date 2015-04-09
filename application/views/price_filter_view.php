<div class="col-md-9" id="product_box">
				
					<div class="row">
					<!-- Product #1 Starts -->
					<?php foreach($products as $latest_product){ ?>
					<div class="col-md col-sm-6">
						<div class="product-col" id="product_width">
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
									<!-- <a href="<?php echo base_url() . "cart/add_to_cart/" . $latest_product->p_id."/".$latest_product->min_quantity; ?>">	<button type="button" class="btn btn-cart">									 -->
									<a href="<?php echo base_url() . "cart/add_to_cart/" . $latest_product->p_id."/".$latest_product->min_quantity."/".$latest_product->s_id; ?>">	<button type="button" class="btn btn-cart">
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