<?php

namespace Phunc\DateRange;


class DateRangeString implements RangeInterface
{
    /** @var string */
    protected $from;

    /** @var string */
    protected $to;

    /**
     * DateRange constructor.
     * @param string $from
     * @param string $to
     */
    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    /**
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }

    /**
     * @param string $from
     * @return DateRangeString
     */
    public function setFrom(string $from): DateRangeString
    {
        $this->from = $from;
        return $this;
    }

    /**
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }

    /**
     * @param string $to
     * @return DateRangeString
     */
    public function setTo(string $to): DateRangeString
    {
        $this->to = $to;
        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getFrom() . ' - ' . $this->getTo();
    }

}