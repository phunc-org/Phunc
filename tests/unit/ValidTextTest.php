
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

use PHPUnit\Framework\TestCase;
use Phunc\ValidText;

/**
 * Test Class ValidTextTest
 * Base Class ValidText
 */
class ValidTextTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $param = '';

        $object = new ValidText($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
