<?php
define('Pi', 3.14);
function area($raio){
return $raio*$raio*Pi;
}

echo ("A área da circunferência é ") .area(15);