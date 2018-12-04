<?php

require_once( 'MockWordPress.php' );

use PHPUnit\Framework\TestCase;
use function WaughJ\WPGetImageSizes\WPGetImageSizes;
use WaughJ\WPGetImageSizes\WPImageSize;

class WPGetImageSizesTest extends TestCase
{
	public function testImageSize()
	{
		$image_size = new WPImageSize( 'demo', 128, 155 );
		$this->assertEquals( 'demo', $image_size->getSlug() );
		$this->assertEquals( 128, $image_size->getWidth() );
		$this->assertEquals( 155, $image_size->getHeight() );
	}

	public function testImageSizeList()
	{
		$image_sizes = WPGetImageSizes();
		$this->assertEquals( $image_sizes[ 0 ], new WPImageSize( 'thumbnail', 150, 150 ) );
		$this->assertEquals( $image_sizes[ 1 ], new WPImageSize( 'medium',300, 300 ) );

	}
}
