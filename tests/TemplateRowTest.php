
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

require_once __DIR__ . '../vendor' . '/autoload.php';
use PHPUnit\Framework\TestCase;
use Phunc\TemplateRow;

/**
 * Test Class TemplateRowTest
 * Base Class TemplateRow
 */
class TemplateRowTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $object = new TemplateRow($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
