
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
        $param = '';
        $object = new getHomePath($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
