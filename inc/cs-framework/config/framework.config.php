<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme Option',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Neuron Theme Option <small>by Neuron Finance</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'Promo_section',
  'title'       => 'Promo',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

    array(
      'id'    => 'promo_section_switcher',
      'type'  => 'switcher',
      'title' => 'Hide the promo section',
      'desc'    =>  'if you want to Hide this section on me',
      'label'   => 'Do you want activate it ?',
      'default' => true
    ),
    // begin: a field
    array(
      'id'      => 'promo_title',
      'type'    => 'text',
      'title'   => 'Title',
      'desc'    =>  'Type Your title',
      'default' =>  'Welcome to the Neuron Finance',
      'dependency' => array( 'promo_section_switcher', '==', 'true' )
    ),
    array(
      'id'      => 'promo_content',
      'type'    => 'textarea',
      'title'   => 'Content',
      'desc'    =>  'Type Your content',
      'default' =>  'Interactively simplify 24/7 markets through 24/7 best practices. Authoritatively foster cutting-edge manufactured products and distinctive.',
      'dependency' => array( 'promo_section_switcher', '==', 'true' )
    ),
  ), // end: fields
);
$options[]      = array(
  'name'        => 'homepage_disc_section',
  'title'       => 'Home Page Discription',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

    array(
      'id'    => 'hompage_disc_switcher',
      'type'  => 'switcher',
      'title' => 'Hide the hompage disc section',
      'desc'    =>  'if you want to Hide this section on me',
      'label'   => 'Do you want activate it ?',
      'default' => true
    ),
    // begin: a field
    array(
      'id'      => 'hompage_disc_text',
      'type'    => 'text',
      'title'   => 'Title',
      'desc'   => 'Type your Title',
      'dependency' => array( 'hompage_disc_switcher', '==', 'true' )
    ),
    array(
      'id'      => 'hompage_disc_content',
      'type'    => 'textarea',
      'title'   => 'Content',
      'desc'   => 'Type your Content',
      'dependency' => array( 'hompage_disc_switcher', '==', 'true' )
    ),
    array(
      'id'      => 'hompage_disc_img',
      'type'    => 'image',
      'title'   => 'Image',
      'desc'   => 'Upload your Image',
      'dependency' => array( 'hompage_disc_switcher', '==', 'true' )
    ),
  ), // end: fields
);


$options[]      = array(
  'name'        => 'about_us',
  'title'       => 'About Page Discription',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

    array(
      'id'    => 'about_us_switcher',
      'type'  => 'switcher',
      'title' => 'Hide the About Page Discription section',
      'desc'    =>  'if you want to Hide this section on me',
      'label'   => 'Do you want activate it ?',
      'default' => true
    ),
    array(
      'id'        => 'faqs',
      'type'      => 'group',
      'title'     => 'FAQS',
      'button_title' => 'Add New',
      'accordion_title' => 'Add New FAQS',
      'fields'    => array(
          array(
            'id'    => 'faqs_title',
            'type'  => 'text',
            'title' => 'FAQS Title',
          ),
          array(
            'id'    => 'faqs_text',
            'type'  => 'textarea',
            'title' => 'FAQS Text',
          ),
      ),
      
      'dependency' => array( 'about_us_switcher', '==', 'true' )
    ),
    // begin: a field
    array(
      'id'      => 'abut_us_text',
      'type'    => 'text',
      'title'   => 'Title',
      'desc'   => 'Type your Title',
      'dependency' => array( 'about_us_switcher', '==', 'true' )
    ),
    array(
      'id'      => 'abut_us_content',
      'type'    => 'textarea',
      'title'   => 'Content',
      'desc'   => 'Type your Content',
      'dependency' => array( 'about_us_switcher', '==', 'true' )
    ),
  ), // end: fields
);

$options[]      = array(
  'name'        => 'client_option',
  'title'       => 'Client Section Area',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

       // begin: a field
    array(
      'id'      => 'client_img',
      'type'    => 'gallery',
      'title'   => 'Title',
      'add_title'   => 'Add Images',
      'edit_title'  => 'Edit Images',
      'clear_title' => 'Remove Images',
    ),
  ), // end: fields
);

$options[]      = array(
  'name'        => 'header_top_area_number',
  'title'       => 'Header Top Section number',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

       // begin: a field
    array(
    'id'        => 'header_top_number',
    'type'      => 'group',
    'title'     => 'Header Top Section number',
    'button_title' => 'Add New',
    'accordion_title' => 'Add New number',
    'fields'    => array(
        array(
          'id'      => 'phone_number',
          'type'    => 'text',
          'title'   => 'Number',
        ),
        array(
          'id'      => 'phone_number_icon',
          'type'    => 'icon',
          'title'   => 'Icon',
          'default' => 'fa fa-heart'
        ),
        
        array(
          'id'      => 'phone_number_link',
          'type'    => 'text',
          'title'   => 'Link',
        ),
        array(
          'id'      => 'phone_number_target',
          'type'         => 'select',
          'title'        => 'Link target',
          'options'    => array(        
              '_self'   => 'Open in same tab',
              '_blank' => 'open in new tab',
              ),
        ),
      ),
    ),  
  ), // end: fields
);

$options[]      = array(
  'name'        => 'header_top_area_social',
  'title'       => 'Header Top Social Section',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

       // begin: a field
    array(
    'id'        => 'header_top_social',
    'type'      => 'group',
    'title'     => 'Header Top social Media',
    'button_title' => 'Add New',
    'accordion_title' => 'Add New Social Media',
    'fields'    => array(
        array(
          'id'      => 'social_icon',
          'type'    => 'icon',
          'title'   => 'Icon',
        ),        
        array(
          'id'      => 'social_link',
          'type'    => 'text',
          'title'   => 'Link',
        ),
        array(
          'id'      => 'social_link_target',
          'type'         => 'select',
          'title'        => 'Link target',
          'default'   =>  '_blank',
          'options'    => array(        
              '_self'   => 'Open in same tab',
              '_blank' => 'open in new tab',
              ),
        ),
      ),
    ),  
  ), // end: fields
);

CSFramework::instance( $settings, $options );
