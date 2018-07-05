<?php


namespace Phunc\Value;


class Number extends \Phunc\Value
{
	/** @var  float */
	protected $value;

	/**
	 * @param string $boolean
	 *
	 * @return int
	 */
	public function fromBooleanString($boolean)
	{
		if ($boolean == 'true' || $boolean == 'wahr') {
			return 1;
		}
		return 0;
	}

	/**
	 * @param boolean $boolean
	 * @return int
	 */
	public function fromBoolean($boolean)
	{
		return (int)$boolean;
	}
}