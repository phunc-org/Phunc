<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 11.10.2016
 * Time: 09:57
 */

namespace Phunc;

/**
 * Interface ItemPath
 */
interface ItemPath
{
    public function prev();

    public function next();

    public function item();

}