<meta name="color-scheme" content="dark">
<pre style="font-size: 1.5em"><?php require_once 'vendor/autoload.php';

$f = new \Model\Data\daoFromage();
var_dump($f->getFromage(5));

//$c = new \Controller\FromageController();
//$c->Index();