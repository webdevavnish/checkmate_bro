<?php
function diagonalDifference($arr) {
   $n = count($arr);
   $primarySum = 0;
   $secondarySum = 0;
   for($i = 0; $i < $n; $i++){
    $primarySum += $arr[$i][$i];
    $secondarySum += $arr[$i][$n-$i-1];
   }
   return abs($secondarySum - $primarySum);

}

?>