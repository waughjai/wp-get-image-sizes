<?php
	const WP_OPTIONS =
	[
		'thumbnail_size_w' => '150',
		'thumbnail_size_h' => '150',
		'medium_size_w' => '300',
		'medium_size_h' => '300',
		'medium_large_size_w' => '768',
		'medium_large_size_h' => '768',
		'large_size_w' => '1024',
		'large_size_h' => '1024'
	];

	function get_intermediate_image_sizes()
	{
		return [ 'thumbnail', 'medium', 'medium_large', 'large' ];
	}

	function get_option( $option )
	{
		return WP_OPTIONS[ $option ];
	}
