<?php

namespace Phunc;

/**
 * Class Value
 * @package Phunc
 */
abstract class Value implements \Phunc\ValueInterface //, \Phunc\FillFromArrayInterface, \Phunc\ToArrayInterface
{
	//todo activation for intefaces to/from array
	/**
	 * @return mixed
	 */
	public function getValue()
	{
		return $this->value;
	}

	/**
	 * @param array $array
	 * @return $this
	 */
	public function fillFromArray(array $array)
	{
		$this->setValue($array['value']);

		return $this;
	}

	/**
	 * @return array
	 */
	public function toArray()
	{
		$array = [];
		$array['value'] = $this->getValue();
		return $array;
	}

	/**
	 * @param mixed $value
	 * @return $this
	 */
	public function setValue($value)
	{
		$this->value = $value;
		return $this;
	}

	/**
	 * Value constructor.
	 * @param $value
	 */
	public function __construct($value)
	{
		if($value instanceof \Phunc\ValueInterface || $value instanceof \Phunc\GetValueInterface){
			$this->setValue($value->getValue());
		} else {
			$this->setValue($value);
		}
	}

	/**
	 * @return string
	 */
	public function toString()
	{
		return (string) $this->getValue();
	}

	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->toString();
	}
}