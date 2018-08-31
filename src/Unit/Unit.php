<?php

namespace Unit;


abstract class Unit extends \Phunc\Value\Number
{

    /** @var string  */
    protected $label = '';

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param $label
     * @return $this
     * @throws \Exception
     */
    public function setLabel($label)
    {
        if(empty($label)){
            return $this;
        }
        if(is_string($label) && !is_object($label)) {
            $this->label = $label;
            return $this;
        }
        throw new \Exception('Label is Not a String');
    }
}