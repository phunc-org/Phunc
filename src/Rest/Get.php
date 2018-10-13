<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2017-08-15
 * Time: 14:29
 */

namespace Phunc\Rest;

use Phunc\Rest\GetInterface;

class Get implements GetInterface
{
    /** @var \Phunc\ValueText  */
    public $content;

    /**
     * Get constructor.
     * @param \Phunc\Url $url
     * @param \Phunc\Port $port
     * @param array|null $parameters
     */
    public function __construct(\Phunc\Url $url, \Phunc\Port $port, array $parameters = null)
    {
        $this->get($url, $port, $parameters);
    }

    /**
     * @return \Phunc\ValueText
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param \Phunc\ValueText $content
     * @return Get
     */
    public function setContent(\Phunc\ValueText $content)
    {
        $this->content = $content;
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
        $this->setContent(
            new \Phunc\ValueText(
                file_get_contents($url->getUrl())
            )
        );
    }

}