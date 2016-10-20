
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

use PHPUnit\Framework\TestCase;
use Phunc\valString;

/**
 * Test Class valStringTest
 * Base Class valString
 */
class valStringTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $param = '';

        $object = new valString($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
