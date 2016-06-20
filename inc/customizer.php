<?php
/**
 * This is the customization file.
 *
 * It adds more customization options to customization panel. 
 *
 *
 * @package WordPress
 * @subpackage Nice
 */
?>

<?php

function nice_customize_register($wp_customize)
{
$wp_customize->add_setting( 'header_textcolor' , array(
    'default'     => '#FFFFFF',
    'transport'   => 'refresh',
    'sanitize_callback' => 'sanitize_text_field'
) );


$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_textcolor', array(
	'label'        => __('Header text color','nice'),
	'section'    => 'colors',
	'setting'   =>  'header_textcolor',
) ) );


$wp_customize->add_setting( 'default_feature_image' , array(
    'default'     => '',
    'transport'   => 'refresh',
    'sanitize_callback' => 'esc_url_raw'
) );

$wp_customize->add_section( 'nice_default_feature_image' , array(
    'title'      => 'Default feature image',
    'priority'   => 30,
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'default_feature_image', array(
	'label'        => 'Default image',
	'section'    => 'nice_default_feature_image',
	'setting'   =>  'default_feature_image',
) ) );

}

add_action( 'customize_register', 'nice_customize_register');


?>