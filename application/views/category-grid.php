
<?php include('header.php');?>
<?php 
error_reporting(0);
ini_set('display_errors', 0);
?>
<style>
	#amount{
		padding-left: 65px !important;
		 background-color: white !important;
	}
</style>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
	<!-- Main Container Starts -->
		<div id="main-container" class="container">
			<div class="row">
			<!-- Sidebar Starts -->
				<div class="col-md-3">
				<!-- price filter Starts -->
				<div class="list-group-item">
				<h3 class="side-heading1">Filter By Price</h3>
				<p>
				<label for="amount">Price Range:</label>
				<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
				</p>
				<div id="slider-range">
					<input type="hidden" id="pr_sc" name="product_subcategory" value="<?php echo $products[0]->product_subcategory ?>" />
				</div>
				<!-- price filter End -->

				<!-- locations filter Starts -->
				<h3 class="side-heading">Filter By Locations</h3>
				<p>
				<label for="amount1">Locations:</label><br>
				<?php
				foreach ($locations as $location) { ?>
					<input type="checkbox" id="location_id" value="<?php echo $location->location ?>" />
					<label for="amount1"><?php echo $location->location ?></label><br>
				<?php } ?>
				</p>
				<button type="button" class="btn btn-warning" id="lcn_filter_btn">Filter</button>
				</div>
				<!-- locations filter End -->

				</div>
			<!-- Sidebar Ends -->
			<!-- Primary Content Starts -->
				<div class="col-md-9" id="product_box">
				<!-- Breadcrumb Starts -->
					<ol class="breadcrumb">
						<li><a href="<?php echo base_url();?>">Home</a></li>
						<li class=""><?php echo $products[0]->product_category ?></li>
						<li class="active"><?php echo $products[0]->product_subcategory ?></li>
					</ol>
				<!-- Breadcrumb Ends -->
				<div id="all_data"></div>
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
			<!-- Primary Content Ends -->
			
			</div>
		</div>
		<script>
$(function() {
$( "#slider-range" ).slider({

range: true,
min: 0,
max: <?php $a = end($max_price_sc); echo end($a); ?>,
values: [ 0, <?php $a = end($max_price_sc); echo end($a); ?> ],
slide: function( event, ui ) {
$( "#amount" ).val( "Rs." + ui.values[ 0 ] + " - Rs." + ui.values[ 1 ] );
},
change: function(event, ui) { 
 
  var min_value = ui.values[0]; 
  var max_value = ui.values[1];
  //alert(min_value+","+max_value);

 $( "#amount" ).val( "Rs." + $( "#slider-range" ).slider( "values", 0 ) +
" - Rs." + $( "#slider-range" ).slider( "values", 1 ) );
 	var sc_name = $('#pr_sc').val();
	//alert(sc_name);
 	
  $.ajax({
		url:"<?php echo base_url() ?>index.php/products/price_filter",
		type:"post",
		data:"min_value="+min_value+"&max_value="+max_value+"&sc_name="+sc_name,
		success: function(response)
		{
		$("#product_box").html(response);
		},
		error: function(data)
		{
			alert(data);
		}
		});

  } 
});
});
</script>
<script>
	$(document).ready(function(){
	$("#lcn_filter_btn").on("click", function() {
		var sc_name = $('#pr_sc').val();
	  var val = "";
        $(':checkbox:checked').each(function(){
        val += ",'"+$(this).val()+"'";
       });		
        //alert(val);
        $.ajax({
            url:"<?php echo base_url() ?>index.php/products/location_filter",
            type:"POST",
            data:"val="+val+"&sc_name="+sc_name,
            success: function(response){
           	$("#product_box").html(response);
            },
            error: function(data)
			{
				alert(data);
			} 
            }); 
	});
	});
</script>
 <script type="text/javascript">
	$(document).ready(function(){
		$('#search_id').keydown(function (e){
          if(e.keyCode == 13)
          {
 	       var val = $('#search_id').val();
 	       	if(val == "")
 	       	{
 	       		return false;
 	       	}
		 window.location.href="<?php echo base_url(); ?>category/search_data?val="+val;
          }
      });
   
	});
	</script>

	<!-- Main Container Ends -->
<?php include('footer.php');?>