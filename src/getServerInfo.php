<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 14.10.2016
 * Time: 07:10
 */

namespace Phunc;


/**
 * print info about server
 */
class getServerInfo extends PrintItems
{

    public function __construct()
    {
        $this->items = $_SERVER;
    }
}