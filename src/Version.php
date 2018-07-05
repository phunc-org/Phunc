<?php

namespace Phunc;

/**
 * Class Version
 * @package Phunc
 */
class Version
{    /**
     * @param $version_1
     * @param $version_2
     *
     * @return bool
     */
    public static function compare($version_1, $version_2)
    {
        $version_1_is_bigger = (Version::toInt($version_1) >= Version::toInt($version_2));
        return $version_1_is_bigger;
    }

    /**
     * @param $version
     * @return int
     */
    public static function toInt($version)
    {
        return (int)str_replace('.', '', $version);
    }
}