<?php

namespace Phunc\Calc;

/**
 * Class Calc
 *
 * @package Phunc\Calc
 */
class Calc
{

    /** @var \Phunc\OperationInterface */
    protected $operations;

    /**
     * @param $operations
     */
    public function __construct(\Phunc\OperationInterface $operations)
    {
        $this->operations = $operations;
    }

    /**
     * @return \Phunc\OperationInterface
     */
    public function getOperations(): \Phunc\OperationInterface
    {
        return $this->operations;
    }

    /**
     * @param \Phunc\OperationInterface $operations
     * @return Calc
     */
    public function setOperations(\Phunc\OperationInterface $operations): Calc
    {
        $this->operations = $operations;
        return $this;
    }

}