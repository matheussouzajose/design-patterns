<?php

require __DIR__ . "/../../vendor/autoload.php";

use Behavioral\Observer\Stock\ControlPurchaseRequisitions;
use Behavioral\Observer\Stock\EmailObserver;
use Behavioral\Observer\Stock\StockControlSubject;

$stock = new StockControlSubject();
$email = new EmailObserver();
$purchase = new ControlPurchaseRequisitions();

$stock->addObserver($email);
$stock->addObserver($email);

$stock->updatedStockProduct(1, 1);
$stock->updatedStockProduct(1, 0);
