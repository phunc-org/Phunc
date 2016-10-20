<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 14.10.2016
 * Time: 14:45
 */

namespace Phunc;
use Exception;
//use phunc\core;

/**
 * Class TextToArray
 */
class TextToArray
{
    private $value = '';

    public function __construct($text, $split = ' ')
    {
        $type_arr = null;
        try {
            $valid = new ValidString($text);
//            if (!$valid->valid($text)) {
//                throw new UnexpectedValueException('Not Valid Language');
//            }
            $type_arr = explode($split, $text);
        } catch (Exception $e) {
            new addDebugError(__CLASS__, $e);
        }
        $this->value = $type_arr;
    }

    public function value()
    {
        return $this->value;
    }

    /**
     * @return string
     */
//    public function __toString()
//    {
//        return $this->value();
//    }
}