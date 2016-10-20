<?php

/**
 *
 * Created by tom-sapletta-com
 * Date: 16.10.2016
 * Time: 11:05
 */

namespace Phunc;
use phpDocumentor\Reflection\Types\Boolean;

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
        $path = '';

        if(!empty($server_param['HTTP_HOST'])){

        }

        if(!empty($server_param['SCRIPT_NAME'])){
            $this->value = 'http://';
            $this->value .= (string)new getDomain($server_param);
            $this->value .= '/';

            $path_list = explode('/', $server_param['SCRIPT_NAME']);
            if (!empty($path_list[0])) {
                $this->value .= $path_list[0];
            } else if (!empty($path_list[1])) {
                $this->value .= $path_list[1];
            }
        }
/*
        if(!empty($server_param['SERVER_NAME'])) {

//        $url = (string)new getUrl($_SERVER);
            $path = (string)new getDomain($server_param);

//            $this->value = $localhost_name . '/' . $project_domain;
//        $path = $url . '/' . $path;
            $is_localhost = (Boolean) new IsLocalhost($server_param);

            // cut last part: /cv.php
            if (!$is_localhost) {
                $pathi = pathinfo($path);
                $path = $pathi['dirname'];
            }

        }
        if(!empty($server_param['USERDOMAIN'])) {
            $path = strtolower($server_param['USERDOMAIN']);
        }
*/


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