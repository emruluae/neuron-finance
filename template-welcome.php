<?php
/*
Template Name: Welcome Template
*/
get_header();?>
	

		<!-- ::::::::::::::::::::: start slider section:::::::::::::::::::::::::: -->
		<section class="slider-area">
		
			<!-- slide item one -->
			
			<!-- custiom Post query -->
			<?php
				global $post;
				$args = array('posts_per_page' => 3, 'post_type' => 'slide', 'orderby' => 'menu_order', 'order' => 'ASC');
				$myposts = get_posts ($args);
				foreach($myposts as $post): setup_postdata( $post );
			?>
			<?php 
				$btn_text = get_post_meta($post -> ID, 'btn_text', true);
				$btn_link = get_post_meta($post -> ID, 'btn_link', true);
			?>
			<div style="background: url('<?php the_post_thumbnail_url('large')?>') no-repeat;" class="homepage-slider">
				<div class="display-table">
					<div class="display-table-cell">
						<div class="container">
							<div class="row">
								<div class="col-sm-7">
									<div class="slider-content">
										<h1><?php the_title();?></h1>
										<?php the_content(); ?>
										<a href="<?php echo $btn_link?>"><?php echo $btn_text?><i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; wp_reset_query();?>
			<!-- slide item three -->
			
			
		</section><!-- slider area end -->
	
	<?php 
		$promo_section_switcher = cs_get_option('promo_section_switcher');
		$hompage_disc_switcher = cs_get_option('hompage_disc_switcher');
	?>
		<!-- ::::::::::::::::::::: start intro section:::::::::::::::::::::::::: -->
		<?php if($promo_section_switcher == true){get_template_part('content/promo');}?>
		<!-- intro area end -->
	
	
		<!-- ::::::::::::::::::::: start block content area:::::::::::::::::::::::::: -->
		<?php
	$hompage_disc_text = cs_get_option('hompage_disc_text');
	$hompage_disc_content = cs_get_option('hompage_disc_content');
	$hompage_disc_img = cs_get_option('hompage_disc_img');
	$hompage_disc_img_array = wp_get_attachment_image_src(cs_get_option('hompage_disc_img'), 'large');

	if(!empty($hompage_disc_img)){
		$hompage_disc_img = $hompage_disc_img_array[0];
	}else{
		$hompage_disc_img = ''.get_template_directory_uri().'/assets/img/homepageblock.jpg';
	}
?>
		<?php if(!empty($hompage_disc_switcher == true)) :?>
		<section class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="block-text">
							<h2><?php echo $hompage_disc_text;?></h2>
							<?php echo wpautop($hompage_disc_content);?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="block-img">
							<img src="<?php echo $hompage_disc_img;?>" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section><!-- block area end -->
		<?php endif;?>
	
		<!-- ::::::::::::::::::::: start services section:::::::::::::::::::::::::: -->

		<?php get_template_part('content/services')?>
		
		<!-- end services section -->
	

<?php get_footer();?>