<?php get_header();?>

<?php 
    while ( have_posts() ) :	the_post();    

    if(get_post_meta(get_the_ID(), 'neuron_custom_meta_post_options', true)){
        $work_meta =get_post_meta(get_the_ID(), 'neuron_custom_meta_post_options', true);
    }else{
        $work_meta = array();
    }

    if (array_key_exists('sub_title', $work_meta)){
        $sub_title = $work_meta['sub_title'];
    }else{
        $sub_title = '';
    }
    if (array_key_exists('big_pre_img', $work_meta)){
        $big_pre_img = $work_meta['big_pre_img'];
    }else{
        $big_pre_img = '';
    }
    if (array_key_exists('button_text', $work_meta)){
        $button_text = $work_meta['button_text'];
    }else{
        $button_text = 'Visit Website';
    }
    if (array_key_exists('button_link', $work_meta)){
        $button_link = $work_meta['button_link'];
    }else{
        $button_link = '';
    }
    if (array_key_exists('Informations', $work_meta)){
        $Informations = $work_meta['Informations'];
    }else{
        $Informations = '';
    }
?>

<body>
	<div class="wrapper">	
		<!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
		<section <?php if(has_post_thumbnail()):?> style='background: url("<?php the_post_thumbnail_url('large'); ?>") no-repeat;'<?php endif;?> class="page-title">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- breadcrumb content -->
						<div class="page-breadcrumbd">
							<h2><?php the_title();?></h2>
							<p><a href="<?php echo site_url();?>">Home</a> / <a href="">Pages</a> / <?php the_title();?></p>
						</div><!-- end breadcrumb content -->
					</div>
				</div>
			</div>
		</section><!-- end breadcrumb -->
		
        <section class="single-portfolio-wrapper section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<!-- single portfolio images -->
					<div class="single-portfolio-images">
                        <?php                        
                            $big_privew_protfolio_images = wp_get_attachment_image_src($big_pre_img, 'large');
                        ?>
                        <?php if(!empty($big_privew_protfolio_images)):?>
						<img class="img-responsive" src="<?php echo $big_privew_protfolio_images[0];?>" alt="">
                        <?php else :?>
                            <?php the_post_thumbnail('large')?>
                        <?php endif;?>
					</div>
				</div>
				<div class="col-md-4">
					<!-- single portfolio info -->
					<div class="single-portfolio-inner">
						<header class="single-portfolio-title">
							<?php echo $sub_title;?>
							<h2><?php the_title();?></h2>
						</header>
						<div class="portfolio-details-panel">
							<?php the_content();?>
							
							<ul class="portfolio-meta">
                                
                                <?php 
                                if(!empty($Informations)) : foreach($Informations as $Information):?>
								<li><span> <?php echo $Information['info_title'];?> </span> <?php echo $Information['info_value'];?></li>
                                <?php endforeach; endif;?>
								
                                <li><span> Share </span> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
                        <?php if(!empty($button_link)) :?>
						<a class="btn btn-primary" href="<?php echo $button_link;?>"> <?php echo $button_text;?></a>
                        <?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php endwhile;?>

<?php get_footer();?>