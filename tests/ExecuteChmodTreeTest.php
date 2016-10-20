
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

use PHPUnit\Framework\TestCase;
use Phunc\ExecuteChmodTree;

/**
 * Test Class ExecuteChmodTreeTest
 * Base Class ExecuteChmodTree
 */
class ExecuteChmodTreeTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $param = '';
        $object = new ExecuteChmodTree($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
