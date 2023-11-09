<?php
if ( ! function_exists( 'neuron_theme_one_setup' ) ) {

    function neuron_theme_one_setup() {
		
		load_theme_textdomain( 'neuron_theme', get_template_directory() . '/languages' );

		add_theme_support( 'title-tag' );

		add_filter('widget_text', 'do_shortcode');

        add_theme_support( 'automatic-feed-links' );
		
		add_image_size( 'single-post-thumbnail', 740, 520, true);

        add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

        add_theme_support( 'post-thumbnails' );

        add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

        add_theme_support( 'customize-selective-refresh-widgets' );
        
        add_filter( 'rss_widget_feed_link', '__return_empty_string' );

        $logo_width  = 300;
		$logo_height = 100;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);

// menu Registration
        register_nav_menus(
            array(
                'primary' => esc_html__('primary menu','neuron_theme'),
                'footer' => esc_html__('footer menu','neuron_theme'),
            )
        );


	}
}
add_action( 'after_setup_theme', 'neuron_theme_one_setup' );

// Wordpress css and scripts Registration

function neuron_theme_style(){
    wp_enqueue_style( 'neuron_theme_animate_style', get_template_directory_uri() . '/assets/css/animate.min.css', array(),'1.1');

    wp_enqueue_style( 'neuron_theme__font_awesome_style', get_template_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.min.css', array(), '1.1');

    wp_enqueue_style( 'neuron_theme_carousel_style', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.1');

    wp_enqueue_style( 'neuron_theme_bootsnav_style', get_template_directory_uri() . '/assets/css/bootsnav.css', array(), '1.1');

    wp_enqueue_style( 'neuron_theme_bootstrap_style', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', '1.1');

    wp_enqueue_style( 'neuron_theme_style', get_stylesheet_uri() );




    wp_enqueue_script('neuron_theme_bootstrap_script', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '1.1', true );

    wp_enqueue_script('neuron_theme_bootsnav_script', get_template_directory_uri() . '/assets/js/bootsnav.js', array('jquery'),  '1.1', true );

    wp_enqueue_script('neuron_theme_carousel_script', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'),  '1.1', true );

    wp_enqueue_script('neuron_theme_wow_script', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'),  '1.1', true );

    wp_enqueue_script('neuron_theme_script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'),  '1.1', true );

}
add_action( 'wp_enqueue_scripts','neuron_theme_style');

// Custiom Post Registration
function neuron_theme_custom_post(){
	register_post_type('slide',
		array(
			'labels'=>	array(
				'name'	=>	__('slides'),
				'singular_name'	=>	__('slide')
			),
			'supports'	=>	array('title','editor','custom-fields','thumbnail','page-attributes'),
			'public'	=>	false,
			'show_ui'	=>	true,
			'menu_icon' => 'dashicons-format-image',
			'menu_position' => 4
		),
	);

	register_post_type('promo',
		array(
			'labels'=>	array(
				'name'	=>	__('promos'),
				'singular_name'	=>	__('promo')
			),
			'supports'	=>	array('title','editor','thumbnail','page-attributes'),
			'public'	=>	false,
			'show_ui'	=>	true,
			'menu_position' => 5
		),
	);

	register_post_type('service',
		array(
			'labels'=>	array(
				'name'	=>	__('services'),
				'singular_name'	=>	__('service')
			),
			'supports'	=>	array('title','editor','thumbnail','page-attributes', 'custom-fields'),
			'public'	=>	false,
			'show_ui'	=>	true,
			'menu_position' => 6
		),
	);
	register_post_type('work',
		array(
			'labels'=>	array(
				'name'	=>	__('works'),
				'singular_name'	=>	__('work')
			),
			'supports'	=>	array('title','editor','thumbnail','page-attributes'),
			'public'	=>	true,
			'menu_position' => 7
		),
	);
	
}
add_action( 'init','neuron_theme_custom_post' );

// Widget Register

function neuron_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'footer one', 'neuron' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'neuron' ),
			'before_widget' => '<div id="%1$s" class="footer-widget about-us widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'footer Two', 'neuron' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'neuron' ),
			'before_widget' => '<div id="%1$s" class="footer-widget usefull-link widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'footer Three', 'neuron' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'neuron' ),
			'before_widget' => '<div id="%1$s" class="footer-widget latest-post widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'footer Four', 'neuron' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add widgets here.', 'neuron' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'neuron_widgets_init' );

// Register Shortcode

function neuron_thumpost_list_shortcode($atts){
	extract(
		shortcode_atts(
			array(
				'count' => 3,	
			),
			$atts
		)
	);
	$q = new wp_Query(
		array(
			'posts_per_page' => $count, 'post_type' => 'post'
		)
	);

	$list = '<ul>';
	
	while ($q -> have_posts()) : $q -> the_post();
	$idd = get_the_ID();

	$list .= '<li>
					'.get_the_post_thumbnail($idd, 'thumbnail').'
					<p><a href="'.get_permalink().'">'.get_the_title().'</a></p>					
					<span>'.get_the_date('d F Y', $idd).'</span>	
				</li>';
	endwhile;
	$list .= '</ul>';
	wp_reset_query();
	return $list;
}
add_shortcode('thumb_posts','neuron_thumpost_list_shortcode');

// Install codestar framwork
require get_template_directory() . '/inc/cs-framework/cs-framework.php';


// Excerpt Limitation 
function wp_custom_excerpt_length($length)
{
    global $post;
    if ($post->post_type == 'post')
        return 24;
    else
        return 24;
}
add_filter('excerpt_length', 'wp_custom_excerpt_length');

if ( ! function_exists('neuron_entry_footer')):

function neuron_entry_footer(){
	$separet_meta = __( ', ','neuron');
	$categories_list = get_the_category_list($separet_meta);
	if ( ( neuron_categorized_blog() && $categories_list ) || get_edit_post_link()){
		echo '<footer class="entry-footer">';

		if ('post' === get_post_type()) {
			if (($categories_list && neuron_categorized_blog())){
				echo '<span class="cat-tags-links">';

					if ($categories_list && neuron_categorized_blog()){
					echo '<span class="cat-links">' . $categories_list . '</span>';
					}

				echo '</span> <!-- .entry-footer -->';
			}
		}

		echo '</footer>';
	}
}
endif;



// Comments enqueue script
if ( is_single('1740') ||
( !is_home() || !is_front_page() || !is_single() ) ) {
    wp_enqueue_script( 'comment-reply' );
}



