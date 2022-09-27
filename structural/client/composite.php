<?php

require './../../vendor/autoload.php';

use Structural\Composite\FrameworkCategory;
use Structural\Composite\LaravelCategory;
use Structural\Composite\PHPCategory;
use Structural\Composite\SolidCategory;

$php = new PHPCategory();
$solid = new SolidCategory();
$framework = new FrameworkCategory();
$laravel = new LaravelCategory();

$solid->addCategory($laravel);
$php->addCategory($framework);
$php->addCategory($solid);

function categoriesList($category, $start = '_') {
    $i = 0;
    while ($category->getCategory($i) !== null) {
        $cat = $category->getCategory($i);
        if ($category->getCategory(0) !== null) {
            categoriesList($cat, $start . '__');
        }

        echo $start . $cat->getName() . PHP_EOL;
        $i++;
    }
}

categoriesList($php);
