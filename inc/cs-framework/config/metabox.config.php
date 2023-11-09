<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'neuron_custom_meta_post_options',
  'title'     => 'Neuron Custom Meta Post Options',
  'post_type' => 'work',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'work_meta_section_1',
      'fields' => array(

        array(
          'id'    => 'sub_title',
          'type'  => 'text',
          'title' => 'Sub Title',
          'desc' => 'Type your Post Sub Title',
          'default' => 'Accounts',
        ),
        array(
          'id'    => 'big_pre_img',
          'type'  => 'image',
          'title' => 'Big Preview image',
          'desc' => 'Upload your Big preview Image',
        ),

        // Metabox Group feield
        array(
          'id'        => 'Informations',
          'type'      => 'group',
          'title'     => 'Information',
          'button_title' => 'Add New Information',
          'according-title' => 'Add New Informations',
          'fields'    => array(
            array(
              'id'    => 'info_title',
              'type'  => 'text',
              'title' => 'Information Title',
            ),
            array(
              'id'    => 'info_value',
              'type'  => 'text',
              'title' => 'Information Value',
            ),
          ),
        ),
        array(
          'id'    => 'button_text',
          'type'  => 'text',
          'title' => 'Button text',
          'desc' => 'Add your Button Text',
          'default' => 'Visit Website',
        ),        
        array(
          'id'    => 'button_link',
          'type'  => 'text',
          'title' => 'Button Link',
          'desc' => 'Add your Button Link',
        ),
      ),
    ),

  ),
);

CSFramework_Metabox::instance( $options );
