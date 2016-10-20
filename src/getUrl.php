<?php

/**
 *
 * Created by tom-sapletta-com
 * Date: 16.10.2016
 * Time: 11:05
 */

namespace Phunc;

/**
 * Class getUrl
 * @package phunc
 */
class getUrl implements HasString, ValueText
{
    private $value = null;

    /**
     * getUrl constructor.
     * @param $server_param
     */
    public function __construct($server_param)
    {
        $this->value = $server_param['HTTP_HOST'];
    }

    /**
     * @return mixed|string
     */
    public function value()
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->value();
    }
}