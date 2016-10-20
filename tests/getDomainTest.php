
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

use PHPUnit\Framework\TestCase;
use Phunc\getDomain;

/**
 * Test Class getDomainTest
 * Base Class getDomain
 */
class getDomainTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $server_param = [];
        $server_param['SCRIPT_NAME'] = '';
        $object = new getDomain($server_param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
