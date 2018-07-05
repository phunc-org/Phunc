<?php
/**
 * Created by PhpStorm.
 * User: tomaszsapletta
 * Date: 28.06.2018
 * Time: 15:31
 */

namespace Phunc\Calc;


class Round extends \Phunc\Operation implements \Phunc\OperationInterface, Number, Text
{

    public function calc()
    {
        $this->number();
        $this->text();
    }

    public function number()
    {
        $p = $this->createNumber();
        $result = 0;
        $first = true;
        foreach ($p as $value) {
            if ($first) {
                $result = round($value, 0, PHP_ROUND_HALF_UP);;
            } else {
//                $result -= $value;
            }
            $first = false;
        }
        $this->setResult($result);
    }

    public function text()
    {
        $p = $this->createText();
        $result = ' ~';
        foreach ($p as $value) {
            $result .= $value . ' ';
        }
        $result = mb_substr($result, 0, -1);
        $this->setText($result);
    }
}