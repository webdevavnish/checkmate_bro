<?php
//using for loop
function simpleArraySum($ar) {
   $sum = 0;
   for($i=0;$i<count($ar);$i++){
    $sum += $ar[$i];
   }
   return $sum;

}

// using recursion

function simpleArraySumrecursion($ar) {
$sum = 0;
$n = count($ar)-1;

function arraysum($n,$ar,$sum){
 if($n==0){
    $sum = $sum+$ar[$n];
    return $sum;
 }
 $sum = $sum+$ar[$n];
 $n = $n-1;
 return arraysum($n,$ar, $sum);
}
$sum = arraysum($n,$ar,$sum);
return $sum;
}

// using inbuilt function
function simpleArraySuminbuilt($ar) {
    return array_sum($ar);
}
?>