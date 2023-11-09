<?php 

/*
Template Name: About Template
*/
get_header();?>

<?php while ( have_posts() ) :	the_post();

 
$about_us_switcher = cs_get_option('about_us_switcher');
$abut_us_text = cs_get_option('abut_us_text');
$abut_us_content = cs_get_option('abut_us_content');



?>

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
        <section class="block about-us-block section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php the_content();?>
                    </div>
                </div>
            </div>
        </section>

		<!-- ::::::::::::::::::::: start intro section:::::::::::::::::::::::::: -->
		<?php get_template_part('content/promo')?>
		<!-- intro area end -->

		
		<?php if(!empty($about_us_switcher == true)) :?>
		<section class="accordian-section section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="accorian-item">

							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								
							<?php
							$faq_no = 0;
							$faqs = cs_get_option('faqs');
							
							foreach($faqs as $faq):
							
								$faq_no++;
								
							if($faq_no == 1){
								$aria_expanded = 'true';
								$in_class	=	'in';
							}else{
								$aria_expanded = 'false';
								$in_class	=	'';
							}

							?>
							<!-- accordian item-<?php echo $faq_no;?> -->
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading-<?php echo $faq_no;?>">
										<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $faq_no;?>" aria-expanded="<?php echo $aria_expanded;?>" aria-controls="collapse-<?php echo $faq_no;?>">
										
										<?php echo $faq['faqs_title']; ?>
										
									</a>
									
										</h4>
									</div>
									<div id="collapse-<?php echo $faq_no;?>" class="panel-collapse collapse <?php echo $in_class;?>" role="tabpanel" aria-labelledby="heading-<?php echo $faq_no;?>">
										<div class="panel-body">
											<?php echo wpautop($faq['faqs_text']);?>
										</div>
									</div>
								</div>
						<?php endforeach;?>	

								
							
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<!-- accordian right text block -->
						<div class="accordian-right-content">
							<h2><?php echo $abut_us_text;?></h2>
							<?php echo wpautop($abut_us_content);?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php endif;?>
<?php endwhile;?>

<?php get_footer();?>