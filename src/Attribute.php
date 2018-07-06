<?php

namespace Phunc;

use Exception;

class Attribute
{
    protected $object;

    /**
     * @param $object
     */
    public function __construct($object)
    {
        $this->object = $object;
    }

    /**
     * @param $name
     * @return mixed|null
     */
    public function getByName($name)
    {
        $array = $this->toArray();
        $is_attribute = array_key_exists($name, $array);
        if (empty($is_attribute)) {
            new \Exception('Attribute Not Exist');
            return null;
        }
        return $array[$name];
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $arr = $this->obj2array($this->object);
        unset($arr['___SOURCE_KEYS_']);
        return $arr;
    }

    /**
     * @param $Instance
     * @return array
     */
    function obj2array(&$Instance)
    {
        $clone = (array)$Instance;
        $rtn = array();
        $rtn['___SOURCE_KEYS_'] = $clone;

        foreach ($clone as $key => $value) {
            $aux = explode("\0", $key);
            $newkey = $aux[count($aux) - 1];
//			$rtn[$newkey] = &$rtn[$key]; // protected

            if ($rtn['___SOURCE_KEYS_'][$key] instanceof \Phunc\ValueInterface) {
                $rtn[$newkey] = $rtn['___SOURCE_KEYS_'][$key]->getValue();
            } else if ($rtn['___SOURCE_KEYS_'][$key] instanceof \Phunc\JsonArrayInterface || $rtn['___SOURCE_KEYS_'][$key] instanceof \Phunc\ArrayAttributesInterface) {
                $rtn[$newkey] = $rtn['___SOURCE_KEYS_'][$key]->toArray();
            } else {
                $rtn[$newkey] = &$rtn['___SOURCE_KEYS_'][$key];
            }
        }
        return $rtn;
    }

    /**
     * dump
     */
    public function listProperties()
    {
        $reflect = new \ReflectionObject($this);
        foreach ($reflect->getProperties(\ReflectionProperty::IS_PUBLIC + \ReflectionProperty::IS_PROTECTED) as $prop) {
            print $prop->getName() . "\n";
//			var_dump($prop);
        }
    }


    /**
     * @param array $a1
     * @param array $a2
     *
     * @return array
     */
    public function toSecondSum($a1, $a2 = [])
    {
        if (!is_array($a2) || empty($a2)) {
            return [];
        }
        foreach ($a1 as $k => $v) {
            if (array_key_exists($k, $a2)) {
                $a2[$k] = $v; // alternate: +, - ,* , /
            }
        }
        return $a2;
    }

    // TODO: summ to Object Attributes

    /**
     * @param array $a1
     * @param array $a2
     *
     * @return array
     */
    public function toFirstSum($a1, $a2 = [])
    {
        if (!is_array($a2) || empty($a2)) {
            return $a1;
        }
        foreach ($a1 as $k => $v) {
            if (array_key_exists($k, $a2)) {
                $a1[$k] = $a2[$k]; // alternate: +, - ,* , /
            }
        }
        return $a1;
    }
}