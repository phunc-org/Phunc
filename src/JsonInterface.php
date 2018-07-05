<?php

namespace Phunc;


interface JsonInterface
{
    /**
     * @return Json
     */
    public function getJson();

    /**
     * @param Json $json
     */
    public function setJson(Json $json);
}