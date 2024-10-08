<?php


/**
 * Filters the rendered shortcode block.
 *
 * @param $content
 * @param $parsed_block
 * @param $block
 * @return mixed|string
 */
function oobit_render_block_core_shortcode( $content, $parsed_block, $block ) {
    $content = do_shortcode( $content );
    bw_trace2();
    return $content;
}

//add_filter( 'render_block_core/shortcode', 'oobit_render_block_core_shortcode', 10, 3, );

/**
 * Enables oik based shortcodes.
 */
function oobit_init() {
    if (function_exists('bw_add_shortcode')) {
        //do_action("oik_add_shortcodes");
	    // $theme = bw_get_theme();
	    $theme = wp_get_theme();
		$is_block_theme = $theme->is_block_theme();
		if ( $is_block_theme ) {
			do_action("oik_add_shortcodes");
		}
		bw_trace2( $theme, "theme");
		gob();
    }
}

//add_action( 'init', 'oobit_init', 20 );
//add_filter( 'current_theme_supports-')