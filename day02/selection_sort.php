<?php

$arr = [5,1,4,2];

// Selection Sort
for($i = 0; $i < count($arr) - 1; $i ++){
	$smallest = $i;
	
	// Finding the samllest value in the array by comparing the values
	for($j = $i+1;$j < count($arr); $j++){
		if($arr[$smallest] > $arr[$j]){
			$smallest = $j;
		}
	}

	$temp = $arr[$smallest];
	$arr[$smallest] = $arr[$i];
	$arr[$i] = $temp;
}

print_r($arr);
