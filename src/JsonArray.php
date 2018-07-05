<?php

namespace Phunc;

/**
 * Class JsonAbstract
 *
 * @package Phunc
 */
class JsonArray extends Json
{
    /** @var array */
    protected $json = [];

    public function __construct($array)
    {
        $this->setJson($array);
    }

    /**
     * @return array
     */
    public function getJson()
    {
        return $this->json;
    }

    /**
     * @param JsonString|array|string $json
     * @return $this
     */
    public function setJson($json)
    {
        if ($json instanceof JsonString) {
            $this->json = $json->getJsonAsArray();
        }else if (is_string($json)) {
            $this->json = $this->fromStringToArray($json);
        }else  if (is_array($json)) {
            $this->json = $json;
        }
        return $this;
    }

    /**
     * null - string not exist
     *
     * @return string|null
     */
    public function getJsonAsString()
    {
        $array = $this->getJson();
        return $this->fromArrayToString($array);
    }

    /**
     * @param $name
     * @return mixed|null
     */
    public function getParameter($name)
    {
        if (array_key_exists($name, $this->getJson())) {
            return $this->getJson()[$name];
        }
        return null;
    }

    /**
     * @param $name
     * @param $value
     */
    public function setParameter($name, $value)
    {
        $this->getJson()[$name] = $value;
    }

    /**
     * @return JsonString
     */
    public function jsonString()
    {
        return new JsonString($this->getJsonAsString());
    }

	/**
	 * @return null|string
	 */
	public function toString()
	{
		return $this->getJsonAsString();
	}
}