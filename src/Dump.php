<?php

/**
 * Created by tom-sapletta-com
 * Date: 14.10.2016
 * Time: 07:12
 */

namespace Phunc;


/**
 * Show Dump Data
 *
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