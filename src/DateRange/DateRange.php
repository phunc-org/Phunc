<?php

namespace Phunc\DateRange;

/**
 * Class DateRange
 *
 * Carbon:
 * http://carbon.nesbot.com/docs/#api-localization
 *
 * http://php.net/manual/de/function.strftime.php
 * Nachfolgend die im Formatierungsstring gültigen / bekannten Platzhalter:
 *
 * %a - abgekürzter Name des Wochentages, abhängig von der gesetzten Umgebung
 * %A - ausgeschriebener Name des Wochentages, abhängig von der gesetzten Umgebung
 * %b - abgekürzter Name des Monats, abhängig von der gesetzten Umgebung
 * %B - ausgeschriebener Name des Monats, abhängig von der gesetzten Umgebung
 * %c - Wiedergabewerte für Datum und Zeit, abhängig von der gesetzten Umgebung
 * %C - Jahrhundert (Jahr geteilt durch 100, gekürzt auf Integer, Wertebereich 00 bis 99)
 * %d - Tag des Monats als Zahl (Bereich 01 bis 31)
 * %D - so wie %m/%d/%y
 * %e - Tag des Monats als Dezimal-Wert, einstelligen Werten wird ein Leerzeichen voran gestellt (Wertebereich ´ 1´ bis ´31´)
 * %g - wie %G, aber ohne Jahrhundert.
 * %G - Das vierstellige Jahr entsprechend der ISO Wochennummer (siehe %V). Das gleiche Format und der gleiche Wert wie bei %Y. Besonderheit: entspricht die ISO Wochennummer dem vorhergehenden oder folgenden Jahr, wird dieses Jahr verwendet.
 * %h - so wie %b
 * %H - Stunde als Zahl im 24-Stunden-Format (Bereich 00 bis 23)
 * %I - Stunde als Zahl im 12-Stunden-Format (Bereich 01 bis 12)
 * %j - Tag des Jahres als Zahl (Bereich 001 bis 366)
 * %m - Monat als Zahl (Bereich 01 bis 12)
 * %M - Minute als Dezimal-Wert
 * %n - neue Zeile
 * %p - entweder `am' oder `pm' (abhängig von der gesetzten Umgebung) oder die entsprechenden Zeichenketten der gesetzten Umgebung
 * %r - Zeit im Format a.m. oder p.m.
 * %R - Zeit in der 24-Stunden-Formatierung
 * %S - Sekunden als Dezimal-Wert
 * %t - Tabulator
 * %T - aktuelle Zeit, genau wie %H:%M:%S
 * %u - Tag der Woche als Dezimal-Wert [1,7], dabei ist 1 der Montag.
 *
 * @package Phunc\DateRange
 */
class DateRange implements RangeInterface
{
    /** @var \Carbon\Carbon */
    protected $from;

    /** @var \Carbon\Carbon */
    protected $to;

    /** @var string */
    protected $nameFormat = '%Y|%m|%b';

    /** @var string */
    protected $timezone = 'Europe/Berlin';


    public function __construct()
    {
        $this->reset();
    }

    public function reset()
    {
        $this->from = \Carbon\Carbon::now();
        $this->to = \Carbon\Carbon::now();
    }

    /**
     * @param \Carbon\Carbon $from
     * @param \Carbon\Carbon $to
     * @return $this
     */
    public function fill(\Carbon\Carbon $from, \Carbon\Carbon $to)
    {
        $this->from = $from;
        $this->to = $to;

        return $this;
    }

    /**
     * @param $from
     * @param $to
     * @return $this
     */
    public function fillFromString($from, $to)
    {
        $this->from = \Carbon\Carbon::parse($from);
        $this->to = \Carbon\Carbon::parse($to);

        return $this;
    }

    /**
     * @param DateRangeString $dateRange
     * @return $this
     */
    public function fillFromDateRangeString(DateRangeString $dateRange)
    {
        $this->from = Carbon::parse($dateRange->getFrom());
        $this->to = Carbon::parse($dateRange->getTo());

        return $this;
    }

// MONTH


    /**
     * @param \Carbon\Carbon $from
     * @param \Carbon\Carbon $to
     * @return \Carbon\Carbon|static
     */
    public function makeLastDayTo(\Carbon\Carbon $from, \Carbon\Carbon $to)
    {
        if ($from->eq($from->lastOfMonth())) {
            if (!$to->eq($to->lastOfMonth())) {
                $to = $to->copy()->addDay();
            }
            if (!$to->eq($to->lastOfMonth())) {
                $to = $to->copy()->addDay();
            }
        }
        return $to;
    }

