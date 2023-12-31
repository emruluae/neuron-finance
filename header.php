<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Neuron Finance is a finance, corporate and business HTML template">
        <meta name="keywords" content="advisor, corporate accountant, finance, financial, insurance, investment, consultation">
        <meta name="author" content="trendytheme.net">

        <!--  favicon -->
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/assets/img/ico/favicon.png">

        <!--  apple-touch-icon -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri() ?>/assets/img/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri() ?>/assets/img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri() ?>/assets/img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/assets/img/ico/apple-touch-icon-57-precomposed.png">

		<?php 
		$header_top_number = cs_get_option('header_top_number');
		$header_top_social = cs_get_option('header_top_social');

		wp_head()?>
	</head>


	<body <?php body_class();?>>
	
		<!-- ::::::::::::::::::::: Header Section:::::::::::::::::::::::::: -->
		<header>
			<!-- start top bar -->
			<div class="header-top-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 hidden-xs">
							<div class="contact">

							<?php if(!empty($header_top_number)): foreach ($header_top_number as $number): ?>
								<p>
									<i class="<?php echo $number['phone_number_icon'];?>"></i>

									<?php if(!empty($number['phone_number_link'])):?>

									<a href="<?php echo $number['phone_number_link'];?>" target="<?php echo $number['phone_number_target']?>">

									<?php endif;?>
										
									<?php echo $number['phone_number'];?>

									<?php if(!empty($number['phone_number_link'])):?>
									
									</a>

									<?php endif;?>
								</p>
							<?php endforeach; endif;?>
							</div><!-- /.contact -->
						</div><!-- /.col-sm-8 -->
						
						<div class="col-sm-4">
							<div class="social-icon">
								<ul>

					<?php if(!empty($header_top_social)): foreach ($header_top_social as $social): ?>

						<li>							
						
							<a href="<?php echo $social['social_link'];?>" target="<?php echo $social['social_link_target'];?>">						

								<i class="<?php echo $social['social_icon'];?>"></i>						
						
							</a>
						
						</li>

					<?php endforeach; endif;?>	

								</ul>
							</div><!-- /.social-icon -->
						</div><!-- /.col-sm-4 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- end top bar -->
			
	        <!-- Start Navigation -->
	        <nav class="navbar navbar-default navbar-sticky bootsnav">
	            <!-- Start Top Search -->
	            <div class="top-search">
	                <div class="container">
	                    <div class="input-group">
	                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
	                        <input type="text" class="form-control" placeholder="Search">
	                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
	                    </div>
	                </div>
	            </div>
	            <!-- End Top Search -->

	            <div class="container">
	                <!-- Start Atribute Navigation -->
	                <div class="attr-nav">
	                    <ul>
	                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
	                        <li class="dropdown">
	                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
	                                <i class="fa fa-shopping-bag"></i>
	                                <span class="badge">2</span>
	                            </a>
	                            <ul class="dropdown-menu cart-list">
	                                <li>
	                                    <a href="#" class="photo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/cart-1.jpg" class="cart-thumb" alt="" /></a>
	                                    <h2><a href="#">Denim SlimFit Shirt </a></h2>
	                                    <p>2x - <span class="price">$19.99</span></p>
	                                </li>
	                                <li>
	                                    <a href="#" class="photo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/cart-3.jpg" class="cart-thumb" alt="" /></a>
	                                    <h2><a href="#">Denim Polo Shirt</a></h2>
	                                    <p>2x - <span class="price">$12.99</span></p>
	                                </li>
	                                <li class="total">
	                                    <span class="pull-right"><strong>Total</strong>: $320.00</span>
	                                    <a href="#" class="btn btn-primary btn-sm btn-cart">Cart</a>
	                                </li>
	                            </ul>
	                        </li>
	                    </ul>
	                </div>
	                <!-- End Atribute Navigation -->

	                <!-- Start Header Navigation -->
	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
	                        <i class="fa fa-bars"></i>
	                    </button>
	                    <a class="navbar-brand" href="index.html"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" class="logo logo-scrolled" alt=""></a>
	                </div>
	                <!-- End Header Navigation -->

	                <!-- Collect the nav links, forms, and other content for toggling -->
	                <div class="collapse navbar-collapse" id="navbar-menu">

					<?php					
						$args = array(
							'theme_location'	=>	'primary',
							'menu_class'		=>	'nav navbar-nav navbar-right',
						);
						wp_nav_menu($args);
					?>
	                   
	                </div><!-- /.navbar-collapse -->
	            </div>
	        </nav>
	        <!-- End Navigation -->
	        <div class="clearfix"></div>
		</header>