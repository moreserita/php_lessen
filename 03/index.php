<?php
define('PI',3.141592);

$colors = array('red','blue','yellow');
$serita = ['height' => 170 ,'weight' => 66 ];
echo $colors[0]."<br>";
echo $serita['height']."<br>";
echo $serita['weight']."<br>";
echo my_func(5);


function my_func($i){
    $area = $i * $i * PI;
    return $area;
}