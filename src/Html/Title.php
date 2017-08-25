<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2017-08-25
 * Time: 11:36
 */
namespace Phunc\Html;

class Title
{
    private $value = "";

    /**
     * Html constructor.
     * @param string $value
     */
    public function __construct($value)
    {
        $this->setValue(func_get_args());
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return Html
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) new \Phunc\Html\Tag($this);
    }
}