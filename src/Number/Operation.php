<?php

namespace Phunc\Number;


class Operation
{
    /** @var \Phunc\Number */
    protected $x;

    /** @var \Phunc\Number */
    protected $y;

    /** @var \Phunc\Number */
    protected $equal;

    /** @var string */
    protected $calculate;

    /**
     * Operation constructor.
     * @param \Phunc\Number $x
     * @param \Phunc\Number $y
     * @param \Phunc\Number $equal
     */
    public function __construct(\Phunc\Number $x, \Phunc\Number $y, \Phunc\Number $equal)
    {
        $this->x = $x;
        $this->y = $y;
        $this->equal = $equal;
        $this->calculate = 'reset';
    }


    /**
     * @return \Phunc\Number
     */
    public function getX(): \Phunc\Number
    {
        return $this->x;
    }

    /**
     * @param \Phunc\Number $x
     * @return Operation
     */
    public function setX(\Phunc\Number $x): Operation
    {
        $this->x = $x;
        return $this;
    }

    /**
     * @return \Phunc\Number
     */
    public function getY(): \Phunc\Number
    {
        return $this->y;
    }

    /**
     * @param \Phunc\Number $y
     * @return Operation
     */
    public function setY(\Phunc\Number $y): Operation
    {
        $this->y = $y;
        return $this;
    }

    /**
     * @return \Phunc\Number
     */
    public function getEqual(): \Phunc\Number
    {
        return $this->equal;
    }

    /**
     * @param \Phunc\Number $equal
     * @return Operation
     */
    public function setEqual(\Phunc\Number $equal): Operation
    {
        $this->equal = $equal;
        return $this;
    }


}