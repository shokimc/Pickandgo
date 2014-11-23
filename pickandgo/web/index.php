<?php
// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\DBAL\Schema\Table;

$app = new Silex\Application();

$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'dbname' => 'pickandgo',
	'user' => 'root',
	'password' => 'root',
	'host' => 'localhost',
	'driver' => 'pdo_mysql',
    ),
));

$app['debug'] = true;

// Cómo usar:
// http://localhost/pickandgo/web/index.php/get_product/ndasion1
//$app->get('/get_product/{tag}', function ($tag) use ($app) {
$tag = "ndasion1";
$tag = $argv[1];
$sql = "SELECT * FROM product WHERE tag = ?";
$product = $app['db']->fetchAll($sql, array($tag));

echo $product[0]['price'];
//    	return new Response(json_encode($product), 201);
//});

exit();
$app->run();
?>
