<?php

namespace Phunc\Number\Pair\Calculate;


class Minus extends \Phunc\Number implements \Phunc\CalculateInterface
{
    /** @var \Phunc\Number\Pair */
    protected $pair;


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
        $result_int = $this->getPair()->getX()->getValue() - $this->getPair()->getY()->getValue();
//        var_dump($this->getPair());
        $result = new \Phunc\Number\Value($result_int);
        $this->setNumber($result);

        return $this;
    }

}