<?php
declare(strict_types = 1);
$saySomething = function(string $something){
    return $something;
};

//this only works on php 7.4 :/
//$arrowSaySomething = fn($something) => $something;

echo $saySomething("hello");
//echo $arrowSaySomething(" world");