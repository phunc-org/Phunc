<?php

namespace Phunc;

/**
 * Class ToConversion
 * @package Phunc
 */
abstract class ToConversion implements ToStringInterface, JsonArrayInterface
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
     * @throws \Exception
     */
	public function toString()
	{
		return (string)new \Phunc\JsonArray($this->toArray());
	}

    /**
     * @return string
     * @throws \Exception
     */
	public function __toString()
	{
		return $this->toString();
	}
}