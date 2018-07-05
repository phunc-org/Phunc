<?php

namespace Phunc\Number\Pair;


interface XYInterface
{

    /**
     * @param \Phunc\Number\Value $x
     * @param \Phunc\Number\Value $y
     */
    public function __construct(\Phunc\Number\Value $x, \Phunc\Number\Value $y);

    /**
     * @return \Phunc\Number\Value
     */
    public function getX();

    /**
     * @param \Phunc\Number\Value $x
     * @return Operation
     */
    public function setX(\Phunc\Number\Value $x);

    /**
     * @return \Phunc\Number\Value
     */
    public function getY();

    /**
     * @param \Phunc\Number\Value $y
     * @return Operation
     */
    public function setY(\Phunc\Number\Value $y);

}