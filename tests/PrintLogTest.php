
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

use PHPUnit\Framework\TestCase;
use Phunc\PrintLog;

/**
 * Test Class PrintLogTest
 * Base Class PrintLog
 */
class PrintLogTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $param = '';

        $object = new PrintLog($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
