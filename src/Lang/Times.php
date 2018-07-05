<?php

namespace Phunc\Calc;


class Times extends \Phunc\Operation implements \Phunc\OperationInterface, Number, Text
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
                $result = $value;
            } else {
                $result = $result * $value;
            }
            $first = false;
        }
        $this->setResult($result);
    }

    public function text()
    {
        $p = $this->createText();
        $result = '';
        foreach ($p as $value) {
            $result .= $value . '*';
        }
        $result = mb_substr($result, 0, -1);
        $this->setText($result);
    }
}