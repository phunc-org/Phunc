<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 14.10.2016
 * Time: 07:12
 */

namespace Phunc;


/**
 * Class Dump
 */
class Dump
{

    /**
     * Dump constructor.
     *
     * @param $data
     */
    public function __construct($data)
    {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
        die;
    }
}