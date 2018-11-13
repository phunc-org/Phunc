<?php

/**
 *
 * Created by tom-sapletta-com
 * Date: 10.10.2016
 * Time: 19:28
 */
namespace Phunc;

/**
 * Class SaveFile
 * @package phunc
 */
class SaveFile //implements ValueText
{

    public $value = '';

    public function __construct($path, $content)
    {
        $this->value = file_put_contents($path, $content);
    }

    /**
     * @return string
     */
    public function value()
    {
        return $this->value;
    }
}