<?php

/**
 *
 * Created by tom-sapletta-com
 * Date: 16.10.2016
 * Time: 09:50
 */

namespace Phunc;

use Exception;
use Config\InfoPath;

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
        new addLineInFile((string)new InfoPath(), $logtxt);
    }
}