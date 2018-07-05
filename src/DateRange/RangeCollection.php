<?php

namespace Phunc\DateRange;

class RangeCollection extends \Phunc\Collection implements \Phunc\FillFromArrayInterface
{
    /** @var \Phunc\DateRange\DateRange */
    protected $instance;

    /**
     * Default Value
     */
    public function __construct()
    {
        $this->setInstance(new \Phunc\DateRange\DateRange());
    }

    /**
     * @return DateRange
     */
    public function getInstance(): \Phunc\DateRange\DateRange
    {
        return $this->instance;
    }

    public function createCollection(){
        $di = new \Carbon\DateInterval('P1Y2M'); // <== instance from another API
        foreach($di as $item){
            echo $item;
        }
    }
}
