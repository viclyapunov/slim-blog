<?php


use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

$container = $app->getContainer();

$container['view'] = function($container) {
	$templates = __DIR__ . '/../templates/';

	$view = new Slim\Views\Twig($templates, compact('cache'));

	return $view;
};

$app->get('/', function (Request $request, Response $response, $args) {
	return $this->view->render($response, 'home.twig', [
		'name' => $request->getParam('name'),
	]);
});

$app->run();
