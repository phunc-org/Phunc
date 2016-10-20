
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

use PHPUnit\Framework\TestCase;
use Phunc\getConfigValue;

/**
 * Test Class getConfigValueTest
 * Base Class getConfigValue
 */
class getConfigValueTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $path = '';
        $name = '';
        $object = new getConfigValue($path, $name);
        $foo = true;
        $this->assertTrue($foo);
    }
}
