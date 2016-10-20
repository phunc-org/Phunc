
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

use PHPUnit\Framework\TestCase;
use Phunc\renderHtml;

/**
 * Test Class renderHtmlTest
 * Base Class renderHtml
 */
class renderHtmlTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $param = '';

        $object = new renderHtml($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
