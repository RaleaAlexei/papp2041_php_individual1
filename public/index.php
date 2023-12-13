<?php
require_once '../vendor/autoload.php';
use Slim\Factory\AppFactory;
use Illuminate\Database\Capsule\Manager as Capsule;
use App\Controllers\CarsController;
$capsule = new Capsule;
$capsule->addConnection(require("../config/database.php"));
$capsule->setAsGlobal();
$capsule->bootEloquent();
$app = AppFactory::create();
$app->get('/', [CarsController::class, 'index']);
$app->get('/filteredcars', [CarsController::class, 'filtered']);
$app->post('/cars', [CarsController::class, 'create']);
$app->get('/create', [CarsController::class, 'showForm']);
$app->run();
