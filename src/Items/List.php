<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 11.10.2016
 * Time: 09:31
 */
namespace Phunc;

/**
 * Interface ItemsList
 * @package phunc
 */
interface ItemsList {

    /** return array */
//    public function type();

    /** return array */
//    public function current();

    public function prev();

    public function next();

    public function item();

}

