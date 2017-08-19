<?php

/**
 * Creates a Dashboard Widget. 
 */
function wppp_dashboard_widgets() {
    $widget_id      = 'wppp_widget'; //widget slug
    $widget_name    = 'WPPP Widget'; //widget title
    $callback       = '_add_wppp_dashboard_widget_function'; //widget display function
    wp_add_dashboard_widget( $widget_id, $widget_name, $callback, control_callback, callback_args );
}
add_action( 'wp_dashboard_setup', 'wppp_dashboard_widgets' );

/**
 * Create the function to output the contents of our Dashboard Widget.
 */
function _add_wppp_dashboard_widget_function() {

	// Display whatever it is you want to show.
	echo "Hello World, I'm the First WPPP Widget =)";
}

