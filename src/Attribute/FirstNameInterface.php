<?php

namespace Phunc\Attribute;


interface FirstNameInterface
{
    /**
     * @return mixed
     */
    public function getFirstName();

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name);
}