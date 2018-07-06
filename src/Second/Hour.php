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
     * @return Minute|Time
     *
     * @throws \Exception
     */
    public function factor()
    {
        return new Minute(60);
    }

}