<?php

// 2.  Reverse a string
// $str = 'Hello, World!';
// for($i = strlen($str) - 1; $i > 0; $i-- ){
//     echo $str[$i];
// }
// ---------------------------------------------------------------------------------

// 3. REmove Duplicates from an array
// $arr = [1, 2, 3, 4, 5, 1, 2, 3];
// $newArr = [];

// create function to check the value is in array or not
// function inArray($value, $array){
//     foreach($array as $item){
//         if($item == $value){
//             return true;
//         }
//     }
//     return false;
// }

// foreach($arr as $value){
//     if(!inArray($value, $newArr)){
//         $newArr[] = $value;
//     }
// }

// print_r($newArr);

// ---------------------------------------------------------------------------------

// 4. Duplicate element Count
// $arr = [1, 2, 3, 4, 5, 1, 2, 3];
// $countArr = [];

// function InArray($value, $array){
//     foreach($array as $item){
//         if($item ==$value){
//             return true;
//         }
//     }
//     return false;
// }

// foreach($arr as $value){
//     if(InArray($value, $countArr)){
//         $countArr[$value] = $countArr[$value] + 1;
//     } else {
//         $countArr[$value] = 1;
//     }
// }
// print_r($countArr);

// ---------------------------------------------------------------------------------

// 5. Palindrome Check
// $str = 'madaam';
// $isPalindrome = true;

// $strLength = strlen($str);
// $arrayExecution = floor($strLength / 2);

// for($i = 0; $i < $arrayExecution; $i++){
//     if($str[$i] == $str[$strLength - 1 - $i]){
//         continue;
//     }else{
//         $isPalindrome = false;
//         break;
//     }
// }

// echo $isPalindrome ? 'Palindrome' : 'Not Palindrome';
// echo "\n";
// ---------------------------------------------------------------------------------

function moveZeros($arr) {
    $j = 0;

    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] != 0) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
            $j++;
        }
    }

    return $arr;
}

print_r(moveZeros([0,1,0,3,12]));
die;