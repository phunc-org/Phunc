<?php

namespace Phunc\WorkingTime;


class Attributes
{
    protected $obj;

    /**
     * Attributes constructor.
     * @param $obj
     */
    public function __construct($obj)
    {
        $this->obj = $obj;
    }

    /**
     * @return array
     */
    public function toArray() {
        return get_object_vars($this->obj);
    }
}