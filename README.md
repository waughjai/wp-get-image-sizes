WP Get Image Sizes
=========================

Simple function for getting media image sizes for WordPress.

## Use

	use function WaughJ\WPGetImageSizes\WPGetImageSizes;

	$image_sizes = WPGetImageSizes();
	foreach ( $image_sizes as $size )
	{
		echo "{$size->getSlug()} : {$size->getWidth()} : {$size->getHeight()}\n";
	}

On default WordPress installations, will print:

	thumbnail : 150 : 150
	medium : 300 : 300
	medium_large : 768 : 768
	large : 1024 : 1024
