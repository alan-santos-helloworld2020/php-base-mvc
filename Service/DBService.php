<?php

use App\Repository\DBConection;

require_once __DIR__ . 'Repository/DBConection.php';

$cnx = new DBConection();

$erroCode=$cnx->Conection()->errorCode();
$erroInfo=$cnx->Conection()->errorInfo();

echo json_encode([
    "erro_code"=>$erroCode,
    "erro_info"=>$erroInfo,
],JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);