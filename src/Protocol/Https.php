<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2017-08-15
 * Time: 13:58
 */

namespace Phunc\Protocol;


class Https implements Request
{
    public function __construct(Url $url, Port $port = null)
    {

        if($port == null) {
            $port = new Port(443);
        }
    }
}