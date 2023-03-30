# NIKI264
Encoding & Decoding system merging between base64 encode with security key , and also support 2 side encoding alphabet to numeric or numeric to alphabet.

## Introduction
NIKI264 is a simple encoding and decoding system that can be used to encode and decode data. NIKI264 is a combination of base64 encoding with a security key and also support 2 side encoding alphabet to numeric or numeric to alphabet. 

## The history of NIKI264
I (justalinko) only combine videos that my friends have made about base64 encoding and decoding with a security key called iki64 (https://github.com/milio48/iki64) and nk26 (https://github.com/milio48/nk26) and then I made a simple program to encode and decode data using NIKI264.

## What's this for?
NIKI264 is a simple encoding and decoding system that can be used to encode and decode data. NIKI264 is a combination of base64 encoding with a security key and also support 2 side encoding alphabet to numeric or numeric to alphabet.
_you can using NIKI264 to encode and decode data when you want to hide your data from others , like password , email , balance, etc. in your database._

## Installation
NIKI264 is available on [Packagist](https://packagist.org/packages/justalinko/niki264) (using semantic versioning), and installation via [Composer](https://getcomposer.org/) is the recommended way to install NIKI264. Just add this line to your `composer.json` file:

```
"require": {
    "justalinko/niki264": "^1.0"
}
```
_then update repository_
```
$ composer update
```


*Or install via composer*
```
$ composer require justalinko/niki264
```



## How to use NIKI264

```
<?php
require_once 'vendor/autoload.php';

$niki264 = new justalinko\niki264\Niki264();

// encoding base64 with key
echo $niki264->encode('Hello World!' , 'secret');
// output : UOJuvO8aJ29yvOSk

// decoding base64 with key
echo $niki264->decode('UOJuvO8aJ29yvOSk' , 'secret');
// output : Hello World!

// encoding alphabet to numeric
echo $niki264->alpha2num('hello there');
// output : 961515180115961136

// decoding numeric to alphabet
echo $niki264->num2alpha('961515180115961136');
// output : hello there

// encoding safe mode ( to lowercase alphabet )
echo $niki264->alpha2numSafe('Hello World!'); 
// output : 961515180115961136

?>
```

## License
NIKI264 is licensed under the MIT License - see the LICENSE file for details

