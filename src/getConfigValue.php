<?php

/**
 *
 * Created by tom-sapletta-com
 * Date: 14.10.2016
 * Time: 18:50
 */
namespace Phunc;
use Exception;

/**
 * Class getConfigValue
 *
 * @package phunc
 */
class getConfigValue implements ValueText, HasString
{

    protected $config = [];
    protected $name = '';

    private $value = '';

    /**
     * getConfigValue constructor.
     * @param $config_path
     * @param $name
     * @throws Exception
     */
    public function __construct($config_path, $name)
    {
        if (empty($config_path)) {
//            throw new Exception(__CLASS__ . ' Empty $config');
            return;

        }
//        $config = Spyc::YAMLLoad(CONFIG_APP_PATH);
        $config = spyc_load_file($config_path);


        if (empty($config)) {
//            throw new Exception(__CLASS__ . ' Empty $config');
            return;

        }

        $this->config = $config;
        $this->name = $name;


        if (empty($name)) {
//            throw new Exception(__CLASS__ . ' Empty $name');
            return;

        }

        if (empty($this->config[$name])) {
//            throw new Exception(__CLASS__ . ' Config Name not exist');
            return;
        }

        $this->value = $this->config[$name];
    }

    /**
     * @return array
     */
    public function config()
    {
//        if(empty($name)) {
//            return $this->value;
//        }
        return $this->config;
    }

    /**
     * @return array
     */
    public function name()
    {
        return $this->name;
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