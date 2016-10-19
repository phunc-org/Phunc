<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 14.10.2016
 * Time: 19:56
 */

namespace Phunc;

/**
 * Class executeChmodTree
 */
class executeChmodTree
{

    /**
     * recursively change mode in path
     *
     * @param $path
     * @param int $filemode
     * @param int $limit
     */
    public function __construct($path, $filemode = 0777, $limit = 5)
    {
        for ($x = 0; $x < $limit; $x++) {
            @chmod($path, $filemode);
            $path = substr($path, 0, strrpos($path, '/', -2) + 1);
        }
    }
}