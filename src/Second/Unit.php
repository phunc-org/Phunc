<?php

namespace Time;

use Phunc\UnitInterface;

/**
 * Class Unit
 *
 * @package Time
 */
abstract class Unit extends \Phunc implements UnitInterface
{
    /** @var int */
//    protected $value = 1;

    /**
     * @param float|int|string $value
     * @param null|string $label
     */
    public function __construct($value, $label = null)
    {
        if ($value instanceof \Time\Unit) {
            $this->setValueFromUnit($value);
            $this->setLabelFromUnit($value);
        } else if (is_float($value) OR is_int($value) OR is_string($value)) {

            $this->setValue((float)$value);

            if (is_string($label)) {
                $this->setLabel($label);
            }

        } else {
            throw new \InvalidArgumentException('Value is Incorrect');
        }
    }


    /**
     * Base for Second
     *
     * @return Second
     */
    public function factor()
    {
        return new Second(1);
    }

    /**
     * @return Second
     */
    public function base()
    {
        $base = (float)$this->factor()->base()->getValue() * (float)$this->getValue();
        return new Second($base);
    }

    /**
     * CONVERSION to Current
     * Conversion from BaseUnit to Current Unit
     *
     * @param Unit $Time
     * @return $this
     */
    public function current(Unit $Time)
    {
        //TODO: set label
        $conversion = (float)$Time->base()->getValue() / (float)$this->factor()->base()->getValue();
        $this->setValue($conversion);
        return $this;
    }

    /**
     * @param Unit $unit
     */
    protected function setValueFromUnit(UnitInterface $unit)
    {
        $this->current($unit);
    }
}