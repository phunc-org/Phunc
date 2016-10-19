<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 14.10.2016
 * Time: 13:00
 */

namespace Phunc;

/**
 * Class replacingInText
 */
class replacingInText implements ValuePath, HasString
{
    private $value = '';

    public function __construct($value)
    {
        $value_out = null;
//        try {
            $valid = new ValidString($value);
            $value_out = str_replace([", \n", ",\n", "; \n", ";\n"], '<br/>', $value);
//        } catch (Exception $e) {
//            $this->addLog(__CLASS__, $e);
//
//        }
        $this->value = $value_out;
    }

    public function value()
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->value();
    }
}