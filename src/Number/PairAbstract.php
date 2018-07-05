<?php

namespace Phunc\Number;


abstract class PairAbstract
{

    /**
     * @return \Phunc\Number\Pair
     */
    public function getPair(): \Phunc\Number\Pair
    {
        return $this->pair;
    }

    /**
     * @param \Phunc\Number\Pair $pair
     * @return Plus
     */
    public function setPair(\Phunc\Number\Pair $pair): Plus
    {
        $this->pair = $pair;
        return $this;
    }

}