<?php

namespace Phunc\Local;

/**
 * Solution for View,
 *
 * @package Phunc\Local
 */
class Number implements \Phunc\ValueInterface
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
		$translated = number_format($this->value->getValue(), 2, $this->country->getDecPoint(), $this->country->getThousandsSep());
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
	 * @param $number
	 * @return $this
	 */
	public function setValue($number)
	{
		$this->value = new \Phunc\Value\Number($number);
		return $this;
	}

	/**
	 * @return \Phunc\Local\Country
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * @param \Phunc\Local\Country $country
	 * @return $this
	 */
	public function setCountry($country)
	{
		$this->country = $country;
		return $this;
	}

	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->getValue();
	}
}