    /**
     * @param \Carbon\Carbon $from
     * @return WorkingYear|\Carbon\Carbon|static
     */
    public function createNextMonth(\Carbon\Carbon $from)
    {
        $to = $from->copy()->addMonth();
        $diffMonth = $to->month - $from->month;
        while ($diffMonth > 1) {
            $to = $to->copy()->subDay();
            $diffMonth = $to->month - $from->month;
        }
        $to = $this->makeLastDayTo($from, $to);
        $to = $to->subSecond();
        return $to;
    }

    /**
     * @param \Carbon\Carbon $from
     * @return WorkingYear|\Carbon\Carbon|static
     */
    public function createEndMonth(\Carbon\Carbon $from)
    {
        $to = $from->copy()->endOfMonth();
        return $to;
    }

    /**
     * @param $year
     * @param $month
     * @param $day
     * @return mixed
     */
    public function createCurrentMonth($year, $month, $day)
    {
        $from = \Carbon\Carbon::create($year, $month, $day, 0, 0, 0, 'Europe/Berlin');

        $diffMonth = $from->month - $month;
        while ($diffMonth > 0) {
            $from = $from->copy()->subDay();
            $diffMonth = $from->month - $month;
        }
        return $from;
    }

    /**
     * @param \Carbon\Carbon $startDate
     *
     * @return \Carbon\Carbon
     */
    public function createCurrentMonthFromStartDate(\Carbon\Carbon $startDate)
    {
        $year = (int)$startDate->format('Y');
        $month = (int)$startDate->format('n');
        $day = (int)$startDate->format('d');

        $from = \Carbon\Carbon::create($year, $month, $day, 0, 0, 0, 'Europe/Berlin');

        $diffMonth = $from->month - $month;
        while ($diffMonth > 0) {
            $from = $from->copy()->subDay();
            $diffMonth = $from->month - $month;
        }
        return $from;
    }

    /**
     * @param $year
     * @param $month
     * @param $day
     * @return $this
     */
    public function createDateRange($year, $month, $day)
    {
        $from = $this->createCurrentMonth($year, $month, $day);
        $to = $this->createNextMonth($from);
        $this->fill($from, $to);

        return $this;
    }

    /**
     * @param $year
     * @param $month
     * @param $day
     * @return $this
     */
    public function createDateRangeOnCalendarMonth($year, $month, $day)
    {
        $from = $this->createCurrentMonth($year, $month, $day);
        $to = $this->createEndMonth($from);
        $this->fill($from, $to);

        return $this;
    }

    /**
     * @param \Carbon\Carbon $startDate
     * @return $this
     */
    public function createDateRangeFromStartDate(\Carbon\Carbon $startDate)
    {
        $year = (int)$startDate->format('Y');
        $month = (int)$startDate->format('n');
        $day = (int)$startDate->format('d');

        $from = $this->createCurrentMonth($year, $month, $day);
        $to = $this->createNextMonth($from);
        $this->fill($from, $to);

        return $this;
    }

    /**
     * @param string $from
     * @param string $to
     *
     * @return int
     */
    public static function DateRangeDiff(string $from, string $to)
    {
        $date_Range = new \Phunc\DateRange\DateRange();
        $date_Range->fillFromString($from, $to);
        $date_Range->getFrom()->hour(0)->minute(0)->second(0);
        $date_Range->getTo()->hour(24); //->minute(59)->second(59);
        return $date_Range->diffInDays();
    }


    /**
     * Differents in days, beetwenn start and end range
     *
     * @return int
     */
    public function diffInDays()
    {
        $diff = $this->to->diffInDays($this->from);
        return $diff;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getFrom()->formatLocalized($this->nameFormat);
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getFrom(): \Carbon\Carbon
    {
        return $this->from;
    }

    /**
     * @param \Carbon\Carbon $from
     * @return DateRange
     */
    public function setFrom(\Carbon\Carbon $from): DateRange
    {
        $this->from = $from;
        return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getTo(): \Carbon\Carbon
    {
        return $this->to;
    }

    /**
     * @param \Carbon\Carbon $to
     * @return DateRange
     */
    public function setTo(\Carbon\Carbon $to): DateRange
    {
        $this->to = $to;
        return $this;
    }

    /**
     * @param \Carbon\Carbon $time
     * @return bool
     */
    public function isDateInRange(\Carbon\Carbon $time)
    {
        return $time->between($this->getFrom(), $this->getTo());
    }

    /**
     * @param \Carbon\Carbon $date
     * @return bool
     */
    public function isBiggerThan(\Carbon\Carbon $date)
    {
        if ($date->lt($this->to)) {
            return true;
        }

        return false;
    }

    /**
     * @param \Carbon\Carbon $date
     * @return bool
     */
    public function isSmallerThan(\Carbon\Carbon $date)
    {
        if ($date->gt($this->from)) {
            return true;
        }

        return false;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getFrom()->toDateTimeString() . ' <br>- ' . $this->getTo()->toDateTimeString();
    }

}