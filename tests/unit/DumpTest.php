
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' .DIRECTORY_SEPARATOR . '..' .DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php'; // Autoload files using Composer autoload

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
