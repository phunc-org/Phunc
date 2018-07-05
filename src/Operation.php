<?php

namespace Phunc;


abstract class Operation implements OperationInterface, NumberInterface, TextInterface
{
//    protected $x;
//    protected $y;

    /** @var array */
    protected $arg;

    protected $result;


    /** @var string */
    protected $text;

    /** @var float */
    protected $number;



    /**
     * Operation constructor.
     * @param $x
     * @param $y
     */
    public function __construct()
    {
//        $numargs = func_num_args();
//        if($numargs>2){
//             =
//        }
        $this->arg = $arg_list = func_get_args();
//        dd($this->arg);
//        $this->x = $x;
//        $this->y = $y;
        $this->calc();
    }

    public function param()
    {
//        $x = $this->getX();
//        if ($x instanceof Operation) {
//            $x = $this->getX()->getResult();
//        }
//
//        $y = $this->getY();
//        if ($y instanceof Operation) {
//            $y = $this->getY()->getResult();
//        }
//        return [$x, $y];

        $res = [];
        foreach ($this->arg as $val) {
            if ($val instanceof Operation) {
                $res[] = $val->getResult();
            } else {
                $res[] = $val;
            }
        }
        return $res;
//        return $this->arg;
    }


    public function createNumber()
    {
        $res = [];
        foreach ($this->arg as $val) {
            if ($val instanceof Operation) {
                $res[] = $val->getResult();
            } else {
                $res[] = $val;
            }
        }
        return $res;
    }


    public function createText()
    {
        $res = [];
        foreach ($this->arg as $val) {
            if ($val instanceof Operation) {
                $res[] = ' (' . $val->getText() . ') ';
            } else {
                $res[] = $val;
            }
        }
        return $res;
    }

//    /**
//     * @return mixed
//     */
//    public function getX()
//    {
//        return $this->x;
//    }
//
//    /**
//     * @param mixed $x
//     * @return Operation
//     */
//    public function setX($x)
//    {
//        $this->x = $x;
//        return $this;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getY()
//    {
//        return $this->y;
//    }
//
//    /**
//     * @param mixed $y
//     * @return Operation
//     */
//    public function setY($y)
//    {
//        $this->y = $y;
//        return $this;
//    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     * @return Operation
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     * @return Operation
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     * @return Operation
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }
}