<?php

namespace Phunc;

/**
 * SET to STRING
 *
 * @package Phunc
 */
class JsonString extends Json
{
    /** @var string */
    protected $json = '';

    /**
     * @param JsonArray|string|array|null $json
     */
    public function __construct($json)
    {
        $this->setJson($json);
    }

    /**
     * @return string
     */
    public function getJson()
    {
        return $this->json;
    }

    /**
     * @param JsonArray|string|array $json
     * @return $this
     */
    public function setJson($json)
    {
        if ($json instanceof JsonArray) {
            $this->json = $json->getJsonAsString();
        } else if (is_array($json)) {
            $this->json = $this->fromArrayToString($json);
        } else if (is_string($json)) {
            $this->json = $json;
        }
        return $this;
    }

    /**
     * array - all is ok
     * null - array is not exist
     *
     * @return array|null
     */
    public function getJsonAsArray()
    {
        $string = $this->getJson();
        return $this->fromStringToArray($string);
    }

    /**
     * @return JsonArray
     */
    public function jsonArray()
    {
        return new JsonArray($this->getJsonAsArray());
    }

	/**
	 * @return null|string
	 */
	public function toString()
	{
		return $this->getJson();
	}
}