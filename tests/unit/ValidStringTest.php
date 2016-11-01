
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

use PHPUnit\Framework\TestCase;
use Phunc\ValidString;

/**
 * Test Class ValidStringTest
 * Base Class ValidString
 */
class ValidStringTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $param = '';

        $object = new ValidString($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
