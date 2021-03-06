<?php

/**
 * Created by tom-sapletta-com, 14.10.2016, 19:56
 */

namespace Phunc\Cmd;

/**
 * Execute chmod in console
 *
 * Class executeChmodTree
 */
class ChmodTree
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
            $path = substr($path, 0, strrpos($path, DIRECTORY_SEPARATOR, -2) + 1);
        }
    }
}