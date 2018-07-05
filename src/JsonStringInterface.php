<?php

namespace Phunc;

/**
 * Interface JsonStringInterface
 * @package Phunc
 */
interface JsonStringInterface
{
	/**
	 * @return string
	 */
	public function toString();

	/**
	 * @return string
	 */
	public function __toString();
}