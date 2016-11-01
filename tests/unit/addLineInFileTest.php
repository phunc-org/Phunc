
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

require_once __DIR__ . DIRECTORY_SEPARATOR .DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

use PHPUnit\Framework\TestCase;
use Phunc\addLineInFile;

/**
 * Test Class addLineInFileTest
 * Base Class addLineInFile
 */
class addLineInFileTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $file_path = '../tmp/filetest.txt';
        $file_content = 'linetest';
        $object = new addLineInFile($file_path,$file_content);
        $foo = true;
        $this->assertTrue($foo);
    }
}
