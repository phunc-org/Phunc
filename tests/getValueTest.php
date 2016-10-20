
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

require_once __DIR__ . '../vendor' . '/autoload.php';
use PHPUnit\Framework\TestCase;
use Phunc\getValue;

/**
 * Test Class getValueTest
 * Base Class getValue
 */
class getValueTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $var = 'hello';
        $lang='en';
        $object = new getValue($var, $lang);
        $foo = true;
        $this->assertTrue($foo);
    }
}
