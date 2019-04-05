<?php

namespace Phunc\Attribute;


class FullNameCollection extends \Phunc\Collection implements \Phunc\FillFromArrayInterface
{
    /** @var \Phunc\Attribute\FullNameInterface */
    protected $instance;

    /**
     * Default Value
     */
    public function __construct()
    {
        $this->setInstance(new \App\Name\FullName());
    }

}