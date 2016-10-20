<?php

/**
 *
 * Created by tom-sapletta-com
 * Date: 14.10.2016
 * Time: 13:00
 */

namespace Phunc;

/**
 * Class ReplaceInText
 */
class ReplaceInText implements ValuePath, HasString
{
    private $value = '';

    public function __construct($value)
    {
        $value_out = null;
        $valid = new ValidString($value);
        $value_out = str_replace([", \n", ",\n", "; \n", ";\n"], '<br/>', $value);
        $this->value = $value_out;
    }

    /**
     * @return string
     */
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