
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

use PHPUnit\Framework\TestCase;
use Phunc\getHomePath;

/**
 * Test Class getHomePathTest
 * Base Class getHomePath
 */
class getHomePathTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $default_lang = 'en';
        $server_param = [];
        $server_param['SCRIPT_NAME'] = '';
        $server_param['HTTP_HOST'] = '';
        $object = new getHomePath($server_param, $default_lang);
        $foo = true;
        $this->assertTrue($foo);
    }
}
