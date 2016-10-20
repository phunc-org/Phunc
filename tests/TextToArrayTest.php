
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

require_once __DIR__ . '../vendor' . '/autoload.php';
use PHPUnit\Framework\TestCase;
use Phunc\TextToArray;

/**
 * Test Class TextToArrayTest
 * Base Class TextToArray
 */
class TextToArrayTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $object = new TextToArray($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
