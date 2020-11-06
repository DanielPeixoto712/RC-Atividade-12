<?php
function parimpar($num){
	if($num%2==0){
		return true;
	}
	else
	{
		return false;
	}
}
$n = rand(1,500);
if(parimpar($n)){
	echo $n . ' É par ';
}
else{
	echo $n . ' É ímpar ';
}

