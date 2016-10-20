
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

use PHPUnit\Framework\TestCase;
use Phunc\Page;

/**
 * Test Class PageTest
 * Base Class Page
 */
class PageTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $param = '';
        $object = new Page($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
