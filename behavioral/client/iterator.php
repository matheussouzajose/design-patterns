<?php

require __DIR__ . "/../../vendor/autoload.php";

use Behavioral\Iterator\MyIterator;

$data = [
    "one",
    "two",
    "three"
];

$iterator = new MyIterator($data);

for ($iterator->rewind(); $iterator->valid(); $iterator->next()) {
    var_dump($iterator->current(), $iterator->key());
    echo "</br>";
}

//foreach ($iterator as $key => $value) {
//    var_dump($key, $value);
//    echo "</br>";
//}
//
//while ($iterator->valid()) {
//    var_dump($iterator->current(), $iterator->key());
//    $iterator->next();
//    echo "</br>";
//}
