<?php
/**
 *
 * Created by tom-sapletta-com
 * Date: 19.10.2016
 * Time: 16:33
 */

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' .DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php'; // Autoload files using Composer autoload

use Phunc\Dump;
use Phunc\Protocol\Http;
use Phunc\Url;
use Phunc\Port;

$dataTest = [];
$dataTest[] = ['test'];
//new Dump($dataTest);

//$http = new \Phunc\Protocol\Http(new Url('http:\\tom.sapletta.com'), new Port(80));

$get = new \Phunc\Rest\Get(
    new Url('https://tom.sapletta.com'),
    new Port(80)
);

//new Dump($get->getFile());
new \Phunc\LoadFile($get->getFile());


# download some external file


#php tests/test.php