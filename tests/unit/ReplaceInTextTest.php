
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

use PHPUnit\Framework\TestCase;
use Phunc\ReplaceInText;

/**
 * Test Class ReplaceInTextTest
 * Base Class ReplaceInText
 */
class ReplaceInTextTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $param = '';

        $object = new ReplaceInText($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
