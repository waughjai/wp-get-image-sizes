<?php

declare( strict_types = 1 );
namespace WaughJ\WPGetImageSizes;

const DEFAULT_SIZES = [ 'thumbnail', 'medium', 'medium_large', 'large' ];

function WPGetImageSizes() : array
{
	global $_wp_additional_image_sizes;
	$image_sizes = [];
	$default_image_sizes = get_intermediate_image_sizes();
    foreach ( $default_image_sizes as $size )
	{
		if ( in_array( $size, DEFAULT_SIZES ) )
		{
			$image_sizes[] = new WPImageSize( ( string )( $size ), intval( get_option( "{$size}_size_w" ) ), intval( get_option( "{$size}_size_h" ) ) );
		}
		else if ( isset( $_wp_additional_image_sizes[ $size ] ) )
		{
			$image_sizes[] = new WPImageSize( ( string )( $size ), $_wp_additional_image_sizes[ $size ][ 'width' ], $_wp_additional_image_sizes[ $size ][ 'height' ] );
		}
    }
    return SortImageSizeList( $image_sizes );
}

function SortImageSizeList( $image_sizes ) : array
{
	usort
	(
		$image_sizes,
		function( WPImageSize $a, WPImageSize $b ) : int
		{
			$aw = $a->getWidth();
			$bw = $b->getWidth();
			if ( $aw === $bw )
			{
				return 0;
			}
			return ( $aw < $bw ) ? -1 : 1;
		}
	);
	return $image_sizes;
}
