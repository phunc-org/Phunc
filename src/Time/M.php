<?php

namespace Phunc\Time;

/**
 * Class Minutes
 * @package Phunc\Calculation
 */
class M
{
    /** @var float */
    public $minute = 0;

    /**
     * HS constructor.
     * @param float $hour
     * @param float $minute
     */
    public function __construct(float $hour, float $minute)
    {
        $this->minute = $minute;
        $this->hour = $hour;
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