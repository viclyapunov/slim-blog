<?php


use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

use \Blog\Models\Post as Post;

$app = new \Slim\App;

$container = $app->getContainer();

$container['view'] = function($container) {
	$templates = __DIR__ . '/../templates/';

	$view = new Slim\Views\Twig($templates, compact('cache'));

	return $view;
};

$app->get('/', function (Request $request, Response $response, $args) {

	$dbh =  new PDO('mysql:host=localhost;dbname=slim_blog', 'homestead', 'secret');

	$statement = $dbh->prepare('select * from posts');
	$statement->execute();
	$posts = $statement->fetchAll(PDO::FETCH_CLASS, '\\Blog\\Models\\Post');

	return $this->view->render($response, 'home.twig', [
		'posts' => $posts,
	]);
});

$app->run();
