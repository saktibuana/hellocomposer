<?php
require_once "vendor/autoload.php";

$hello = new Saktibuana\Hello\Hello();
echo $hello->hello();

echo "\n";
$hiGirl = new Saktibuana\Hello\Hello('My Goddess');
echo $hiGirl->hello();