<?php
function numrap($numra, $numri){


	$num=(50/($numra+$numri))*100;
	return $num;

}
	$numra=60;
	$numri=50;
	$tes=numrap($numra, $numri);
echo ("A percentagem de rapazes e raparigas é  ".$tes. "% " );
?>