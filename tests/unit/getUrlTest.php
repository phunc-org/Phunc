<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

use PHPUnit\Framework\TestCase;
use Phunc\getUrl;

/**
 * Test Class getUrlTest
 * Base Class getUrl
 */
class getUrlTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $server_array = [];
/*
        $server_array['HTTP_HOST'] = null;
        $server_array['SERVER_NAME'] = null;
        $server_array['USERDOMAIN'] = null;
        $server_array['SCRIPT_NAME'] = null;
        $object = (string)new getUrl($server_array);
        $this->assertEquals('', $object);


        $server_array['HTTP_HOST'] = null;
        $server_array['SERVER_NAME'] = 'local';
        $server_array['USERDOMAIN'] = null;
        $server_array['SCRIPT_NAME'] = null;
        $object = (string)new getUrl($server_array);
        $this->assertEquals('local', $object);


        $server_array['HTTP_HOST'] = 'local';
        $server_array['SERVER_NAME'] = null;
        $server_array['USERDOMAIN'] = "GIGABYTE";
        $server_array['SCRIPT_NAME'] = null;
        $object = (string)new getUrl($server_array);

        $this->assertEquals('local', $object);


        $server_array['HTTP_HOST'] = null;
        $server_array['SERVER_NAME'] = null;
        $server_array['USERDOMAIN'] = "GIGABYTE";
        $server_array['SCRIPT_NAME'] = null;
        $object = (string)new getUrl($server_array);
*/
        $server_array['HTTP_HOST'] = 'gigabyte';
        $server_array['SERVER_NAME'] = null;
        $server_array['USERDOMAIN'] = null;
        $server_array['SCRIPT_NAME'] = '/doc.plainedit.com/cv.php';
        $object = (string)new getUrl($server_array);
        $this->assertEquals('http://gigabyte/doc.plainedit.com', $object);

//        var_dump($object);

//        var_dump($_SERVER);
//        var_dump($_SERVER['SERVER_NAME']);
//        var_dump($_SERVER['HTTP_HOST']);
//        var_dump($object);
    }
}
