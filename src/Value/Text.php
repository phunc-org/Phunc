<?php


namespace Phunc\Value;

/**
 * Class Text
 *
 * @package Phunc\Value
 */
class Text extends \Phunc\Value
{
	/** @var  string */
	protected $value;

	/**
	 * @param \Phunc\Value\Boolean | \Phunc\Value\Boolean | boolean | $value
	 */
	public function __construct($value)
	{
		if ($value instanceof \Phunc\Value\Boolean) {
			$this->fromBoolean($value->getValue());
		} else {
			parent::__construct($value);
		}
	}

	/**
	 * @param boolean $boolean
	 *
	 * @return string
	 */
	public function fromBoolean($boolean)
	{
		if ((boolean)$boolean) {
			return $this->setValue('true');
		}
		return $this->setValue('false');
	}
}