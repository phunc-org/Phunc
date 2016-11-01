
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

require_once __DIR__ . DIRECTORY_SEPARATOR .DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

use PHPUnit\Framework\TestCase;
use Phunc\addDebugError;


/**
 * Test Class addDebugErrorTest
 * Base Class addDebugError
 */
class addDebugErrorTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $param = 'test';
        $object = new addDebugError($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
