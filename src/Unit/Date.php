<?php

namespace Phunc\Unit;


class Date extends \Phunc\Value
{
    /** @var string */
    protected $date_format = '';

    /**
     * @return string
     */
    public function getDateFormat(): string
    {
        return $this->date_format;
    }

    /**
     * @param string $date_format
     * @return Date
     */
    public function setDateFormat(string $date_format): Date
    {
        $this->date_format = $date_format;
        return $this;
    }


}