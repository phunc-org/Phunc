<?php

namespace Phunc\Time;

/**
 * Class Minutes
 * @package Phunc\Calculation
 */
class HM
{
    /** @var float */
    public $minute = 0;

    /** @var float */
    public $hour = 0;

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
     * @return float
     */
    public function getMinute(): float
    {
        return $this->minute;
    }

    /**
     * @param float $minute
     * @return HM
     */
    public function setMinute(float $minute): HM
    {
        $this->minute = $minute;
        return $this;
    }

    /**
     * @return float
     */
    public function getHour(): float
    {
        return $this->hour;
    }

    /**
     * @param float $hour
     * @return HM
     */
    public function setHour(float $hour): HM
    {
        $this->hour = $hour;
        return $this;
    }

}