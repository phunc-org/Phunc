
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

use PHPUnit\Framework\TestCase;
use Phunc\ExecuteCreatePath;

/**
 * Test Class ExecuteCreatePathTest
 * Base Class ExecuteCreatePath
 */
class ExecuteCreatePathTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $param = '';
        $object = new ExecuteCreatePath();
        $foo = true;
        $this->assertTrue($foo);
    }
}
