<?php

namespace Phunc\Unit\Currency;


use Phunc\Unit\Currency;

class Eur extends Currency
{
    /** @var string */
    protected $currency = '€';

    /**
     * Eur constructor.
     */
    public function __construct($value)
    {
        $value = $this->format($value);
        $value .= ' ';
        $value .= $this->getCurrency();
        $this->setValue($value);
    }


    /**
     * @param $number
     *
     * @return string
     */
    public function format($number)
    {
        return number_format($number, 2, ',', ' ');
    }

}