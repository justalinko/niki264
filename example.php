<?php
require_once 'vendor/autoload.php';
require_once 'src/Niki64.php';

$niki264 = new Niki264();

// encoding base64 with key
echo $niki264->encode('Hello World!' , 'secret');
// output : UOJuvO8aJ29yvOSk
echo PHP_EOL;
// decoding base64 with key
echo $niki264->decode('UOJuvO8aJ29yvOSk' , 'secret');
// output : Hello World!
echo PHP_EOL;

// encoding alphabet to numeric
echo $niki264->alpha2num('hello there');
// output : 961515180115961136
echo PHP_EOL;

// decoding numeric to alphabet
echo $niki264->num2alpha('961515180115961136');
// output : hello there
echo PHP_EOL;

// encoding safe mode ( to lowercase alphabet )
echo $niki264->alpha2numSafe('Hello World!'); 
// output : 961515180115961136

?>