<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 19.10.2016
 * Time: 16:33
 */

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Phunc\Dump;

new Dump($_SERVER);

#php tests/test.php