<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Vcartx Stores</title>
	
	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Google Web Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	
	<!-- CSS Files -->
	<link href="<?php echo base_url();?>font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/responsive.css" rel="stylesheet">
	
	<!--[if lt IE 9]>
		<script src="js/ie8-responsive-file-warning.js"></script>
	<![endif]-->
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>images/fav-144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>images/fav-114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>images/fav-72.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>images/fav-57.png">
	<link rel="shortcut icon" href="<?php echo base_url();?>images/fav.png">
	<script>
	  // // This is called with the results from from FB.getLoginStatus().
	  // function statusChangeCallback(response) {
	  //   console.log('statusChangeCallback');
	  //   console.log(response);
	  //   // The response object is returned with a status field that lets the
	  //   // app know the current login status of the person.
	  //   // Full docs on the response object can be found in the documentation
	  //   // for FB.getLoginStatus().
	  //   if (response.status === 'connected') {
	  //     // Logged into your app and Facebook.	      
	  //     testAPI();
	  //   } else if (response.status === 'not_authorized') {
	  //     // The person is logged into Facebook, but not your app.
	  //     $(".logout_btn").css('display', 'none`');
	  //     $(".fb_login_btn").css('display', 'block');
	  //   } else {
	  //     // The person is not logged into Facebook, so we're not sure if
	  //     // they are logged into this app or not.	
	  //     $(".logout_btn").css('display', 'none');
	  //     $(".fb_login_btn").css('display', 'block');      
	  //   }
	  // }

	  // // This function is called when someone finishes with the Login
	  // // Button.  See the onlogin handler attached to it in the sample
	  // // code below.
	  // function checkLoginState() {
	  //   FB.getLoginStatus(function(response) {
	  //     statusChangeCallback(response);
	  //   });
	  // }

	  // window.fbAsyncInit = function() {
		 //  FB.init({
		 //    appId      : '383109518510005',
		 //    cookie     : true,  // enable cookies to allow the server to access 
		 //                        // the session
		 //    xfbml      : true,  // parse social plugins on this page
		 //    version    : 'v2.1' // use version 2.1
		 //  });

		 //  // Now that we've initialized the JavaScript SDK, we call 
		 //  // FB.getLoginStatus().  This function gets the state of the
		 //  // person visiting this page and can return one of three states to
		 //  // the callback you provide.  They can be:
		 //  //
		 //  // 1. Logged into your app ('connected')
		 //  // 2. Logged into Facebook, but not your app ('not_authorized')
		 //  // 3. Not logged into Facebook and can't tell if they are logged into
		 //  //    your app or not.
		 //  //
		 //  // These three cases are handled in the callback function.

		 //  FB.getLoginStatus(function(response) {
		 //  	console.log(JSON.stringify(response));
		 //    statusChangeCallback(response);
		 //  });		  
	  // };

	  // // Load the SDK asynchronously
	  // (function(d, s, id) {
	  //   var js, fjs = d.getElementsByTagName(s)[0];
	  //   if (d.getElementById(id)) return;
	  //   js = d.createElement(s); js.id = id;
	  //   js.src = "//connect.facebook.net/en_US/sdk.js";
	  //   fjs.parentNode.insertBefore(js, fjs);
	  // }(document, 'script', 'facebook-jssdk'));

	  // // Here we run a very simple test of the Graph API after login is
	  // // successful.  See statusChangeCallback() for when this call is made.
	  // function testAPI() {
	  //   FB.api('/me', function(response) {
	  //     $(".logout_btn").css('display', 'block');
	  //     $(".fb_login_btn").css('display', 'none');
	  //   });
	  // }

	  // function logOut(){
  	// 	FB.logout(function(response) {
		 //  	console.log(JSON.stringify(response));
	  //       // Person is now logged out
	  //     });
	  // }
	</script>
	<style type="text/css">
	#cart_image{
		width: 80px;
		height: 40px;
	}
	</style>
	
	<script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery-migrate-1.2.1.min.js"></script>	
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap-hover-dropdown.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url();?>js/custom.js"></script>
	<script type="text/javascript">
		$(function (){
	 		$(".addToCart1").click(function(){
				$.ajax({
	            	type: "POST",
	            	url: "<?php echo base_url('cart/add_to_cart');?>",
	            	data: "itemid="+5+"&qry="+1,
	            	success: function(data){
	                	alert('Items added');
	            	},
	            	error: function(e){
	                	console.log(e.message);
	            	}
	    		});
			});
		});
	</script>
