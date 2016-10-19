<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 16.10.2016
 * Time: 09:50
 */

namespace Phunc;
use Exception;

/**
 * Class addDebugInfo
 */
class addDebugInfo
{
    /**
     * addDebugInfo constructor.
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
        new addLineInFile(LOG_INFO_PATH, $logtxt);
    }
}