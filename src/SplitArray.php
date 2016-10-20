<?php

/**
 *
 * Created by tom-sapletta-com
 * Date: 14.10.2016
 * Time: 14:44
 */

namespace Phunc;
use Exception;

/**
 * Class SplitArray
 * @package phunc
 */
class SplitArray implements ValuePath, HasString
{
    private $value = '';

    public function __construct($array)
    {
        try {
            $type_arr = explode(' ', $array);
        } catch (Exception $e) {
            new addDebugError(__CLASS__, $e);
//            $this->value = $value;
        }
//        $this->value = $value_out;
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
