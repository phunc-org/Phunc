<?php

namespace Phunc;

/**
 * Class Local
 * @package Phunc
 */
abstract class Local
{
	/** @var  \Phunc\Local\Number */
	protected $number;

	/** @var  \Phunc\Local\Round */
	protected $round;

	/** @var  \Phunc\Local\Label */
	protected $label;

	/** @var  \Phunc\Local\Currency */
	protected $currency;

	/**
	 * @param \Phunc\Local\Number $number
	 * @param \Phunc\Local\Round $round
	 * @param \Phunc\Local\Label $label
	 * @param \Phunc\Local\Currency $currency
	 */
	public function __construct(\Phunc\Local\Number $number,
	                            \Phunc\Local\Round $round,
	                            \Phunc\Local\Label $label,
	                            \Phunc\Local\Currency $currency)
	{
		$this->number = $number;
		$this->round = $round;
		$this->label = $label;
		$this->currency = $currency;
	}

	/**
	 * @param $number
	 * @return int
	 */
	public function numberToCalc($number)
	{
		$round = new \Phunc\Local\RoundNumber($number);
		$number = $round->getValue();
		$value = (int)number_format($number, 0, '.', '');
		return $value;
	}

	/**
	 * @param string $number
	 * @return string
	 */
	public function number($number)
	{
		$value = new \Phunc\Value\Number($number);
		return $this->number->setValue($value)->render()->getValue();
	}

	/**
	 * @param string $number
	 * @return string
	 */
	public function round($number)
	{
		$value = new \Phunc\Local\RoundNumber($number);
		return $this->round->setValue($value)->render()->getValue();
	}

	/**
	 * @param $number
	 * @return \Phunc\Value\Number
	 */
	public function withoutRoundAndComma($number)
	{
		$value = new \Phunc\Value\Number($number);
		return $this->round->setValue($value)->render()->getValue();
	}

	/**
	 * @param string $value
	 * @return string
	 */
	public function boolean($value)
	{
		return $this->label->getBooleanBy($value);
	}

	/**
	 * @return string
	 */
	public function currency()
	{
		return $this->currency->getValue();
	}

	/**
	 * @return Local\Number
	 */
	public function getNumber()
	{
		return $this->number;
	}

	/**
	 * @return Local\Round
	 */
	public function getRound()
	{
		return $this->round;
	}

	/**
	 * @return Local\Label
	 */
	public function getLabel()
	{
		return $this->label;
	}

	/**
	 * @return Local\Currency
	 */
	public function getCurrency()
	{
		return $this->currency;
	}

}