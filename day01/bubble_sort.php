<?php

$arr = [5, 1, 4, 2, 8];

for($i = 0; $i < count($arr); $i++){
    for($j = 0; $j < count($arr) - 1; $j++){
        if($arr[$j] > $arr[$j+1]){
            // Start Swaping
            $temp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $temp;
        }
    }
}

print_r($arr);