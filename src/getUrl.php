<?php

/**
 * Created by PhpStorm.
 * User: tom
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

    public function __construct()
    {
        /*
        // get Path From Server
        if (isset($_SERVER['PATH_INFO']) && !empty($_SERVER['PATH_INFO'])) {
            $this->value = $_SERVER['PATH_INFO'];
        } else if (isset($_SERVER['REDIRECT_URL']) && !empty($_SERVER['REDIRECT_URL'])) {
            $this->value = $_SERVER['REDIRECT_URL'];
        } else if (isset($_SERVER['REQUEST_URI']) && !empty($_SERVER['REQUEST_URI'])) {
            $this->value = $_SERVER['REQUEST_URI'];
        } else {
    //            $path = '';
        }

        // extract language from Server path
        if (!empty($this->value)) {
            $path_list = explode('/', $this->value);
            $path_list_count = count($path_list);
            if (!empty($path_list[$path_list_count])) {
                $this->value = $path_list[$path_list_count];
            } else if (!empty($path_list[$path_list_count - 1])) {
                $this->value = $path_list[$path_list_count - 1];
            }
        }
    */
//        $is_localhost = new IsLocalhost($_SERVER);
//
//        $localhost_name = new getConfigValue('localhost_name');
//        $project_domain = new getConfigValue('project_domain');
//        if ($is_localhost->value()) {
//            $_SERVER['HTTP_HOST']. $_SERVER['SCRIPT_NAME'];
//            return $localhost_name . '/' . $project_domain;
//        } else {
//            return $project_domain;
//        }
        $this->value = $_SERVER['HTTP_HOST'];
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