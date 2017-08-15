<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2017-08-15
 * Time: 16:58
 */

namespace Phunc\Rest;


interface GetInterface
{
    public function get(\Phunc\Url $url, \Phunc\Port $port, array $parameters = null);
}