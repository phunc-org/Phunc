<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 15.10.2016
 * Time: 07:57
 */

namespace Phunc;


/**
 * Class executeCreatePath
 */
class executeCreatePath implements ValueBoolean
{
    private $value = '';

    /**
     * recursively create a long directory path
     *
     * @param $path
     * @param int $filemode
     */
    public function __construct($path, $filemode = 0777)
    {
        $this->value = is_dir($path);
        if ($this->value) {
            return true;
        }
        // You should change access for folder by admin, when is permission denied for mkdir()
        $this->value = mkdir($path, $filemode, true);
    }

    /**
     * @return mixed|string
     */
    public function value()
    {
        return $this->value;
    }

}