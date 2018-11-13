<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor'. DIRECTORY_SEPARATOR. 'autoload.php';

class LocalizationTest extends PHPUnit_Framework_TestCase
{
    public function testObject()
    {
        $object = new \Phunc\Local\Localization();
        $this->assertInstanceOf('Phunc\Local\Localization', $object);
    }
}
