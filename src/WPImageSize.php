<?php

declare( strict_types = 1 );
namespace WaughJ\WPGetImageSizes;

class WPImageSize
{
	public function __construct( string $slug, int $width, int $height )
	{
		$this->slug = $slug;
		$this->width = $width;
		$this->height = $height;
	}

	public function getSlug() : string
	{
		return $this->slug;
	}

	public function getWidth() : int
	{
		return $this->width;
	}

	public function getHeight() : int
	{
		return $this->height;
	}

	private $slug;
	private $width;
	private $height;
}
