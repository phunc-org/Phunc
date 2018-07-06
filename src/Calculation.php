<?php

namespace Phunc;

/**
 * Class Calculation
 *
 * @package Phunc
 */
abstract class Calculation extends Parameters implements CalculationInterface, ResultInterface
{
    /** @var  */
    protected $result;

    /**
     * @param Unit $unit1
     * @param Unit $unit2
     */
    public function __construct(Unit $unit1, Unit $unit2)
    {
        $this->setFirst($unit1);
        $this->setSecond($unit2);
        $this->calculation();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->getResult();
    }

    /**
     * @return $this
     */
    public function calculation()
    {
        $result = (float)$this->getFirst()->base()->getValue() + (float)$this->getSecond()->base()->getValue();
        $this->setResult($result);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param $result
     * @return $this
     */
    protected function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}