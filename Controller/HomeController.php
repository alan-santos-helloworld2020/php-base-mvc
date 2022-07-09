<?php 
namespace App\Controller;
final class HomeController{

    public function home(){
        include  'Views/Home.php';
    }

    public function sobre(){
        include  'Views/Sobre.php';
    }
}
