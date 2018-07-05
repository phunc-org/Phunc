<?php

namespace Phunc\DateRange;


interface DateRangeInterface
{
    /**
     * @return string
     */
    public function getDateRange();

    /**
     * @param string $dateRange
     * @return mixed
     */
    public function setDateRange(string $dateRange);
}