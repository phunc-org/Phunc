
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

use PHPUnit\Framework\TestCase;
use Phunc\Dump;

/**
 * Test Class DumpTest
 * Base Class Dump
 */
class DumpTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $param = [];
        $object = new Dump($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
