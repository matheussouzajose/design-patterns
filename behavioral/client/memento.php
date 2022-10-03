<?php

require __DIR__ . "/../../vendor/autoload.php";

use Behavioral\Memento\Entity;
use Behavioral\Memento\Orm;

$user = new Entity;
$user->setName('Matheus');

$orm = new Orm($user);
writeIn($orm->find());

writeIn('Update name');
$orm->save('Jose');
writeIn($orm->find());

writeIn('restore with memento');
$orm->undo();
writeIn($orm->find());

writeIn('restore with memento 2');
$orm->undo();
writeIn($orm->find());

writeIn('remove entity');
$orm->delete();
writeIn($orm->find());

writeIn('restore undo with memento 3');
$orm->undo();
writeIn($orm->find());

function writeIn(string $text)
{
    echo $text . "</br>";
}
