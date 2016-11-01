
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

use PHPUnit\Framework\TestCase;
use Phunc\SplitArray;

/**
 * Test Class SplitArrayTest
 * Base Class SplitArray
 */
class SplitArrayTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $param = '';

        $object = new SplitArray($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
