<?php get_header();?>

<?php while ( have_posts() ) :	the_post();?>

<body><div class="wrapper">	
		<!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
		<section <?php if(has_post_thumbnail()):?> style='background: url("<?php the_post_thumbnail_url('large');?>") no-repeat;'<?php endif;?> class="page-title">
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
        <section class="block section-padding">
            <div class="conainer">
                <div class="row">
                    <div class="col-md-12">
                        <?php the_content();?>
                    </div>
                </div>
            </div>
        </section>
<?php endwhile;?>

<?php get_footer();?>