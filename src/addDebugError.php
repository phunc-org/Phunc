<?php

/**
 *
 * Created by tom-sapletta-com
 * Date: 2016-06-07
 * Time: 00:29
 */

namespace Phunc;

use Exception;
use Config\ErrorPath;
use Phunc\addLineInFile;

/**
 * Class addDebugError
 */
class addDebugError
{
    /**
     * addDebugError constructor.
     *
     * @param $txt
     */
    public function __construct($txt, $txt2 = '')
    {
        if ($txt2 instanceof Exception) {
            $txt2 = $txt2->getMessage();
        }
        $logtxt = time() . ', '
            . $txt . ', '
            . $txt2;

//        new addLineInFile(LOG_ERROR_PATH, $logtxt);
        new addLineInFile((string)new ErrorPath(), $logtxt);
    }
}