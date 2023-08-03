<?php
/**
 * Plugin Name:       Query Loop Shortcode
 * Description:       Display a shortcode within a query loop based on the loop ID, not the parent post/page ID.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       query-loop-shortcode
 *
 * @package           create-block
 */
namespace QueryLoopShortcode;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! defined( 'QLSC_ROOT_FILE' ) ) {
	define( 'QLSC_ROOT_FILE', __FILE__ );
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_query_loop_shortcode_block_init() {
	register_block_type( __DIR__ . '/build' , [ 'render_callback' => __NAMESPACE__ . '\\query_loop_shortcode_render_block' ]);
}
add_action( 'init', __NAMESPACE__ . '\\create_block_query_loop_shortcode_block_init' );


/**
 * Renders the `qlsc/query-loop-shortcode` block on the server.
 *
 * @param  array    $attributes Block attributes.
 * @param  string   $content    Block default content.
 * @param  WP_Block $block      Block instance.
 * @return string Returns the filtered post meta field for the current post.
 */
function query_loop_shortcode_render_block( $attributes, $content, $block ) {
	if ( isset( $block->context['postId'] ) ) {
		// Get post_id from the context first.
		$post_id = $block->context['postId'];
	} else {
		// Fallback to the current post id.
		$post_id = get_queried_object_id();
	}

	$shortcode = $content ?? '';

	if ( empty( $shortcode ) ) {
		return '';
	}

	global $wp_query;
	$restore = $wp_query;
	$wp_query = null;
	$args = array(
		'p'         => $post_id, // ID of a page, post, or custom type
		'post_type' => 'any'
	);
	$wp_query = new \WP_Query($args);

	$content = do_shortcode($shortcode);

	$wp_query = $restore;

	// Get the block markup.
	return $content;
	//return query_loop_shortcode_get_block_markup( $content, $attributes, $block, $post_id, $classes );

}
