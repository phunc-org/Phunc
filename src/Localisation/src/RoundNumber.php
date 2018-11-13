<?php

namespace Phunc\Local;

/**
 * Class RoundNumber
 * @package Calculation
 */
class RoundNumber extends \Phunc\Value\Number implements \Phunc\CalculationInterface, \Phunc\GetValueInterface
{
	/**
	 * @var float
	 */
	protected $value;

    /**
     * @param string $number
     */
	public function __construct(string $number)
	{
		parent::__construct($number);
		$this->calculate();
	}

    /**
     * @return $this
     */
	public function calculate()
	{
		$number = $this->getValue();

		$abs_value = abs($number);
		if ($abs_value < 1) {
			$number = round($number, 2);
		} elseif ($abs_value < 10) {
			$number = round($number, 0);
		} elseif ($abs_value < 100) {
			$number = round($number / 10, 0) * 10;
		} else {
			$number = round($number / 100, 0) * 100;
		}
		$this->setValue($number);
		return $this;
	}

}