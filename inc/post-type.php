<?php
/**
 * File for registering Tutorials post type.
 *
 * @package    Theme_Junkie_Portfolio_Content
 * @since      0.1.0
 * @author     Theme Junkie
 * @copyright  Copyright (c) 2014, Theme Junkie
 * @link       http://codex.wordpress.org/Function_Reference/register_post_type
 * @license    http://www.gnu.org/licenses/gpl-2.0.html
 */

/* Register custom post type on the 'init' hook. */
add_action( 'init', 'tjpc_register_post_type' );

/**
 * Registers post type needed by the plugin.
 *
 * @since  0.1.0
 * @access public
 */
function tjpc_register_post_type() {

	$labels = array(
	    'name'               => __( 'Projects', 'tjpc' ),
	    'singular_name'      => __( 'Project', 'tjpc' ),
    	'menu_name'          => __( 'Projects', 'tjpc' ),
    	'name_admin_bar'     => __( 'Project', 'tjpc' ),
		'all_items'          => __( 'Projects', 'tjpc' ),
	    'add_new'            => __( 'Add New', 'tjpc' ),
		'add_new_item'       => __( 'Add New Project', 'tjpc' ),
		'edit_item'          => __( 'Edit Project', 'tjpc' ),
		'new_item'           => __( 'New Project', 'tjpc' ),
		'view_item'          => __( 'View Project', 'tjpc' ),
		'search_items'       => __( 'Search Projects', 'tjpc' ),
		'not_found'          => __( 'No Projects found', 'tjpc' ),
		'not_found_in_trash' => __( 'No Projects found in trash', 'tjpc' ),
		'parent_item_colon'  => '',
	);

	$defaults = array(	
		'labels'              => apply_filters( 'tjpc_portfolio_labels', $labels ),
		'public'              => true,
		'exclude_from_search' => false,
		'menu_position'       => 55,
		'menu_icon'           => 'dashicons-schedule',
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'excerpt', 'comments', 'page-attributes' ),
		'rewrite'             => array( 'slug' => 'portfolio', 'with_front' => false ),
		'has_archive'         => true
	);

	$args = apply_filters( 'tjpc_portfolio_args', $defaults );

	register_post_type( 'portfolio', $args );

}