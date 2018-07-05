<?php

namespace Phunc;


abstract class Number
{
    /** @var float */
    protected $number;

    /**
     * @return float
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param float $number
     * @return Number
     */
    public function setNumber($number): Number
    {
        $this->number = $number;

        return $this;
    }



//    /**
//     * Number constructor.
//     * @param $value
//     */
//    public function __construct($value)
//    {
//        $this->value = $value;
//    }

}