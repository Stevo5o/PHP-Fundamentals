<?php

/* 
 * This is a HTML Utility/helper class
 */

class HTML {
	public static $base_url = 'http://localhost:8090/';

	public static function link($href, $text) 
	{
	   return "<a href='" . self::$base_url . $href . "'>$text</a>";
	}

	public static function ul($items)
	{
		return "<ul><li>" . implode('</li><li>', $items) . '</li><ul>';
	}

	public static function image($src, $alt = '')
	{
		return "<img src='$src' alt'$alt'>";
	}
}