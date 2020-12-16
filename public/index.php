<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

// Instantiate App
$app = AppFactory::create();

// Add error middleware
$app->addErrorMiddleware(true, true, true);

// Add routes
$app->get('/', function (Request $request, Response $response) {
    $response->getBody()->write('<a href="/fromage">Try /fromage</a>');
    return $response;
});

$app->get('/hello/{name}', function (Request $request, Response $response, $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");
    return $response;
});

$app->get('/fromage', function (Request $request, Response $response) {
    $fController = new \Controller\FromageController();
    $response->getBody()->write($fController->Index());
    return $response;
});

$app->get('/fromage/{id}', function (Request $request, Response $response, $args) {
    $fController = new \Controller\FromageController();
    $response->getBody()->write($fController->Show($args['id']));
    return $response;
});

$app->get('/fromage/edit/{id}', function (Request $request, Response $response, $args) {
    $fController = new \Controller\FromageController();
    $response->getBody()->write($fController->Edit($args['id']));
    return $response;
});

$app->run();