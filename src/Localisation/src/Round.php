<?php

namespace Phunc\Local;

/**
 * Solution for View,
 *
 * @package Phunc\Local
 */
class Round implements \Phunc\GetValueInterface
{
	/** @var \Phunc\Value\Number */
	protected $value;

	/** @var  \Phunc\Local\Country */
	protected $country;

	/**
	 * @param int $number
	 * @param $country
	 */
	public function __construct(\Phunc\Value\Number $value, \Phunc\Local\Country $country)
	{
		$this->value = $value;
		$this->country = $country;

		$this->render();
	}

	/**
	 * @return $this
	 */
	public function render()
	{
		$translated = number_format($this->value->getValue(), 0, $this->country->getDecPoint(), $this->country->getThousandsSep());
		$value = new \Phunc\Value\Number($translated);
		$this->setValue($value);
		return $this;
	}

	/**
	 * @return \Phunc\Value\Number
	 */
	public function getValue()
	{
		return $this->value;
	}

	/**
	 * @param \Phunc\Value\Number $value
	 * @return $this
	 */
	public function setValue(\Phunc\Value\Number $value)
	{
		$this->value = $value;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->getValue();
	}
}