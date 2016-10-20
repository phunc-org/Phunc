
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

use PHPUnit\Framework\TestCase;
use Phunc\LoadFile;

/**
 * Test Class LoadFileTest
 * Base Class LoadFile
 */
class LoadFileTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $param = '';
        $object = new LoadFile($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
