<meta name="color-scheme" content="dark">
<pre style="font-size: 1.5em"><?php require_once 'vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Model\Business\Fromage;

// var_dump(new Fromage());

// $log = new Logger('test');
// $log->pushHandler(new StreamHandler(__DIR__.'/test.log', Logger::WARNING));
// $log->warning('Foo');
// $log->error('Bar');

$date = new \DateTime();
echo $date->format('d/m/Y');