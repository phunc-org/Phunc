
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

use PHPUnit\Framework\TestCase;
use Phunc\getServerInfo;

/**
 * Test Class getServerInfoTest
 * Base Class getServerInfo
 */
class getServerInfoTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $param = '';
        $object = new getServerInfo($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
