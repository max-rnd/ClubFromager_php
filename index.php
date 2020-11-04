<meta name="color-scheme" content="dark">
<pre>
<?php
require_once 'vendor/autoload.php';
// require 'Model/Autoloader.php';
// \Model\Autoloader::register();

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Model\Business\Fromage;

// create a log channel
$log = new Logger('test');
$log->pushHandler(new StreamHandler(__DIR__.'/test.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');

echo "ça marche ?";