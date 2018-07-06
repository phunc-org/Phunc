<?php

namespace Phunc\Second;

/**
 * Interface TimeInterface
 * @package Phunc\Second
 */
interface TimeInterface
{
    public function __construct($value, \DateTime $date = null, $label = null);

    public function __toString();

    /**
     * @return Time
     */
    public function factor();

    /**
     * @return Second
     */
    public function base();

    /**
     * @param Time $time
     * @return $this
     */
    public function setValueFromUnit(Time $time);

    /**
     * @param Time $time
     * @return $this
     */
    public function setLabelFromUnit(Time $time);

    /**
     * @param Time $time
     * @return mixed
     */
    public function current(Time $time);
}