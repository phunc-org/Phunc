<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2017-08-15
 * Time: 17:08
 */

interface RestInterface
{
    public function get();
    public function post();
    public function put();
    public function delete();
}