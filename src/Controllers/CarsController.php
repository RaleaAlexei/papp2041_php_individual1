<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Car;

class CarsController
{
    public function index(Request $request, Response $response)
    {
        $cars = Car::all();
        include __DIR__ . "/../../views/cars.view.php";
        return $response;
    }
    public function filtered(Request $request, Response $response){
        $cars = Car::where('anul', '>', 2018)
            ->where('combustibil', '=', 'Electric')
            ->where('transmisie', '=', 'Automatic')
            ->get();
        include __DIR__ . "/../../views/cars.view.php";
        return $response;
    }
    public function showForm(Request $request, Response $response){
        include __DIR__ . "/../../views/create.view.php";
        return $response;
    }
    public function create(Request $request, Response $response)
    {
        $data = $request->getParsedBody();
        if (empty($data['brand']) || empty($data['model']) || empty($data['combustibil']) || empty($data['transmisie']) || empty($data['anul']) || empty($data['cilindri'])) {
            return $response
                ->withHeader('Location', '/')
                ->withStatus(302);
        }

        $car = new Car();
        $car->brand = $data['brand'];
        $car->model = $data['model'];
        $car->combustibil = $data['combustibil'];
        $car->transmisie = $data['transmisie'];
        $car->cilindri = $data['cilindri'];
        $car->anul = $data['anul'];
        $car->save();

        return $response
            ->withHeader('Location', '/')
            ->withStatus(302);
    }
}