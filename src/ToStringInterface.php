<?php

namespace Phunc;

/**
 * Interface JsonStringInterface
 * @package Phunc
 */
interface ToStringInterface
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