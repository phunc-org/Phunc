<?php

/**
 *
 * Created by tom-sapletta-com
 * Date: 14.10.2016
 * Time: 19:10
 */

namespace Phunc;


/**
 * Class addLineInFile
 *
 * add new line in existing file
 */
class addLineInFile
{
    /**
     * Add new line if file exist
     *
     * @param $file
     * @param $txt
     */
    public function __construct($file, $txt)
    {
        $is_writable = is_readable($file);

        // create new if not existing
        if (!$is_writable) {
            $path = pathinfo($file);
            $dir = $path['dirname'];
            $executing = new executeCreatePath($dir);
//            $executing = new executeChmodTree($file);
        }

        file_put_contents($file, $txt . "\n", FILE_APPEND);
    }
}