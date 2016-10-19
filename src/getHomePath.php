<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 15.10.2016
 * Time: 07:23
 */
namespace Phunc;

/**
 * Class getHomePath
 * @package phunc
 */
class getHomePath implements HasString, ValueText
{
    private $value = '';

    /**
     * get current language
     * @param $default_lang
     */
    public function __construct($default_lang = 'en')
    {

//        $localhost_name = (string) new getConfigValue('localhost_name');
//        $project_domain = (string) new getConfigValue('project_domain');
//        $path = (string) new getConfigValue('project_domain');
        $url = (string)new getUrl();
        $path = (string)new getDomain();

//            $this->value = $localhost_name . '/' . $project_domain;
        $path = $url . '/' . $path;

        $is_localhost = new IsLocalhost($_SERVER);
        // cut last part: /cv.php
        if(!$is_localhost->value()){
            $pathi = pathinfo($path);
            $path = $pathi['dirname'];
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