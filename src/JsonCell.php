<?php

namespace Phunc;


class JsonCell
{

    /** @var string */
    protected $json_data = '';

    /**
     * JsonCell constructor.
     * @param string $json_data
     */
    public function __construct(string $json_data)
    {
        $this->json_data = $json_data;
    }


    /**
     * @return string
     */
    public function getJsonData(): string
    {
        return $this->json_data;
    }

    /**
     * @param string $json_data
     * @return JsonCell
     */
    public function setJsonData(string $json_data): JsonCell
    {
        $this->json_data = $json_data;
        return $this;
    }


    /**
     * @return array
     */
    public function getJsonDataAsArray(): array
    {
        $tempArray = (array) json_decode($this->getJsonData());
        if (empty($tempArray)) {
            $tempArray = [];
        }
        return $tempArray;
    }


    /**
     * @param array $json_data_array
     *
     * @return JsonCell
     */
    public function setJsonDataFromArray(array $json_data_array): JsonCell
    {
        $this->setJsonData(json_encode($json_data_array));
        return $this;
    }


    /**
     * @param int $new_data
     *
     * @return $this
     */
    public function push_json(int $new_data)
    {
        if (!empty($new_data)) {
            $tempArray = $this->getJsonDataAsArray();

            // NON DUPLICATED
            if (!empty($tempArray) && ($key = array_search($new_data, $tempArray)) !== false) {
                return $this;
            }

            $tempArray[] = "$new_data";
            $this->setJsonData(json_encode($tempArray));
        }

        return $this;
    }

    /**
     * @param int $remove_data
     *
     * @return $this
     *
     * @throws \Exception
     */
    public function remove_json(int $remove_data)
    {
        $tempArray = $this->getJsonDataAsArray();

        if (empty($tempArray)) {
//            throw new \Exception('The Element is not possible to remove from Json');
            return $this;
        }

        if (($key = array_search($remove_data, $tempArray)) !== false) {
            unset($tempArray[$key]);
        }
        foreach ($tempArray as $tempdata) {
            $tempsecondArray[] = $tempdata;
        }

        if (empty($tempsecondArray)) {
//            return '';
//            throw new \Exception('$tempsecondArray is Empty');
            $json = '';
        } else {
            $json = json_encode($tempsecondArray);
        }

        $this->setJsonData($json);

        return $this;
    }

    /**
     * @return $this
     */
    public function refreshValues()
    {
        // Must be an Array
        $tempArray = $this->getJsonDataAsArray();

        if (empty($tempArray)) {
            return $this;
        }

        // Put Quota
        $this->insertQuotaForAll();


        // NON DUPLICATED
        $this->removeDuplicated();

        return $this;
    }


    // TODO find
    public function hasValue($str)
    {
        $tempArray = $this->getJsonDataAsArray();

        if (empty($tempArray)) {
            return $this;
        }


    }

    public function clean($str)
    {
        $tempArray = $this->getJsonDataAsArray();

        if (empty($tempArray)) {
            return $this;
        }


    }

    /**
     * @return $this
     */
    public function removeDuplicated()
    {
        $tempArray = $this->getJsonDataAsArray();

        if (empty($tempArray)) {
            return $this;
        }

        $tempArray = array_unique($tempArray);
        $this->setJsonDataFromArray($tempArray);

        return $this;
    }


    /**
     * @return $this
     */
    public function insertQuotaForAll()
    {
        $tempArray = $this->getJsonDataAsArray();

        if (empty($tempArray)) {
            return $this;
        }

        $tempArray = array_map(function ($str) {
            return sprintf("%s", $str);
        }, $tempArray);
        $this->setJsonDataFromArray($tempArray);

        return $this;
    }


}