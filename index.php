<?php
include 'ArrayList.php';
$arr = [1,2,3,4];
$arraylist = new ArrayList($arr);
//var_dump($arraylist);
$arraylist->remove(2);
echo '<pre>';
var_dump($arraylist);
echo '</pre>'.'<br>';
$arraylist->add(3);
echo '<pre>';
var_dump($arraylist);
echo '</pre>'.'<br>';

