<?php

namespace Phunc\Number;

/**
 * Class Value
 * @package Phunc
 */
abstract class Result // implements \Phunc\ValueInterface
{

    protected $result;

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     * @return Result
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }


	/**
	 * Value constructor.
	 * @param $value
	 */
//	public function __construct($value)
//	{
//		if($value instanceof \Phunc\ValueInterface || $value instanceof \Phunc\GetValueInterface){
//			$this->setValue($value->getValue());
//		} else {
//			$this->setValue($value);
//		}
//	}

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