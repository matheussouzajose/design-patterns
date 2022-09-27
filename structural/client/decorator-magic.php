<?php

require './../../vendor/autoload.php';

use Structural\Decorator\User;

$user = new User();
$user->setName('Matheus S. Jose');

$reflector = new ReflectionClass(User::class);
$comments = $reflector->getDocComment();

preg_match('/\@decorator\ ([0-9a-zA-Z]+)/', $comments, $matches);
if ($matches[1]) {
    $class = 'Structural\Composite\\' . $matches[1] . 'Decorator';
}

$decorator = new $class;
$decorator->setEntity($user);
var_dump($decorator->operation());
