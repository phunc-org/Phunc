
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

use PHPUnit\Framework\TestCase;
use Phunc\SaveFile;

/**
 * Test Class SaveFileTest
 * Base Class SaveFile
 */
class SaveFileTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $param = '';

        $object = new SaveFile($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
