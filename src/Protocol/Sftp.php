<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2017-08-15
 * Time: 13:57
 */

namespace Phunc\Protocol;


class Sftp
{
    public function __construct(Url $url, Port $port = null)
    {

        if ($port == null) {
            $port = new Port(22);
        }
    }
}