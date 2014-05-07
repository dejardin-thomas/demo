<?php
session_start();

require __DIR__.'/config/bootstrap.php';

/* Déclaration */
if(isset($_SESSION['basket'])){
    $basket = unserialize($_SESSION['basket']);
}else{
    $basket = new Entity\Basket();
}


$log = $serviceManager->getService('log');
$date = new DateTime;
$log->info('Début '.$date->format('d/m/Y H:i:s'));

$table = new Entity\Table();
$chair = new Entity\Chair();


/* Définir la table */
$table->setId(1);
$table->setName(' ma table ');
$table->setPrice(28.99);
$log->info('initialisation de la table');

/* Définir la chaise */
$chair->setId(2);
$chair->setName(' ma chaise ');
$chair->setPrice(10);
$log->info('initialisation de la chaise');

if(rand(1, 2) % 2){
    $basket->addProduct($table);
    $log->info('ajouter une table');
}else{
    $basket->decreaseProduct($table);
    $log->info('enlever une table');
}

if(time() % 2){
    $basket->addProduct($chair);
    $log->info('ajouter une chaise');
}else{
    $basket->decreaseProduct($chair);
    $log->info('enlever une chaise');
}


echo "<pre>";
print_r($basket->getBasket());
print_r($basket->getQty());
echo "</pre>";
$log->info('fin');