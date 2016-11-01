
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

require_once __DIR__ . DIRECTORY_SEPARATOR .DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

use PHPUnit\Framework\TestCase;
use Phunc\addDebugInfo;

/**
 * Test Class addDebugInfoTest
 * Base Class addDebugInfo
 */
class addDebugInfoTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $param = 'test';
        $object = new addDebugInfo($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
