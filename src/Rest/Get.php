<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2017-08-15
 * Time: 14:29
 */

namespace Phunc\Phunc\Rest;

use Phunc\Rest\GetInterface;

class Get implements GetInterface
{
    /** @var bool|string  */
    public $file;


    /**
     * @param \Phunc\Url $url
     * @param \Phunc\Port $port
     * @param null $parameters
     */
    public function __construct(\Phunc\Url $url, \Phunc\Port $port, array $parameters = null)
    {
        $this->get($url, $port, $parameters);
    }

    /**
     * @return bool|string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param bool|string $file
     * @return Get
     */
    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }

    /**
     * @param \Phunc\Url $url
     * @param \Phunc\Port $port
     * @param array|null $parameters
     */
    public function get(\Phunc\Url $url, \Phunc\Port $port, array $parameters = null)
    {
//        $this->url = $url;
        if ($port == null) {
            $port = new \Phunc\Port(80);
        }
        $this->file = file_get_contents($url->getUrl());
    }

}