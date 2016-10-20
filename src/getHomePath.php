<?php

/**
 *
 * Created by tom-sapletta-com
 * Date: 15.10.2016
 * Time: 07:23
 */
namespace Phunc;
use phpDocumentor\Reflection\Types\Boolean;

/**
 * Class getHomePath
 * @package phunc
 */
class getHomePath implements HasString, ValueText
{
    private $value = '';

    /**
     * get current language
     *
     * @param $server_param
     * @param string $default_lang
     */
    public function __construct($server_param, $default_lang = 'en')
    {
        $url = (string)new getUrl($server_param);
        $path_dir = (string)new getDomain($server_param);
        $path = $url . '/' . $path_dir;

        $is_localhost = (Boolean) new IsLocalhost($server_param);

        // cut last part: /cv.php
        if(!$is_localhost){
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
        return (string) $this->value();
    }
}