<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2017-08-15
 * Time: 13:58
 */

namespace Phunc;

class Port implements \Phunc\PortInterface
{
    /** @var string */
    public $port;

    /**
     * Port constructor.
     * @param string $port
     */
    public function __construct($port)
    {
        new NotEmpty($port);

        $this->port = $port;
    }

    /**
     * @return string
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param string $port
     * @return Port
     */
    public function setPort($port)
    {
        $this->port = $port;
        return $this;
    }
}