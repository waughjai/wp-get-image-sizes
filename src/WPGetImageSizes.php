<?php

declare( strict_types = 1 );
namespace WaughJ\WPGetImageSizes
{
	use WaughJ\WPGetImageSizes\WPImageSize;

	function WPGetImageSizes() : array
	{
		$image_sizes = [];
		$default_image_sizes = get_intermediate_image_sizes();
	    foreach ( $default_image_sizes as $size )
		{
			$image_sizes[] = new WPImageSize( $size, intval( get_option( "{$size}_size_w" ) ), intval( get_option( "{$size}_size_h" ) ) );
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
}
