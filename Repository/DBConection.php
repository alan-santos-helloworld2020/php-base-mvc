<?php
namespace App\Repository;

use PDOException;
use PDO;

final class DBConection{

    public function Conection(){
        $cnx=null;
        try{
        $cnx = new PDO("mysql:host=127.0.0.1:3306;dbname=banco","admin","admin@123");
        $cnx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $ex){
            var_dump($ex->getMessage());
        }
        return $cnx;

    }
}
