<?php

namespace Phunc\Unit;


class Currency extends \Phunc\Value
{
    protected $currency = '';

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return Currency
     */
    public function setCurrency(string $currency): Currency
    {
        $this->currency = $currency;
        return $this;
    }

}