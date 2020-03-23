<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'typesolid', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'typesolid' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'typesolid' ),
	'button_url'  => 'http://alx.media/themes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'typesolid' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'typesolid' ),
	'button_url'  => 'https://wordpress.org/support/theme/typesolid/reviews/?filter=5#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'typesolid' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'typesolid' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'typesolid' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'typesolid' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'typesolid' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'typesolid' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'typesolid' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'typesolid' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'typesolid' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Mobile Sidebar
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'typesolid' ),
	'description'	=> esc_html__( 'Sidebar content on low-resolution mobile devices (320px)', 'typesolid' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Recommended Plugins
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'typesolid' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'typesolid' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Enable Blog Heading
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'heading-enable',
	'label'			=> esc_html__( 'Enable Blog Heading', 'typesolid' ),
	'description'	=> esc_html__( 'Show heading on blog home', 'typesolid' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Heading
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'typesolid' ),
	'description'	=> esc_html__( 'Your blog heading', 'typesolid' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'typesolid' ),
	'description'	=> esc_html__( 'Your blog subheading', 'typesolid' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'typesolid' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'typesolid' ),
	'section'		=> 'blog',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Frontpage Widgets Top
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-top',
	'label'			=> esc_html__( 'Frontpage Widgets Top', 'typesolid' ),
	'description'	=> esc_html__( '2 columns of widgets', 'typesolid' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Bottom
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-bottom',
	'label'			=> esc_html__( 'Frontpage Widgets Bottom', 'typesolid' ),
	'description'	=> esc_html__( '2 columns of widgets', 'typesolid' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Comment Count
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Comment Count', 'typesolid' ),
	'description'	=> esc_html__( 'Comment count with bubbles', 'typesolid' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'typesolid' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'typesolid' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'typesolid' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'typesolid' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'typesolid' ),
		'categories'=> esc_html__( 'Related by categories', 'typesolid' ),
		'tags'		=> esc_html__( 'Related by tags', 'typesolid' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'typesolid' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'typesolid' ),
	'section'		=> 'blog',
	'default'		=> 'content',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'typesolid' ),
		'content'	=> esc_html__( 'Below content', 'typesolid' ),
	),
) );
// Header: Search
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'typesolid' ),
	'description'	=> esc_html__( 'Header search button', 'typesolid' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'typesolid' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'typesolid' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links Profile
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'profile-social',
	'label'			=> esc_html__( 'Profile Social Links', 'typesolid' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'typesolid' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Profile Avatar
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'image',
	'settings'		=> 'profile-image',
	'label'			=> esc_html__( 'Profile Image', 'typesolid' ),
	'description'	=> esc_html__( 'Minimum size of 150x150px', 'typesolid' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Name
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'text',
	'settings'		=> 'profile-name',
	'label'			=> esc_html__( 'Profile Name', 'typesolid' ),
	'description'	=> esc_html__( 'Your name appears below the image', 'typesolid' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Description
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'textarea',
	'settings'		=> 'profile-description',
	'label'			=> esc_html__( 'Profile Description', 'typesolid' ),
	'description'	=> esc_html__( 'A short description of you', 'typesolid' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Footer: Ads
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'typesolid' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'typesolid' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'typesolid' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'typesolid' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'typesolid' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'typesolid' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'typesolid' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'typesolid' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'typesolid' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'typesolid' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'typesolid' ),
	'description'	=> esc_html__( 'Footer credit text', 'typesolid' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'typesolid' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'typesolid' ),
	'section'		=> 'layout',
	'default'		=> 'col-1c',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'typesolid' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'typesolid' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'typesolid' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'typesolid' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'typesolid' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'typesolid' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'typesolid' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'typesolid' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'typesolid' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'typesolid' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'typesolid' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'typesolid' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'typesolid' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'typesolid' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );


function typesolid_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'typesolid_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'typesolid' ),
		'description'	=> esc_html__( '(is_home) Primary', 'typesolid' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'typesolid' ),
	) );
	Kirki::add_field( 'typesolid_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'typesolid' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'typesolid' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'typesolid' ),
	) );
	Kirki::add_field( 'typesolid_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'typesolid' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'typesolid' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'typesolid' ),
	) );
	Kirki::add_field( 'typesolid_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'typesolid' ),
		'description'	=> esc_html__( '(is_category) Primary', 'typesolid' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'typesolid' ),
	) );
	Kirki::add_field( 'typesolid_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'typesolid' ),
		'description'	=> esc_html__( '(is_search) Primary', 'typesolid' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'typesolid' ),
	) );
	Kirki::add_field( 'typesolid_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'typesolid' ),
		'description'	=> esc_html__( '(is_404) Primary', 'typesolid' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'typesolid' ),
	) );
	Kirki::add_field( 'typesolid_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'typesolid' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'typesolid' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'typesolid' ),
	) );
	
 } 
add_action( 'init', 'typesolid_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'typesolid' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'typesolid' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'typesolid' ) . ' <a href="https://fontawesome.com/icons?d=gallery&s=brands&m=free" target="_blank"><strong>' . esc_html__( 'View All', 'typesolid' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'typesolid' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'typesolid' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'typesolid' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'typesolid' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'typesolid' ) . ' <a href="https://fontawesome.com/icons?d=gallery&s=brands&m=free" target="_blank"><strong>' . esc_html__( 'View All', 'typesolid' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'typesolid' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'typesolid' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'typesolid' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'typesolid' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'typesolid' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'typesolid' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'typesolid' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Dark
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dark',
	'label'			=> esc_html__( 'Dark Theme', 'typesolid' ),
	'description'	=> esc_html__( 'Use dark instead of light base', 'typesolid' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Font
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'typesolid' ),
	'description'	=> esc_html__( 'Select font for the theme', 'typesolid' ),
	'section'		=> 'styling',
	'default'		=> 'roboto',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'typesolid' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'typesolid' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'typesolid' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'typesolid' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'typesolid' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'typesolid' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'typesolid' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'typesolid' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'typesolid' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'typesolid' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'typesolid' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'typesolid' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'typesolid' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'typesolid' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'typesolid' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'typesolid' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'typesolid' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'typesolid' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'typesolid' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'typesolid' ),
		'arial'					=> esc_html__( 'Arial', 'typesolid' ),
		'georgia'				=> esc_html__( 'Georgia', 'typesolid' ),
		'verdana'				=> esc_html__( 'Verdana', 'typesolid' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'typesolid' ),
	),
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'typesolid' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'typesolid' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Background Color
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-background',
	'label'			=> esc_html__( 'Background Color', 'typesolid' ),
	'description'	=> esc_html__( 'Use with dark theme enabled only', 'typesolid' ),
	'section'		=> 'styling',
	'default'		=> '',
) );
// Styling: Sticky Bar Color
Kirki::add_field( 'typesolid_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-sticky-bar',
	'label'			=> esc_html__( 'Sticky Bar Color', 'typesolid' ),
	'description'	=> esc_html__( 'The bar that shows up on single posts', 'typesolid' ),
	'section'		=> 'styling',
	'default'		=> '',
) );