<?php
use App\Controller\HomeController;

require_once __DIR__ . '/Controller/HomeController.php';

$controller = new HomeController();

$path = $_SERVER["REQUEST_URI"];

switch ($path) {

    case "/":
        $controller->home();
        break;

    case "/sobre":
        $controller->sobre();
        break;
}
