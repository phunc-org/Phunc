<?php

namespace Phunc\Number\Pair\Calculate;


use Phunc\Number;
use Phunc\Number\Value;
use Phunc\ValueInterface;

class Math extends Number implements \Phunc\Number\PairInterface
{
    /** @var \Phunc\Number\Pair */
    protected $pair;

    /** @var \Phunc\Number */
//    protected $um;


    /**
     * Add constructor.
     * @param \Phunc\Number\Pair $pair
     */
    public function __construct(\Phunc\Number\Pair $pair)
    {
        $this->pair = $pair;
    }

    /**
     * @return $this
     */
    public function plus()
    {
        $result_int = $this->getPair()->getX()->getValue() + $this->getPair()->getY()->getValue();
        $result = new \Phunc\Number\Value($result_int);
        $this->getNumber($result);

        return $this;
    }

    /**
     * @return $this
     */
    public function minus()
    {
        $result_int = $this->getPair()->getX()->getValue() + $this->getPair()->getY()->getValue();
        $result = new \Phunc\Number\Value($result_int);
        $this->setNumber($result);

        return $this;
    }


    /**
     * @return \Phunc\Number\Pair
     */
    public function getPair(): \Phunc\Number\Pair
    {
        return $this->pair;
    }

    /**
     * @param \Phunc\Number\Pair $pair
     * @return Math
     */
    public function setPair(\Phunc\Number\Pair $pair): Math
    {
        $this->pair = $pair;
        return $this;
    }

//    /**
//     * @return \Phunc\Number
//     */
//    public function getResult(): \Phunc\Number
//    {
//        return $this->result;
//    }
//
//    /**
//     * @param \Phunc\Number $result
//     * @return Math
//     */
//    public function setResult(\Phunc\Number $result): Math
//    {
//        $this->result = $result;
//        return $this;
//    }

}