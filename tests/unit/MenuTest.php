
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

use PHPUnit\Framework\TestCase;
use Phunc\Menu;

/**
 * Test Class MenuTest
 * Base Class Menu
 */
class MenuTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $param = '';
        $object = new Menu($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
