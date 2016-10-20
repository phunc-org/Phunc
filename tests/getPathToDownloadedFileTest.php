
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

use PHPUnit\Framework\TestCase;
use Phunc\getPathToDownloadedFile;

/**
 * Test Class getPathToDownloadedFileTest
 * Base Class getPathToDownloadedFile
 */
class getPathToDownloadedFileTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $param = '';
        $object = new getPathToDownloadedFile($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
