<?php

namespace Phunc\DateRange;


interface RangeInterface
{
    /**
     * @return \Carbon\Carbon
     */
    public function getFrom();

    /**
     * @param \Carbon\Carbon $from
     * @return DateRange
     */
    public function setFrom(\Carbon\Carbon $from);

    /**
     * @return \Carbon\Carbon
     */
    public function getTo();

    /**
     * @param \Carbon\Carbon $to
     * @return DateRange
     */
    public function setTo(\Carbon\Carbon $to);
}