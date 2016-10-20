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

    public function __construct()
    {
        $path_list = explode('/', $_SERVER['SCRIPT_NAME']);
//        $path_list_count = count($path_list);
        if (!empty($path_list[0])) {
            $path = $path_list[0];
        } else if (!empty($path_list[1])) {
            $path = $path_list[1];
        }

        $this->value = $path;
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