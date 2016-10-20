<?php

/**
 *
 * Created by tom-sapletta-com
 * Date: 14.10.2016
 * Time: 06:35
 */

namespace Phunc;

/**
 * Interface ItemTemplate
 */
interface ItemTemplate
{
    public function __construct($name, $value, $childclass, $parentclass);
    public function template();
}