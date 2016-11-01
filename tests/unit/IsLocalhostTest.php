
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

use PHPUnit\Framework\TestCase;
use Phunc\IsLocalhost;

/**
 * Test Class IsLocalhostTest
 * Base Class IsLocalhost
 */
class IsLocalhostTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $param = '';
        $object = new IsLocalhost($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
