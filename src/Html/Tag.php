<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2017-08-25
 * Time: 11:55
 */

namespace Phunc\Html;


class Tag
{
    private $object;

    /**
     * Tag constructor.
     * @param $class
     */
    public function __construct($class)
    {
        $this->setObject($class);
    }

    /**
     * @return mixed
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @return mixed
     */
    protected function objectName()
    {
        $function = new \ReflectionClass($this->getObject());
        return $function->getShortName();
    }

    /**
     * @param mixed $object
     * @return Tag
     */
    public function setObject($object)
    {
        $this->object = $object;
        return $this;
    }


    /**
     * @return string
     */
    protected function prefix()
    {
        return '<' . $this->objectName() . '>';
    }

    /**
     * @return string
     */
    protected function suffix()
    {
        return '</' . $this->objectName() . '>';
    }

    /**
     * TODO: Attribute, Value, Tag
     * @return string
     */
    public function __toString()
    {
        $string = $this->prefix() . "\n";
        if (is_array($this->getObject()->getValue())) {
            foreach ($this->getObject()->getValue() as $value) {
                $string .= $value . "\n";
            }
        } else {
            $string .= $this->getObject()->getValue() . "\n";
        }
        $string .= $this->suffix();

        return $string;
    }
}