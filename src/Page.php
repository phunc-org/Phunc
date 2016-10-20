<?php

/**
 *
 * Created by tom-sapletta-com
 * Date: 11.10.2016
 * Time: 09:41
 */

namespace Phunc;


/**
 * Class Page
 */
class Page
{
    public function __construct($path)
    {
    }
}


/*
 *

use TempateFrame
class Page implements hasHtml5, hasHtml, hasXml, hasJson, hasText {
	getHtml5()
		toString()
		toStream()
	getHtml()
		toString()
		toStream()
	getXml()
		toString()
	getJson()
		toString()
}

class Page implements hasHtml

$page = new Page(
	new FlatMenu(),
	new TreeMenu(),
	new TableCollection(
		new Row(),
		new Row(),
		new Row(),
	)
)

$header_menu = new FlatMenu();
$left_menu = new TreeMenu();
$footer_menu = new FlatMenu();

$page = new Page(
	$header_menu,
	$left_menu,
	new TableCollection(
		new Row(),
		new Row(),
		new Row(),
	),
	$footer_menu
)



$page->getHtml()->toStream();

 */