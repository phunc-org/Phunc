<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 11.10.2016
 * Time: 10:04
 */

namespace Phunc;
use UnexpectedValueException;

/**
 * Class ValidLanguage
 */
class ValidLanguage implements Valid
{
    public function __construct(ValueLanguage $language)
    {
        $is_valid_language = $this->valid($language->value());

        if (!$is_valid_language) {
            throw new UnexpectedValueException('Not Valid Language');
        }
    }

    /**
     * validation of language
     *
     * @param $language
     * @return bool
     */
    public function valid($language)
    {
        if (empty($language)) {
            return false;
        }
        if ($language == 'en' || $language == 'de' || $language == 'pl' || $language == 'ru') {
            return true;
        }
        return false;
    }
}