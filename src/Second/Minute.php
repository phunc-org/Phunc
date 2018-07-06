<?php

namespace Phunc\Second;

/**
 * Class Minute
 *
 * @package Phunc\Second
 */
class Minute extends \Phunc\Second\Time
{
    /**
     * @return Second
     *
     * @throws \Exception
     */
    public function factor()
    {
        return new Second(60);
    }

}