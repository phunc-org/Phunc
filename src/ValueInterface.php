<?php

namespace Phunc;

/**
 * Interface ValueInterface
 * @package Phunc
 */
interface ValueInterface
{
	/**
	 * @return string
	 */
	public function toString();

	/**
	 * @return string
	 */
	public function __toString();

	/**
	 * ValueInterface constructor.
	 * @param $value
	 */
//	public function __construct($value);

	/**
	 * @return mixed
	 */
	public function getValue();

	/**
	 * @param mixed $value
	 * @return Value
	 */
	public function setValue($value);
}