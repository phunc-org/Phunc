<?php

namespace Phunc\Value;

/**
 * Class Boolean
 * @package Phunc\Value
 */
class Boolean extends \Phunc\Value
{
	/** @var  boolean */
	protected $value;

	/**
	 * @param boolean|string|integer $value
	 * @return $this
	 */
	public function setValue($value)
	{
		$this->value = $value;
		$this->toBoolean();
		return $this;
	}

	/**
	 * @return $this
	 */
	public function toBoolean()
	{
		if (is_string($this->getValue())) {
			if ($this->getValue() == 'true') {
				$this->setValue(true);
				return $this;
			}
			$this->setValue(false);
		}
		if (is_numeric($this->getValue())) {
			$this->setValue((boolean)$this->getValue());
		}
		return $this;
	}

	/**
	 * @return string
	 */
	public function __toString()
	{
		$string = new \Phunc\Value\Text($this->getValue());
		return $string->getValue();
	}
}