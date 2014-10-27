<?php

/**
 * @author Carsten Brandt <mail@cebe.cc>
 * @license https://github.com/cebe/color-nick/LICENSE,md
 */

namespace cebe\colornick;

/**
 * Assigns a unique color to a name which stays stable
 */
class Color
{
	/**
	 * Assigns a unique color to a name which stays stable
	 * @param string $string the string for which the color should be computed
	 * @return string a color string e.g. `#ff5522`
	 */
	public static function calculateColor($string)
	{
		// get color values from sha1 hash
		$hash = sha1($string);
		$red = hexdec($hash[0].$hash[1]);
		$grn = hexdec($hash[2].$hash[3]);
		$blu = hexdec($hash[4].$hash[5]);

		// check the avarage, if it is too high or too low we may have bad contrast
		$avg = ($red + $grn + $blu) / 3;

		// fix contrast by multiplying
		$colors = ['red', 'grn', 'blue'];
		$var = $colors[hexdec($hash[6])%3];
		if ($avg < 100) {
			${$var} = max(${$var} * 1.337, 255);
		} elseif ($avg > 200) {
			$red *= 0.75;
			$grn *= 0.75;
			$blu *= 0.75;
		}

		$rgb = [dechex($red),dechex($grn),dechex($blu)];

	        return (strlen($rgb[0])<2? $rgb[0] . $rgb[0] : $rgb[0])
	        . (strlen($rgb[1])<2? $rgb[1] . $rgb[1] : $rgb[1])
	        . (strlen($rgb[2])<2? $rgb[2] . $rgb[2] : $rgb[2]);
	}
}
