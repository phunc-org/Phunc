<?php

namespace Phunc\Second;

/**
 * Class Hour
 *
 * @package Phunc\Second
 */
class Hour extends \Phunc\Second\Time
{
    /**
     * @return Time|Minute
     */
    public function factor()
    {
        return new Minute(60);
    }

    /**
     * @return Second
     *
     * @throws \Exception
     */
    public function base()
    {
        $base = (float)$this->factor()->base()->getValue() * (float)$this->getValue();
        return new Second($base, $this->getDate());
    }

}