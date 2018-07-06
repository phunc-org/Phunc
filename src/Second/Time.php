<?php

namespace Phunc\Second;

/**
 * Class Time
 *
 * @package Phunc\Second
 */
abstract class Time extends \Phunc\Unit implements TimeInterface, \Phunc\UnitInterface
{
    /**
     * @param float|int|string $value
     * @param \DateTime|null $date
     * @param null $label
     *
     * @throws \Exception
     */
    public function __construct($value, \DateTime $date = null, $label = null)
    {
        if ($value instanceof \Phunc\Second) {
            $this->setValueFromUnit($value);
            $this->setLabelFromUnit($value);
            $this->setDateFromUnit($value);
        } else if (is_float($value) OR is_int($value) OR is_string($value)) {

            $this->setValue((float)$value);

            if (is_string($label)) {
                $this->setLabel($label);
            }
	        if (is_null($date)) {
		        $date = new \DateTime();
	        }
            $this->setDate($date);

        } else {
            throw new \InvalidArgumentException('Value is Incorrect');
        }
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * @param Time $Time
     */
    protected function setDateFromUnit(Time $Time)
    {
        if (empty($Time->getDate())) {
            throw new \InvalidArgumentException('Data is Empty');
        }
        $this->setDate($Time->getDate());
    }

    /**
     * CONVERSION to Current
     * Conversion from BaseUnit to Current Unit
     *
     * @param Time $time
     *
     * @return $this|mixed
     */
    public function current(Time $time)
    {
        // Very important!!, beacuse $this can be without DATE, its importing from another existing Object
        $this->setDateFromUnit($time);

        $conversion = (float)$time->base()->getValue() / (float)$this->factor()->base()->getValue();
        $this->setValue($conversion);
        return $this;
    }

    /**
     * @param Time $time
     *
     * @return $this|void
     */
    public function setValueFromUnit(Time $time)
    {
        $this->current($time);
    }

    /**
     * @param Time $time
     * @return $this|void
     *
     * @throws \Exception
     */
    public function setLabelFromUnit(Time $time)
    {
        $this->setLabel($time->getLabel());
    }
}