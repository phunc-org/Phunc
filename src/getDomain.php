<?php

/**
 *
 * Created by tom-sapletta-com
 * Date: 16.10.2016
 * Time: 11:01
 */

namespace Phunc;

/**
 * Class getDomain
 */
class getDomain implements HasString, ValueText
{
    private $value = null;

    public function __construct($server_param)
    {
        $this->value = '';
        if (!empty($server_param['HTTP_HOST'])) {
            $this->value = $server_param['HTTP_HOST'];
        } else if (!empty($server_param['SERVER_NAME'])) {
            $this->value = $server_param['SERVER_NAME'];
        } else if (!empty($server_param['USERDOMAIN'])) {
            $this->value = strtolower($server_param['USERDOMAIN']);
        }
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