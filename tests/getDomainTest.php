
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
        $server_array = [];

        $server_array['HTTP_HOST'] = null;
        $server_array['SERVER_NAME'] = null;
        $server_array['USERDOMAIN'] = null;
        $object = (string)new getDomain($server_array);
        $this->assertEquals('', $object);

        $server_array['HTTP_HOST'] = null;
        $server_array['SERVER_NAME'] = 'local';
        $server_array['USERDOMAIN'] = null;
        $object = (string)new getDomain($server_array);
        $this->assertEquals('local', $object);


        $server_array['HTTP_HOST'] = 'local';
        $server_array['SERVER_NAME'] = null;
        $server_array['USERDOMAIN'] = "GIGABYTE";
        $object = (string)new getDomain($server_array);

        $this->assertEquals('local', $object);


        $server_array['HTTP_HOST'] = null;
        $server_array['SERVER_NAME'] = null;
        $server_array['USERDOMAIN'] = "GIGABYTE";
        $object = (string)new getDomain($server_array);
        $this->assertEquals('gigabyte', $object);

    }
}
