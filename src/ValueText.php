<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2017-08-15
 * Time: 17:44
 */
namespace Phunc;

class ValueText
{
    private $value;

    /**
     * ValueText constructor.
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return ValueText
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

}