<?php

/**
 * 
 * Created by tom-sapletta-com
 * Date: 11.10.2016
 * Time: 09:31
 */

/**
 * Interface ItemTree
 *
 * structure list and more
 */

namespace Phunc;

/**
 * Interface ItemsTree
 * @package phunc
 */
interface ItemsTree
{
//    public function type();

//    public function all();

//    public function current();

//    public function nextCell();

    public function nextChild();

    public function prevChild();

    public function nextParent();

    public function prevParent();

    public function item();

}