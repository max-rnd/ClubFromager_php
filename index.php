<meta name="color-scheme" content="dark">
<pre style="font-size: 1.5em"><?php require_once 'vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Model\Business\Fromage;


$daoF = new \Model\Data\daoFromage();
var_dump($f = $daoF->getFromage(1));
echo json_encode($f);
//$arrF = $daoF->getFromageList();

/*$m = new \Model\Business\Member(array("username" => "max"));
var_dump($m);*/
