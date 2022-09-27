<?php

require './../../vendor/autoload.php';

use Structural\Decorator\Character\FireRing;
use Structural\Decorator\Character\Mage;
use Structural\Decorator\Character\MagicSword;
use Structural\Decorator\Character\StrengthNecklace;

$decorator = new Mage();

$decorator = new FireRing($decorator);
$decorator = new FireRing($decorator);
$decorator = new StrengthNecklace($decorator);
$decorator = new MagicSword($decorator);

echo $decorator->getName();
echo "\n";

echo "Ataque = {$decorator->getAttack()}";
echo "\n";
