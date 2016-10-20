<?php

/**
 *
 * Created by tom-sapletta-com
 * Date: 14.10.2016
 * Time: 05:43
 */
namespace Phunc;

/**
 * Class PrintLog
 * @package phunc
 */
class PrintLog extends PrintItems
{
    public function __construct($items, $template = '')
    {
        $this->items = $items;
//        $this->items = ['' => ''];
//        $this->template = '';
    }
}