</head>
<body>
	<!-- Header Section Starts -->
		<header id="header-area">
		<!-- Header Top Starts -->
			<div class="header-top">
				<div class="container">
					<!-- Header Links Starts -->
						<div class="col-sm-8 col-xs-12">
							<div class="header-links">
								<ul class="nav navbar-nav pull-left">
									<li>
										<a href="<?php echo base_url();?>">
											<i class="fa fa-home" title="Home"></i>
											<span class="hidden-sm hidden-xs">
												Home
											</span>
										</a>
									</li>
									<!--<li>
										<a href="#">	
											<i class="fa fa-heart" title="Wish List"></i>
											<span class="hidden-sm hidden-xs">
												Wish List(0)
											</span>
										</a>
									</li>-->
									<li>
										<a href="#">
											<i class="fa fa-user" title="My Account"></i>
											<span class="hidden-sm hidden-xs">
												My Account
											</span>
										</a>
									</li>
									<li>
										<a href="cart.html">
											<i class="fa fa-shopping-cart" title="Shopping Cart"></i>
											<span class="hidden-sm hidden-xs">
												Shopping Cart
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-crosshairs" title="Checkout"></i>
											<span class="hidden-sm hidden-xs">
												Checkout
											</span>
										</a>
									</li>
									<!-- <li>
										<a href="register.html">
											<i class="fa fa-unlock" title="Register"></i>
											<span class="hidden-sm hidden-xs">
												Register
											</span>
										</a>
									</li> -->
									<!-- <li>
										<a href="javascript:void(0);">
											<span class="hidden-sm hidden-xs">
												<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
												</fb:login-button>
											</span>
										</a>
									</li> -->
								</ul>
							</div>
						</div>
					<!-- Header Links Ends -->
					<!-- Currency & Languages Starts -->
						<div class="col-sm-4 col-xs-12">
							<div class="pull-right">
							<!-- Currency Starts -->

								<?php if(!$this->session->userdata('isLoggedIn')) {?>
									<div class="btn-group">									
										<a class="btn logout_btn" href="<?php echo base_url()?>home/login">
											Login
										</a>
									</div>
								<?php } ?>
								<!-- <div class="btn-group fb_login_btn">
									<fb:login-button class="btn btn-link" scope="public_profile,email" onlogin="checkLoginState();">
									</fb:login-button>								
								</div>	 -->							
							<!-- Currency Ends -->
							<!-- Languages Starts -->
							<?php if($this->session->userdata('isLoggedIn')) {?>
								<div class="btn-group">
									<p class="welcome_message btn">Welcome <a href="<?php echo base_url()?>home/userhome"><?php echo $this->session->userdata('firstname')." ".$this->session->userdata('lastname') ?></a></p>
								</div>
								<div class="btn-group">									
									<a class="btn logout_btn" href="<?php echo base_url()?>home/logout">
										Logout
									</a>
								</div>
							<?php } ?>
							<!-- Languages Ends -->
							</div>
						</div>
					<!-- Currency & Languages Ends -->
				</div>
			</div>
		<!-- Header Top Ends -->
		<!-- Starts -->
			<div class="container">
			<!-- Main Header Starts -->
				<div class="main-header">
					<div class="row">
					<!-- Logo Starts -->
						<div class="col-md-6">
							<div id="logo">
								<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/logo.png" title="Vcartx" alt="Vcartx" class="img-responsive" /></a>
							</div>
						</div>
					<!-- Logo Starts -->
					<!-- Search Starts -->
						<div class="col-md-3">
							<div id="search">
								<div class="input-group">
								  <input type="text" id="search_id" class="form-control input-lg" placeholder="Search">
								  <span class="input-group-btn">
									<button class="btn btn-lg" type="button">
										<!-- <i class="fa fa-search"></i> -->
									</button>
								  </span>
								</div>
							</div>	
						</div>
					<!-- Search Ends -->
					<!-- Shopping Cart Starts -->
						<div class="col-md-3">
							<div id="cart" class="btn-group btn-block">
								<button type="button" data-toggle="dropdown" class="btn btn-block btn-lg dropdown-toggle">
									<i class="fa fa-shopping-cart"></i>
									<span class="hidden-md">Cart:</span> 
									<span id="cart-total"><?php echo $this->cart->total_items();?> item(s) - Rs. <?php echo number_format((float)$this->cart->total(), 2, '.', ''); ?></span>
									<i class="fa fa-caret-down"></i>
								</button>
								<ul class="dropdown-menu pull-right">
									<li>
										<table class="table table-striped hcart">
										
										<?php foreach ($this->cart->contents() as $items): ?>
											<tr>
												<td class="text-center">
													<a href="<?php echo base_url("home/product/".$items['id']); ?>">
														<!--<img src="<?php echo base_url()."uploads/products/". $items['options']['image'] ?>" alt="image" title="image" class="img-thumbnail img-responsive" />-->
													    <img id="cart_image"  src="<?php if($items['options']['image']){ echo base_url()."uploads/products/". $items['options']['image']; } else { echo base_url()."images/default.jpeg"; } ?>" alt="image" title="image" class="img-thumbnail img-responsive" />

													</a>
												</td>
												<td class="text-left">
													<a href="<?php echo base_url("home/product/".$items['id']);?>">
														<?php echo $items['name'];?>
													</a>
												</td>
												<td class="text-right">x <?php echo $items['options']['quantity']; ?> <?php echo $items['options']['unit']; ?></td>

												<td class="text-right">Rs. <?php echo number_format((float)$items['price'], 2, '.', ''); ?></td>
												<td class="text-center">
													<a href="<?php echo base_url("cart/delete_item/".$items['rowid']); ?>">
														<i class="fa fa-times"></i>

													</a>
												</td>
											</tr>
											<?php endforeach;?>
										</table>
									</li>
									<li>
										<table class="table table-bordered total">
											<tbody>
											<?php if($this->cart->total_items()) {?>
												<tr>
													<td class="text-right"><strong>Sub-Total</strong></td>
													<td class="text-left">Rs. <?php echo number_format((float)$this->cart->total(), 2, '.', ''); ?></td>
												</tr>
												<?php } else{ ?>
												<tr>
													<td class="text-center">Cart Is Empty</td>

												</tr>
												<?php } ?>
											</tbody>
										</table>
										<p class="text-right btn-block1">
											<a href="<?php echo base_url('cart/view_cart'); ?>">
												View Cart
											</a>
											<a href="#">
												Checkout
											</a>
										</p>
									</li>									
								</ul>
							</div>
						</div>
					<!-- Shopping Cart Ends -->
					</div>
				</div>
			<!-- Main Header Ends -->
			<!-- Main Menu Starts -->
				<nav id="main-menu" class="navbar" role="navigation">
				<!-- Nav Header Starts -->
					<div class="navbar-header">
						<button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-cat-collapse">
							<span class="sr-only">Toggle Navigation</span>
							<i class="fa fa-bars"></i>
						</button>
					</div>
				<!-- Nav Header Ends -->
				<!-- Navbar Cat collapse Starts -->
					<div class="collapse navbar-collapse navbar-cat-collapse">
						<ul class="nav navbar-nav">
						<?php foreach($categories as $category){ ?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
								<?php echo $category->name ?>
								</a>
								<ul class="dropdown-menu" role="menu">
								<?php foreach($subcategories as $subcategory){
									if($subcategory->category==$category->name){?>
									<li><a tabindex="-1" href="<?php echo base_url() . "category/categoryGrid/" . $subcategory->id; ?>"><?php echo $subcategory->name ?>
									</a>
									</li><?php } ?>
									<?php } ?>
								</ul>
							</li>
							<?php } ?>
						</ul>
					</div>
				<!-- Navbar Cat collapse Ends -->
				</nav>
			<!-- Main Menu Ends -->
			</div>
		<!-- Ends -->

		</header>

	<!-- Header Section Ends -->
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
 	       $.ajax({
            url:"<?php echo base_url() ?>index.php/products/search_bar",
            type:"POST",
            data:"val="+val,
            success: function(response){
           	  $("#product_search").html(response);
           	 // window.location.href = "http://localhost/vmarketx/category/categoryGrid/22";
           	 // alert(response);
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