<?php

namespace Phunc\Local;

/**
 * Class Currency
 * @package Phunc\Local
 */
class Currency extends \Phunc\Value\Text
{
	/**
	 * Currency constructor.
	 * @param string $value
	 */
	public function __construct($value = 'EUR')
	{
		$this->value = $value;
	}
}