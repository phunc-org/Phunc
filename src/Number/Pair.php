<?php

namespace Phunc\Number;


class Pair implements \Phunc\Number\Pair\XYInterface
{
    /** @var \Phunc\Number\Value */
    protected $x;

    /** @var \Phunc\Number\Value */
    protected $y;


    /**
     * @param \Phunc\Number\Value $x
     * @param \Phunc\Number\Value $y
     */
    public function __construct(\Phunc\Number\Value $x, \Phunc\Number\Value $y)
    {
        $this->x = $x;
        $this->y = $y;
    }


    /**
     * @return \Phunc\Number\Value
     */
    public function getX(): \Phunc\Number\Value
    {
        return $this->x;
    }

    /**
     * @param \Phunc\Number\Value $x
     * @return Operation
     */
    public function setX(\Phunc\Number\Value $x): Operation
    {
        $this->x = $x;
        return $this;
    }

    /**
     * @return \Phunc\Number\Value
     */
    public function getY(): \Phunc\Number\Value
    {
        return $this->y;
    }

    /**
     * @param \Phunc\Number\Value $y
     * @return Operation
     */
    public function setY(\Phunc\Number\Value $y): Operation
    {
        $this->y = $y;
        return $this;
    }

}