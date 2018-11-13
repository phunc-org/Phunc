
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

use PHPUnit\Framework\TestCase;
use Phunc\CreatePath;

/**
 * Test Class ExecuteCreatePathTest
 * Base Class ExecuteCreatePath
 */
class ExecuteCreatePathTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $param = '/';
        $object = new CreatePath($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
