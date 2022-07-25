<?php
include "main.php";

use simitsdk\phpjasperxml\PHPJasperXML;
$filename = __DIR__.'/report2.jrxml';




// $config = [
//     'driver'=>'postgresql',
//     'host'=>'127.0.0.1',
//     'user'=>'postgres',
//     'pass'=>'postgres',
//     'name'=>'demo',
// ];
 $config = [
    'driver'=>'mysql',
    'host'=>'localhost',
    'user'=>'root',
    'pass'=>'',
    'name'=>'cuartosw'
 ];
// $config = [
//     'driver'=>'pdo',
//     'dsn'=>'mysql:host=127.0.0.1;dbname=demo;',
//     'user'=>'root',
//     'pass'=>'root'
// ];


$report = new PHPJasperXML();
$report->load_xml_file($filename)    
    ->setParameter(['reporttitle'=>'Database Report With Driver : '.$config['driver']])
    ->setDataSource($config)
    ->export('Pdf');
?>