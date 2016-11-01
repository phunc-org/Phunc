
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

use PHPUnit\Framework\TestCase;
use Phunc\ValidLanguage;

/**
 * Test Class ValidLanguageTest
 * Base Class ValidLanguage
 */
class ValidLanguageTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $param = '';

        $object = new ValidLanguage($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
