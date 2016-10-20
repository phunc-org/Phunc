
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

use PHPUnit\Framework\TestCase;
use Phunc\HasRemoteServerFile;

/**
 * Test Class HasRemoteServerFileTest
 * Base Class HasRemoteServerFile
 */
class HasRemoteServerFileTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $param = '';
        $object = new HasRemoteServerFile($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
