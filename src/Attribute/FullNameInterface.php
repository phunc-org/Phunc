<?php

namespace Phunc\Attribute;


interface FullNameInterface
{
    /**
     * @return mixed
     */
    public function getFullName();

    /**
     * @param mixed $full_name
     */
    public function setFullName($full_name);
}