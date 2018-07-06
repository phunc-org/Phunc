<?php

namespace Phunc;


class Year
{
    /**
     * @return int
     */
    public static function CurrentYear()
    {
        $year = \Carbon\Carbon::now()->format('Y');
        return (int)$year;
    }

    /**
     * @return \Carbon\Carbon
     */
    public static function CurrentYearStartOfYear()
    {
        return \Carbon\Carbon::now()->startOfYear();
    }

    /**
     * @return \Carbon\Carbon
     */
    public static function CurrentYearEndOfYear()
    {
        return \Carbon\Carbon::now()->endOfYear();
    }

    /**
     * @return int
     */
    public static function PrevYear()
    {
        $year = Year::CurrentYear() - 1;
        return (int)$year;
    }

    /**
     * @return int
     */
    public static function PrevPrevYear()
    {
        $year = Year::CurrentYear() - 2;
        return (int)$year;
    }

    /**
     * @return int
     */
    public static function PrevPrevPrevYear()
    {
        $year = Year::CurrentYear() - 3;
        return (int)$year;
    }

    /**
     * @return int
     */
    public static function NextYear()
    {
        $year = Year::CurrentYear() + 1;
        return (int)$year;
    }

    /**
     * @return \Carbon\Carbon
     */
    public static function PrevPrevYearStartOfYear()
    {
        return \Carbon\Carbon::now()->subYear()->subYear()->startOfYear();
    }

    /**
     * @return \Carbon\Carbon
     */
    public static function PrevPrevYearEndOfYear()
    {
        return \Carbon\Carbon::now()->subYear()->subYear()->endOfYear();
    }

    /**
     * @return \Carbon\Carbon
     */
    public static function PrevYearStartOfYear()
    {
        return \Carbon\Carbon::now()->subYear()->startOfYear();
    }

    /**
     * @return \Carbon\Carbon
     */
    public static function PrevYearEndOfYear()
    {
        return \Carbon\Carbon::now()->subYear()->endOfYear();
    }

    /**
     * L: Whether it's a leap year; 1 if it is a leap year, 0 otherwise
     *
     * @param $year
     *
     * @return static
     */
    public static function DaysInYear(int $year)
    {
        $period_from_carbon = \Phunc\Year::FirstDayInYearCarbon($year);
        $days_in_year = 365 + $period_from_carbon->format('L');
        return $days_in_year;
    }

    /**
     * @param int $year
     * @return string
     */
    public static function FirstDayInYear(int $year)
    {
        return $year . '-01-01';
    }

    /**
     * @param int $year
     *
     * @return \Carbon\Carbon
     */
    public static function FirstDayInYearCarbon(int $year)
    {
        return \Carbon\Carbon::parse( \Phunc\Year::FirstDayInYear($year) );
    }

    /**
     * @param int $year
     * @return string
     */
    public static function LastDayInYear(int $year)
    {
        return ($year + 1) . '-01-01';
    }

    /**
     * @param int $year
     *
     * @return \Carbon\Carbon
     */
    public static function LastDayInYearCarbon(int $year)
    {
        return \Carbon\Carbon::parse( \Phunc\Year::LastDayInYear($year) );
    }

    /**
     * @param \Carbon\Carbon $current_carbon
     *
     * @return static
     */
    public static function OneYearBefore(\Carbon\Carbon $current_carbon)
    {
        return $current_carbon->subYear();
    }
}