<?php

namespace Phunc;

use \Iterator;

/**
 * Class Collection
 * @package Phunc
 */
abstract class Collection extends ToConversion //implements Iterator, \Phunc\FillFromArrayInterface
{
    /** @var array */
    protected $collection = []; //private?

    /**
     * Für Empty instance of Object, item in Collection
     *
     * @var null
     */
    protected $instance = null;

    /**
     * @param array $array
     */
    public function __construct(array $array)
    {
        if (is_array($array)) {
            $this->setCollection($array);
        }
    }

    /**
     * @return $this
     */
    public function removeCurrent()
    {
        unset($this->collection[key($this->collection)]);
        return $this;
    }

    /**
     * zurückspulen
     *
     * @return $this
     */
    public function rewind()
    {
        reset($this->collection);
        return $this;
    }

    /**
     * aktuell
     * @return mixed
     */
    public function current()
    {
        $var = current($this->collection);
        return $var;
    }

    /**
     * @return mixed
     */
    public function key()
    {
        $var = key($this->collection);
        return $var;
    }

    /**
     * nächstes
     *
     * @return mixed
     */
    public function next()
    {
        next($this->collection);
        return $this;
    }

    /**
     * previously
     *
     * @return $this
     */
    public function prev()
    {
        prev($this->collection);
        return $this;
    }

    /**
     * gültig
     *
     * @return bool
     */
    public function valid()
    {
        $var = $this->current() !== false;
        return $var;
    }

    /**
     * @return int
     */
    public function size()
    {
        $var = count($this->collection);
        return $var;
    }

    /**
     * @param CollectionInstanceInterface $instance
     * @param null $key
     *
     * @return $this
     */
    public function add(CollectionInstanceInterface $instance, $key = null)
    {
        if (!empty($key)) {
            $this->collection[$key] = $instance;
        } else {
            $this->collection[] = $instance;
        }
        return $this;
    }

    /**
     * @param Collection $collection
     * @return $this
     */
    public function addCollection(Collection $collection)
    {
        if ($collection->size() === 0) {
            return $this;
        }

        // add by $this, whole object or by getCollection
        foreach ($collection->getCollection() as $instance) {
            if (!empty($instance)) {
                $this->add($instance);
            }
        }
        return $this;
    }


    /**
     * @return CollectionInstanceInterface
     */
    public function first()
    {
        $instance = reset($this->collection);
        if ($instance instanceof CollectionInstanceInterface) {
            return $instance;
        }
        return $this->getInstance(); // empty object
    }

    /**
     * @return array
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @return $this
     */
    public function resetCollection()
    {
        $this->collection = [];
        return $this;
    }

    /**
     * @param array $collection
     */
    public function setCollection(array $collection)
    {
        $this->collection = $collection;
    }

    /**
     * @return $this
     */
    public function cleanCollection()
    {
        $this->collection = [];
        return $this;
    }

    /**
     * @return $this
     */
    public function last()
    {
        end($this->collection);
        return $this;
    }

    /**
     * @return CollectionInstanceInterface
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * @param CollectionInstanceInterface $instance
     */
    public function setInstance(CollectionInstanceInterface $instance)
    {
        $this->instance = $instance;
    }

    /**
     * @param array $array
     *
     * @return $this
     */
    public function fillFromArray(array $array)
    {
        $this->resetCollection();
        foreach ($array as $one_array) {

            // Important to have every time new Object,
            // !!! Not copy of last existing version with values
            $instance = clone $this->getInstance();

            // make reset attributes
            if ($instance instanceof \Phunc\CollectionInstanceInterface) {
                $instance->reset();
            }

            $this->add(
                $instance->fillFromArray($one_array)
            );
        }
        return $this;
    }

    /**
     * @param integer $item
     * @return CollectionInstanceInterface|mixed
     */
    public function getByItem($item)
    {
        $no = 0;
        foreach ($this->getCollection() as $heater) {
            $no++;
            if ($no == $item) {
                return $heater;
            }
        }
        return $this->getInstance();
    }

    /**
     * @param string|integer $key
     * @return \Phunc\CollectionInstanceInterface
     */
    public function getByKey($key)
    {
        return $this->getCollection()[$key];
    }

    /**
     * @param $key
     * @param CollectionInstanceInterface $month
     * @return $this
     */
    public function setByKey($key, \Phunc\CollectionInstanceInterface $month)
    {
        $this->getCollection()[$key] = $month;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $array = [];
        foreach ($this->getCollection() as $key => $instance) {
            $array[$key] = (array)$instance->toArray();
        }
        return $array;
    }

    /**
     * @return string
     */
    public function toString()
    {
        $json = new \Phunc\JsonArray($this->toArray());
        return $json->toString();
    }

    /**
     * @return null|string
     */
    public function __toString()
    {
        return $this->toString();
    }

    /**
     * @param array $instance_array
     * @return bool
     * @throws \Exception
     */
    public function isCurrentEqual(array $instance_array)
    {
        return $this->hasEqualArrays($instance_array, $this->current()->toArray());
    }

    /**
     * @param CollectionInstanceInterface $instance_in
     * @return bool
     * @throws \Exception
     */
    public function isCurrentEqualByInstance(CollectionInstanceInterface $instance_in)
    {
        return $this->hasEqualArrays($instance_in->toArray(), $this->current()->toArray());
    }


    /**
     * @param array $instance_array
     * @return $this
     */
    public function removeEqual(array $instance_array)
    {
        $this->rewind();
        while (!empty($this->current())) {
//			if ($this->hasEqualArrays($this->current()->toArray(), $instance_array)) {
            $a = $this->current()->toArray()[key($instance_array)];
            $b = $instance_array[key($instance_array)];
            if ($a == $b) {
                $this->removeCurrent();
            } else {
                $this->next();
            }
        }
        return $this;
    }

