<?php 
	$client_img = cs_get_option('client_img');
	$client_imgs = explode( ',', $client_img );
?>

<section class="client-logo <?php if(!is_page(array(7))) :?><?php else: ?>darker-bg<?php endif;?>">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="all-client-logo">

						<?php foreach($client_imgs as $logo): $logo_area = wp_get_attachment_image_src($logo, 'medium');?>

							<img src="<?php echo $logo_area[0]?>" alt="" />
							
						<?php endforeach;?>
							
						</div>
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section>