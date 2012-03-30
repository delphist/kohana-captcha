<?php defined('SYSPATH') OR die('No direct access.');
/**
 * Alpha captcha class.
 *
 * @package		Captcha
 * @subpackage	Captcha_Alpha
 * @author		Michael Lavers
 * @author		Kohana Team
 * @copyright	(c) 2008-2010 Kohana Team
 * @license		http://kohanaphp.com/license.html
 */
class Captcha_Number extends Captcha_Alpha
{
	/**
	 * Generates a new Captcha challenge.
	 *
	 * @return string The challenge answer
	 */
	public function generate_challenge()
	{
		$text = '';
		
		for($i = 0; $i < Captcha::$config['complexity']; $i++)
		{
			$text .= mt_rand(0, 9);
		}
		
		// Complexity setting is used as character count
		return $text;
	}
}