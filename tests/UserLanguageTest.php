
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

use PHPUnit\Framework\TestCase;
use Phunc\UserLanguage;

/**
 * Test Class UserLanguageTest
 * Base Class UserLanguage
 */
class UserLanguageTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $param = '';

        $object = new UserLanguage($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
