<?php

namespace Phunc\Number\Pair;

/**
 * Class Calculate
 *
 * @package Phunc\Holiday\Annual
 */
class Comparasion
{

    /**
     * X > Y
     *
     * @param \Phunc\Number\Operation $operation
     */
    public static function Bigger(\Phunc\Number\Operation $operation)
    {
        $diff = $operation->getX();

    }

    /**
     * X < Y
     * @param \Phunc\Number\Operation $operation
     */
    public static function Smaller(\Phunc\Number\Operation $operation)
    {
        $diff = $operation->getX();

    }


}