<?php

namespace Phunc;

/**
 * Class JsonConevrsion
 * @package Phunc\Entity
 */
abstract class JsonConversion implements JsonStringInterface, JsonArrayInterface
{
	/**
	 * @return array
	 */
	public function toArray()
	{
		$obj = new Attribute($this);
		return $obj->toArray();
	}

	/**
	 * @return string
	 */
	public function toString()
	{
		return (string)new \Phunc\JsonArray($this->toArray());
	}

	/**
	 * @return null|string
	 */
	public function __toString()
	{
		return $this->toString();
	}
}