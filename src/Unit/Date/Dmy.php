<?php

namespace Phunc\Unit\Date;


class Dmy extends \Phunc\Unit\Date
{

    /** @var string */
    protected $date_format = 'd.m.Y';

    /**
     * Eur constructor.
     */
    public function __construct($value)
    {
        $value = $this->format($value);
        $this->setValue($value);
    }



    public function format($value)
    {
        return date($this->getDateFormat(), strtotime($value));
    }


}