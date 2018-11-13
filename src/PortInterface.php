<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2017-08-15
 * Time: 17:14
 */
namespace Phunc;

interface PortInterface
{
    /**
     * @return string
     */
    public function getPort();

    /**
     * @param string $port
     * @return Port
     */
    public function setPort($port);
}