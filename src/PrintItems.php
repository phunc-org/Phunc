<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 14.10.2016
 * Time: 07:07
 */
namespace Phunc;

/**
 * Class PrintItems
 * @package phunc
 */
abstract class PrintItems implements HasTemplate, HasString
{

    public $template = '';
    public $items = '';

//    public function __construct(Items $items, TemplateItems $template)
    public function __construct($items, $template = '')
    {
        $this->items = $items;
//        $this->items = ['' => ''];
//        $this->template = '';
    }

    public function items()
    {
        return $this->items;
    }

    public function template()
    {
        return $this->template;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $items = '';
        foreach ($this->items as $id => $value) {
            $items .= '<li class="' . strtolower($id) . '">' . $value . '</li>';
        }
        return '<ul class="' . strtolower(__CLASS__) . '">' . $items . '</ul>';
    }
}