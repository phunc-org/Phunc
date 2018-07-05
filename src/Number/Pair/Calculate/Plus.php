<?php

namespace Phunc\Number\Pair\Calculate;


class Plus extends \Phunc\Number implements \Phunc\CalculateInterface
{
    /** @var \Phunc\Number\Pair */
    protected $pair;

    /** @var \Phunc\Number */
    protected $number;


    /**
     * Add constructor.
     * @param \Phunc\Number\Pair $pair
     */
    public function __construct(\Phunc\Number\Pair $pair)
    {
        $this->pair = $pair;
        $this->calculate();
    }


    public function calculate()
    {
        $result_int = $this->pair->getX()->getValue() + $this->pair->getY()->getValue();
//        $this->result = $result;
        $result = new \Phunc\Number\Value($result_int);
        $this->setNumber($result);

        return $this;
    }

}