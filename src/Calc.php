<?php

namespace Phunc\Calc;


class Calc
{

    protected $operations;

    /**
     * Calc constructor.
     * @param $operations
     */
    public function __construct(OperationInterface $operations)
    {
        $this->operations = $operations;
    }

    /**
     * @return OperationInterface
     */
    public function getOperations(): OperationInterface
    {
        return $this->operations;
    }

    /**
     * @param OperationInterface $operations
     * @return Calc
     */
    public function setOperations(OperationInterface $operations): Calc
    {
        $this->operations = $operations;
        return $this;
    }



}