<?php

namespace Phunc;

/**
 * Interface ValueInterface
 * @package Phunc
 */
interface NumberInterface
{
	/**
	 * @return string
	 */
//	public function toString();

	/**
	 * @return string
	 */
//	public function __toString();

	/**
	 * ValueInterface constructor.
	 * @param $value
	 */
//	public function __construct($value);

	/**
	 * @return mixed
	 */
	public function getNumber();

	/**
	 * @param mixed $value
	 * @return Value
	 */
	public function setNumber($number);
}