<?php

namespace Phunc\Number;

/**
 * Class Value
 * @package Phunc
 */
class Value implements \Phunc\ValueInterface
{

    protected $value;

    /**
     * Value constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

//	public function __construct($value)
//	{
//		if($value instanceof \Phunc\ValueInterface || $value instanceof \Phunc\GetValueInterface){
//			$this->setValue($value->getValue());
//		} else {
//			$this->setValue($value);
//		}
//	}



    /**
	 * @return mixed
	 */
	public function getValue()
	{
		return $this->value;
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