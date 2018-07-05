<?php

namespace Phunc\Time;

use \Mockery\Exception;

/**
 * Class Minutes
 * @package Phunc\Calculation
 */
class TimeConversion implements \Phunc\ToStringInterface
{
    /** @var float */
    protected $minutes = 0;

    /** @var HM */
    protected $HM;

    /** @var string */
    protected $format = 'hm';

    /**
     * TimeConversion constructor.
     * @param float $minutes
     * @param string $format
     */
    public function __construct(float $minutes, string $format = 'hm')
    {
        $this->minutes = $minutes;
        $this->format = $format;
        $this->convertToHours();
    }


    /**
     * @param float $minutes
     * @return $this
     */
    public function setMinutes(float $minutes)
    {
        $this->minutes = $minutes;
        return $this;
    }

    /**
     * Umwandlung der Minuten in Stunden und Minuten. Z.B. 3170 Min. = 52 Std. und 50 Min.
     *
     * @return $this
     */
    function convertToHours()
    {
        $totalMinutes = $this->minutes;
        $Mins = ($totalMinutes % 60);
        $Hours = floor(abs($totalMinutes) / 60);
        if ($totalMinutes < 0) {
            $Hours = '-' . $Hours;
            $Mins = substr($Mins, 1);
        } else {
            $Hours = floor($totalMinutes / 60);
        }
        $Mins = str_pad($Mins, 2, '0', STR_PAD_LEFT);
        $this->HM = new HM($Hours, $Mins);

        return $this;
    }

    /**
     * @param string $format
     * @return false|string
     */
    protected function getGmdate($format ='i:s')
    {
        $timestamp = mktime($this->minutes);
        return gmdate($format, $timestamp);
    }

    /**
     * @return string
     */
    protected function getHM()
    {
        $hsf = new HMF($this->HM, ['',':','']);
        return $hsf->toString();
    }

    /**
     * @return string
     */
    protected function getHours()
    {
        $hsf = new HMF($this->HM);
        return $hsf->toString();
    }

    /**
     * @return string
     */
    public function getFormat(): string
    {
        return $this->format;
    }

    /**
     * @param string $format
     * @return TimeConversion
     */
    public function setFormat(string $format): TimeConversion
    {
        $this->format = $format;
        return $this;
    }

    /**
     * @return string
     */
    public function toString()
    {
        if($this->format == 'hm'){
            return $this->getHours();
        } else if($this->format == ':'){
            return $this->getHM();
        }
        throw new Exception('The format of Time is not recognized: ' . $this->format);
    }

    /**
     * @return string|void
     */
    public function __toString()
    {
        return $this->toString();
    }

}