<?php

/**
 *
 * Created by tom-sapletta-com
 * Date: 10.10.2016
 * Time: 22:44
 */

namespace Phunc;
use Exception;

/**
 * Class UserLanguage
 */
class UserLanguage implements ValueLanguage
{
    /**
     * @var string
     */
    public $value = false;

    public function __construct(array $data)
    {
        if (empty($data)) {
            throw new Exception('empty UserLanguage');
        }
        if (empty($data['lang'])) {
            throw new Exception('empty Lang in UserLanguage');
        }
        $this->value = $data['lang'];
    }

    /**
     * @return string
     */
    public function value()
    {
        return $this->value;
    }
}