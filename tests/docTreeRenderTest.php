
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

require_once __DIR__ . '../vendor' . '/autoload.php';
use PHPUnit\Framework\TestCase;
use Phunc\docTreeRender;

/**
 * Test Class docTreeRenderTest
 * Base Class docTreeRender
 */
class docTreeRenderTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $language = new ValueLanguage();
        $data = [];
        $object = new docTreeRender($language, $data);
        $foo = true;
        $this->assertTrue($foo);
    }
}
