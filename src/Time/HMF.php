<?php

namespace Phunc\Time;

/**
 * Class HSF
 *
 * Format for HS
 *
 * @package Phunc\WorkingTime
 */
class HMF
{
    /** @var HM */
    protected $HM;

    /** @var array */
    protected $format = [];

    /** @var string */
    protected $string;

    /**
     * HSF constructor.
     * @param HM $HM
     * @param array $format
     */
    public function __construct(HM $HM, array $format = ['', ' h ', ' m'])
    {
        $this->HM = $HM;
        $this->format = $format;
        $this->convert();
    }

    /**
     * @return $this
     */
    public function convert()
    {
        $this->string = $this->format[0] . $this->HM->getHour() . $this->format[1] . $this->getWithTwoDigits( $this->HM->getMinute() ) . $this->format[2];
        return $this;
    }

    /**
     * @param $number
     * @return string
     */
    public function getWithTwoDigits($number)
    {
        $monthName = $number < 10 ? "0$number" : $number;
        return $monthName;
    }

    /**
     * @return string
     */
    public function toString()
    {
        return $this->string;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->string;
    }
}