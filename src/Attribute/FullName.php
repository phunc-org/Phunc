<?php

namespace Phunc\Attribute;


class FullName implements \Phunc\CollectionInstanceInterface, \Phunc\Attribute\FirstNameInterface, \Phunc\Attribute\LastNameInterface, \Phunc\Attribute\FullNameInterface
{
    /** @var string */
    protected $format;

    /** @var string */
    protected $last_name;

    /** @var string */
    protected $first_name;

    /** @var string */
    protected $full_name;


    /**
     * FullName constructor.
     * @param string $format
     */
    public function __construct($format = 'txt')
    {
        $this->setFormat($format);
        $this->reset();
    }

    public function reset()
    {
        $this->setFirstName('');
        $this->setLastName('');

        return $this;
    }

    /**
     * @param array $array
     *
     * @return $this
     */
    public function fillFromArray(array $array)
    {
        $this->setFirstName($array['first_name']);
        $this->setLastName($array['last_name']);

        return $this;
    }

    /**
     * @param $last_name
     * @param $first_name
     */
    public function fill($last_name, $first_name)
    {
        $this->setFirstName($last_name);
        $this->setLastName($first_name);
    }

    /**
     * @param $obj
     * @return $this
     */
    public function fillFromObject($obj)
    {
        $this->setFirstName($obj->first_name);
        $this->setLastName($obj->last_name);

        return $this;
    }

    /**
     * @return $this
     */
    public function convertToText()
    {
        $this->setFullName(
            $this->getLastName() . ', ' . $this->getFirstName()
        );

        return $this;
    }

    /**
     * @return $this
     */
    public function convertToHtml()
    {
        $this->setFullName(
            '<span class="last_name">' . $this->getLastName() . '</span><span class="first_name">' . $this->getFirstName() . '</span>'
        );

        return $this;
    }


    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     * @return FullName
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     * @return FullName
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->full_name;
    }

    /**
     * @param mixed $full_name
     * @return FullName
     */
    public function setFullName($full_name)
    {
        $this->full_name = $full_name;
        return $this;
    }

    /**
     * @return $this
     */
    public function convertByFormat()
    {
        if ($this->format === 'txt') {
            $this->convertToText();
        } else {
            $this->convertToHtml();
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getFormat(): string
    {
        return $this->format;
    }

    /**
     * @param string $format
     * @return FullName
     */
    public function setFormat(string $format): FullName
    {
        $this->format = $format;
        return $this;
    }


    /**
     * @return array
     */
    public function toArray()
    {
        $getFields = function ($obj) {
            return get_object_vars($obj);
        };
        return $getFields($this);
    }

    /**
     * @return string
     */
    public function toString()
    {
        $this->convertByFormat();
        return (string)$this->getFullName();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->toString();
    }

}