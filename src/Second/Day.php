<?php

namespace Phunc\Second;

/**
 * Class Day
 * How many hours has a day
 *
 * @package Worktime\Unit
 */
class Day extends \Phunc\Second\Time
{

    /**
     * @return Hour|Time
     *
     * @throws \Exception
     */
    public function factor()
    {
        return new Hour(24);
    }

}