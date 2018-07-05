<?php

namespace Phunc;

/**
 * Interface ValueInterface
 * @package Phunc
 */
interface TextInterface
{
	/**
	 * @return mixed
	 */
	public function getText();

	/**
	 * @param mixed $value
	 * @return Value
	 */
	public function setText($text);
}