    /**
     * @param array $instance_array
     * @return $this
     */
    public function removeNotEqual(array $instance_array)
    {
        $this->rewind();
        while (!empty($this->current())) {
//			if (!$this->hasEqualArrays($this->current()->toArray(), $instance_array)) {
            $a = $this->current()->toArray()[key($instance_array)];
            $b = $instance_array[key($instance_array)];
            if ($a !== $b) {

                $this->removeCurrent();
            } else {
                $this->next();
            }
        }
        return $this;
    }

    /**
     * @param array $instance_array
     * @return bool
     */
    public function isEqual(array $instance_array)
    {
        $this->rewind();
        while (!empty($this->current())) {
            if ($this->hasEqualArrays($this->current()->toArray(), $instance_array)) {
                return true;
            }
            $this->next();
        }
        $this->rewind();
        return false;
    }

    /**
     * @param CollectionInstanceInterface $instance_in
     * @return bool
     */
    public function isEqualByInstance(CollectionInstanceInterface $instance_in)
    {
        $this->rewind();
        while (!empty($this->current())) {
            if ($this->hasEqualArrays($this->current()->toArray(), $instance_in->toArray())) {
                return true;
            }
            $this->next();
        }
        $this->rewind();
        return false;
    }

    /**
     * @param array $a
     * @return array
     */
    public function removeEmptyElementsInArray(array $a)
    {
        foreach ($a as $key => $link) {
            if (empty($link)) {
                unset($a[$key]);
            }
        }
        return $a;
    }

    public function removeNotExistElementsInArray(array $a, array $b)
    {
        foreach ($a as $key => $value) {
            if (!array_key_exists($key, $b)) {
                unset($a[$key]);
            }
        }
        return $a;
    }

    /**
     * @param array $a
     * @param array $b
     * @return bool
     * @throws \Exception
     */
    public function hasEqualArrays(array $a, array $b)
    {
        $b = $this->removeEmptyElementsInArray($b);

        $a = $this->removeEmptyElementsInArray($a);
        $a = $this->removeNotExistElementsInArray($a, $b);

        if (count($a) != count($b)) {
//			throw new \Exception('Quantity of Elements in Arrays are different:' . count($a) . '!=' . count($b));
            return false;
        }
        if (serialize($a) !== serialize($b)) {
//			throw new \Exception('Elements in Arrays are different');
            return false;
        }
        return true;
    }

    /**
     * @param $attribute_name
     * @return array
     */
    public function createArrayKeyAsAttributeName($attribute_name)
    {
        $a = [];
        foreach ($this->getCollection() as $key => $object) {
            $object_array = $object->toArray();
            if (isset($object_array[$attribute_name])) {
                $key_string = $object_array[$attribute_name];
                if (is_object($key_string)) {

                    // TODO: more type of objects
                    // converting to string
                    if ($key_string instanceof \Carbon\Carbon) {
//                     $key_string = $object_array[$attribute_name]->format('Y-m-d');
                        $key_string = $object_array[$attribute_name]->toDateTimeString();
                    } else {
                        $key_string = $object_array[$attribute_name]->toArray();

                    }
                }
//                if the same key exist, make +1
                if(empty($a[$key_string])){
                    $a[$key_string] = $object;
                } else {
                    $a[$key_string . '_' . $key] = $object;
                }
            }
        }
        return $a;
    }

    /**
     * solutions for reducing Collection just to one attribute - flat array
     *
     * @param $attribute_name
     * @return array
     */
    public function createFlatArrayWithValuesAsAttributeName($attribute_name)
    {
        $a = [];
        foreach ($this->getCollection() as $key => $object) {
            $object_array = $object->toArray();
            if (isset($object_array[$attribute_name])) {
                $a[$key] = $object_array[$attribute_name];
            }
        }
        return $a;
    }

    /**
     * @param $attribute_name
     * @return $this
     */
    public function sortToHigh($attribute_name)
    {
        $a = $this->createArrayKeyAsAttributeName($attribute_name);
        ksort($a);
        $this->setCollection($a);
        return $this;
    }

    /**
     * @param $attribute_name
     * @return $this
     */
    public function sortToLow($attribute_name)
    {
        $a = $this->createArrayKeyAsAttributeName($attribute_name);
        krsort($a);
        $this->setCollection($a);
        return $this;
    }

    /**
     * @param array $instance_array
     * @return mixed|null
     *
     * @throws \Exception
     */
    public function getEqual(array $instance_array)
    {
        $this->rewind();
        while (!empty($this->current())) {
            if ($this->hasEqualArrays($this->current()->toArray(), $instance_array)) {
                return $this->current();
            }
            $this->next();
        }
        return null;
    }

    /**
     * @param CollectionInstanceInterface $instance_in
     * @return mixed|null
     *
     * @throws \Exception
     */
    public function getEqualByInstance(CollectionInstanceInterface $instance_in)
    {
        $this->rewind();
        while (!empty($this->current())) {
            if ($this->hasEqualArrays($this->current()->toArray(), $instance_in->toArray())) {
                return $this->current();
            }
            $this->next();
        }
        return null;
    }

    /**
     * @param Collection $collection
     * @return Collection
     * @throws \Exception
     */
    // todo: check, instance not exist
    public function getEqualFromCollection(\Phunc\Collection $collection)
    {
        $new_collection = clone $this;
        $new_collection->cleanCollection();

        /** @var CollectionInstanceInterface $instance */
        foreach ($this->getCollection() as $instance) {
            /** @var CollectionInstanceInterface $same */
            foreach ($collection as $same) {
                if ($this->isEqual($same)) {
                    $new_collection->add($this->getEqual($same));
                }
            }
        }
        return $new_collection;
    }
}