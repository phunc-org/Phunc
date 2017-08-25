<textarea cols="200" rows="30">
<?php
/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 13:50
 */

require_once __DIR__ . '/vendor' . '/autoload.php';

use Phunc\Cmd\CreatePath;
use Phunc\Html;
use Phunc\Html\Body;
use Phunc\Html\Title;
use Phunc\Html\Attribute;
use Phunc\Html\Value;

new CreatePath("/");

echo (string) new Phunc\Html( new Phunc\Html\Body("Content"), new Phunc\Html\Title("Tytuł strony") );
$html = new Html( new Body( new Attribute("class", "Content")), new Value("Content"), new Title("Tytuł strony") );
?>
</textarea>

<pre>
<?php
var_dump($html);
?>
</pre>