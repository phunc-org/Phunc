<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 14.10.2016
 * Time: 15:13
 */

namespace Phunc;
use UnexpectedValueException;

/**
 * Class ValidText
 */
class ValidText implements Valid
{
    public function __construct($text)
    {
        $is_valid_text = $this->valid($text);

        if (!$is_valid_text) {
            throw new UnexpectedValueException('Not Valid Language');
        }
    }

    /**
     * @param $text
     * @return bool
     */
    public function valid($text)
    {
        if (empty($text)) {
            return false;
        }
        return true;
    }
}