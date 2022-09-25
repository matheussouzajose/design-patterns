<?php

require './../../vendor/autoload.php';

use Structural\Adapter\Ecommerce\IntegrationErp;
use Structural\Adapter\Ecommerce\IntegrationErpAdapter;
use Structural\Adapter\Ecommerce\Order;

$legacyIntegration = new IntegrationErp();

$integrationErpAdapter = new IntegrationErpAdapter($legacyIntegration);
$token = $integrationErpAdapter->generateToken('123456', 'MATHEUS_SOUZA');

$order = new Order();
$order->setTotalValue(1000.00)
    ->setNumberOrder(1)
    ->addProduct('IPhone X')
    ->addProduct('Carregador sem fio - IPhone X');

$orderSent = $integrationErpAdapter->sendOrder($order, $token);
if ($orderSent) {
    echo 'Pedido enviado com sucesso';
}

//$iterator = 20000;
//function showDates($days): array
//{
//    $saveDate = [];
//    for ($day = 1; $day < $days; $day++) {
//        $saveDate[] = date("d/m/y", strtotime("+{$day}days"));
//    }
//
//    return $saveDate;
//}

//echo "<div style='text-align: center'>";
//foreach (showDates($iterator) as $date) {
//    echo "<small class='tag'>{$date}</small>" . PHP_EOL;
//}
//echo "</div>";

//function generatorDate($days): Generator
//{
//    for ($day = 1; $day < $days; $day++) {
//        yield date("d/m/y", strtotime("+{$day}days"));
//    }
//}

//$iterator = generatorDate($iterator);
//for ($iterator->rewind(); $iterator->valid(); $iterator->next()) {
//    echo "<small class='tag'>{$iterator->current()}</small>" . PHP_EOL;
//}

//echo "<div style='text-align: center'>";
//foreach (generatorDate($iterator) as $date) {
//    echo "<small class='tag'>{$date}</small>" . PHP_EOL;
//}
//echo "</div>";
