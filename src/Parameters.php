<?php

namespace Phunc;

/**
 * Class Parameters
 *
 * @package Phunc
 */
abstract class Parameters
{
    /** @var Unit */
    protected $first = null;

    /** @var Unit */
    protected $second = null;

    /**
     * @param Unit $unit1
     * @param Unit $unit2
     */
    public function __construct(Unit $unit1, Unit $unit2)
    {
        $this->setFirst($unit1);
        $this->setSecond($unit2);
    }

    /**
     * @return Unit
     */
    public function getFirst(): Unit
    {
        return $this->first;
    }

    /**
     * @param Unit $first
     * @return Parameters
     */
    public function setFirst(Unit $first): Parameters
    {
        $this->first = $first;
        return $this;
    }

    /**
     * @return Unit
     */
    public function getSecond(): Unit
    {
        return $this->second;
    }

    /**
     * @param Unit $second
     * @return Parameters
     */
    public function setSecond(Unit $second): Parameters
    {
        $this->second = $second;
        return $this;
    }

}