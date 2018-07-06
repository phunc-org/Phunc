<?php

namespace Phunc\Second;


/**
 * Class Second
 *
 * @package Phunc\Second
 */
class Second extends \Phunc\Second\Time
{
    /**
     * Base Unit for Second
     *
     * @return Second|Time
     *
     * @throws \Exception
     */
    public function factor()
    {
        return new Second(1, $this->getDate());
    }

    /**
     * Base Object is Second
     *
     * @return $this
     */
    public function base()
    {
        return $this;
    }
}