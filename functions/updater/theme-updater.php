<?php
/**
 * Easy Digital Downloads Theme Updater
 *
 * @package EDD Sample Theme
 */

// Includes the files needed for the theme updater
if ( !class_exists( 'EDD_Theme_Updater_Admin' ) ) {
	include( dirname( __FILE__ ) . '/theme-updater-admin.php' );
}

// Loads the updater classes
$updater = new EDD_Theme_Updater_Admin(

	// Config settings
	$config = array(
		'remote_api_url' => 'https://alx.media', // Site where EDD is hosted
		'item_name'      => 'Typesolid', // Name of theme
		'theme_slug'     => 'typesolid', // Theme slug
		'version'        => '1.1.1', // The current version of this theme
		'author'         => 'AlxMedia', // The author of this theme
		'download_id'    => '', // Optional, used for generating a license renewal link
		'renew_url'      => '', // Optional, allows for a custom license renewal link
		'beta'           => false, // Optional, set to true to opt into beta versions
	),

	// Strings
	$strings = array(
		'theme-license'             => __( 'Theme License', 'typesolid' ),
		'enter-key'                 => __( 'Enter your theme license key.', 'typesolid' ),
		'license-key'               => __( 'License Key', 'typesolid' ),
		'license-action'            => __( 'License Action', 'typesolid' ),
		'deactivate-license'        => __( 'Deactivate License', 'typesolid' ),
		'activate-license'          => __( 'Activate License', 'typesolid' ),
		'status-unknown'            => __( 'License status is unknown.', 'typesolid' ),
		'renew'                     => __( 'Renew?', 'typesolid' ),
		'unlimited'                 => __( 'unlimited', 'typesolid' ),
		'license-key-is-active'     => __( 'License key is active.', 'typesolid' ),
		'expires%s'                 => __( 'Expires %s.', 'typesolid' ),
		'expires-never'             => __( 'Lifetime License.', 'typesolid' ),
		'%1$s/%2$-sites'            => __( 'You have %1$s / %2$s sites activated.', 'typesolid' ),
		'license-key-expired-%s'    => __( 'License key expired %s.', 'typesolid' ),
		'license-key-expired'       => __( 'License key has expired.', 'typesolid' ),
		'license-keys-do-not-match' => __( 'License keys do not match.', 'typesolid' ),
		'license-is-inactive'       => __( 'License is inactive.', 'typesolid' ),
		'license-key-is-disabled'   => __( 'License key is disabled.', 'typesolid' ),
		'site-is-inactive'          => __( 'Site is inactive.', 'typesolid' ),
		'license-status-unknown'    => __( 'License status is unknown.', 'typesolid' ),
		'update-notice'             => __( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'typesolid' ),
		'update-available'          => __('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'typesolid' ),
	)

);
