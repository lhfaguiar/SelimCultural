<?php

session_start();

require_once __DIR__ . "/lib/funcoes.php";

$__data = glob(__DIR__ . "/data/*.array.php");

foreach($__data as $__recordset){
    ob_start();
    $_SESSION['data'] = require_once $__recordset;
    ob_get_clean();
}