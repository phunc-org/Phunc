<?php

namespace Phunc\Number\Pair;

/**
 * Class Calculate
 *
 * @package Phunc\Holiday\Annual
 */
class Create
{

    public static function Reset()
    {
        $x = new \Phunc\Number(0);
        $y = new \Phunc\Number(0);
        $equal = new \Phunc\Number(0);

        $operation = new \Phunc\Number\Operation($x, $y, $equal);
        $diff = $operation->getX();
        $annual->setDays($diff);

        return $annual;
    }

}