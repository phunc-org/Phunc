<?php

/**
 * 
 * Created by tom-sapletta-com
 * Date: 10.10.2016
 * Time: 19:30
 */
namespace Phunc;

/**
 * Class LoadFile
 *
 * @package phunc
 */
class LoadFile implements ValueText
{
    public $value = '';

    public function __construct($url)
    {
        $this->value = file_get_contents($url);
    }

    /**
     * @return string
     */
    public function value()
    {
        return $this->value;
    }
}