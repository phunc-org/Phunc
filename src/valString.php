<?php
/**
 *
 * User: neptun
 * Date: 12.12.13
 * Time: 19:55
 */
namespace Phunc;

/**
 * Class valString
 * @package phunc
 */
class valString
{

    private $value;

    public function setString( $item = '' )
    {
        if( !empty($item) )
        {
            $this->value = $item;
            return true;
        }
        return false;
    }

    public function getString()
    {
        return $this->value;
    }
} 