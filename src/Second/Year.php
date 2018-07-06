<?php

namespace Phunc\Second;

use \Phunc\Second\Day;
use \Phunc\Second\Second;

/**
 * Class Year
 *
 * @package Time\Unit
 */
class Year extends \Phunc\Second\Time
{
    /**
     * @return Day
     */
    public function factor()
    {
        $days = $this->getDaysInYear($this->getDate());
        return new Day($days, $this->getDate());
    }

    /**
     * @return Second
     */
    public function base()
    {
        $base = (float)$this->factor()->base()->getValue() * (float)$this->getValue();
        return new Second($base, $this->getDate());
    }

    /**
     * @param \DateTime $date
     * @return int 366, 365
     */
    public function getDaysInYear(\DateTime $date)
    {
        $days_in_current_year = 365;
        if ($this->isLeapYear($date)) {
            $days_in_current_year = 366;
        }
        return $days_in_current_year;
    }

    /**
     * calculate how leap $year, by Gregorian Calendar
     *
     * @param \DateTime $date
     * @return bool
     */
    protected function isLeapYear(\DateTime $date)
    {
        $year = (int) $date->format('Y');
        return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year % 400) == 0)));
    }
}