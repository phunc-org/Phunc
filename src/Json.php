<?php

namespace Phunc;

use Exception;

/**
 * Class JsonAbstract
 *
 * @package Phunc
 */
class Json
{
    /** @var JsonString|JsonArray */
    protected $json = null;

	/**
	 * Json constructor.
	 * @param string|array|null $json
	 * @throws Exception
	 */
    public function __construct($json)
    {
        if (is_array($json)) {
            $this->json = new JsonArray($json);
        }
        if (is_string($json)) {
	        if($this->isValid($json)){
		        $this->json = new JsonString($json);
	        }
        }
        throw new \Exception('JSON is not Valid');
    }

    /**
     * @return JsonString|JsonArray
     */
    public function getJson()
    {
        return $this->json;
    }

	/**
	 * @param JsonString|JsonArray $json
	 * @return $this
	 */
    public function setJson($json)
    {
        $this->json = $json;
        return $this;
    }

    /**
     * @param $array
     * @return string|null
     */
    public function fromArrayToString($array)
    {
        if (empty($array)) {
            return null;
        }
        try {
            $encodedJson = json_encode($array);
        } catch (Exception $e) {
            $encodedJson = '';
        }
        return $encodedJson;

    }

    /**
     * @param $string
     * @return array|null
     */
    public function fromStringToArray($string)
    {
        if (empty($string)) {
            return null;
        }
        try {
            $array = json_decode($string, true);
        } catch (Exception $e) {
            $array = [];
        }
        return $array;
    }

	/**
	 * @param $json
	 * @return bool
	 */
	protected function isValid($json)
	{
		json_decode($json);
		return (!json_last_error());
	}

	/**
	 * @return null|string
	 */
	public function toString()
	{
		return $this->json->toString();
	}

	/**
	 * @return null|string
	 */
	public function __toString()
	{
		return $this->toString();
	}
}