<?php
	const WP_OPTIONS =
	[
		'thumbnail_size_w' => '150',
		'thumbnail_size_h' => '150',
		'medium_size_w' => '300',
		'medium_size_h' => '300',
		'large_size_w' => '600',
		'large_size_h' => '600'
	];

	function get_intermediate_image_sizes()
	{
		return [ 'thumbnail', 'medium', 'large' ];
	}

	function get_option( $option )
	{
		return WP_OPTIONS[ $option ];
	}
