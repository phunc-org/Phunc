<?php

namespace Unit;

interface UnitInterface
{
    /**
     * @param float $value
     */
    public function getValue();

    /**
     * @param float $value
     */
    public function setValue($value);

    /**
     * @param string $value
     */
    public function getLabel();

    /**
     * @param string $value
     */
    public function setLabel($value);

}