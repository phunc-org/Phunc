<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 11.10.2016
 * Time: 11:57
 */

namespace Phunc;

/**
 * Class getValue
 */
class getValue implements ValuePath
{
    public $value = '';

    /**
     * getValue constructor.
     *
     * @param $var
     * @param $lang
     */
    public function __construct($var, $lang)
    {
        $sep1 = "\n";
        $value = '';
        if (empty($var)) {
            $value = '';
        } else if (is_array($var)) {
            if (!empty($var[$lang])) {
                if (is_array($var[$lang])) {
                    $value = implode($sep1, $var[$lang]);
                } else {
                    $value = $var[$lang];
                }
            } else {
                $value = current($var);
            }
        } else {
            $value = $var;
        }

        $this->value = $value;
    }

    /**
     * @return string
     */
    public function value()
    {
        return $this->value;
    }

}