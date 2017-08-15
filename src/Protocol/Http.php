<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2017-08-15
 * Time: 13:57
 */

namespace Phunc\Protocol;


class Http implements \Phunc\UrlInterface, \Phunc\PortInterface
{
    /** @var \Phunc\Url */
    private $url;

    /** @var \Phunc\Port */
    private $port;

    /**
     * Http constructor.
     * @param \Phunc\Url $url
     * @param \Phunc\Port $port
     */
    public function __construct(\Phunc\Url $url, \Phunc\Port $port)
    {
        $this->url = $url;

        if ($port == null) {
            $port = new \Phunc\Port(80);
        }
        $this->port = $port;
    }



//    public function __construct(\Phunc\Url $url, \Phunc\Port $port = null)
//    {

//    }

    /**
     * @return \Phunc\Url
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param \Phunc\Url $url
     * @return Http
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return \Phunc\Port
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param \Phunc\Port $port
     * @return Http
     */
    public function setPort($port)
    {
        $this->port = $port;
        return $this;
    }


}