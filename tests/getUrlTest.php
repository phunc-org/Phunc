
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
        $param = '';
        $object = new getUrl($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
