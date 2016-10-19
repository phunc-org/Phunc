<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 14.10.2016
 * Time: 15:20
 */

namespace Phunc;
use Exception;

/**
 * Class ValidString
 * @package phunc
 */
class ValidString implements Valid
{
    public function __construct($text)
    {
        $is_valid_text = $this->valid($text);

        if (!$is_valid_text) {
            throw new Exception('Not Valid String');
        }
    }

    /**
     * @param $text
     * @return bool
     */
    public function valid($text)
    {
        if (empty($text) || !is_string($text)) {
            return false;
        }
        return true;
    }
}