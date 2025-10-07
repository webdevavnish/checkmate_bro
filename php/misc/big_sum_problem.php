<?php
//using recursion
function aVeryBigSum($ar) {
    $sum = 0;
    $n = count($ar)-1;
    function sumarray($n, $ar,$sum){
        if($n==0){
            $sum += $ar[$n];
            return $sum;
        }
         $sum += $ar[$n];
         $n--;
         return sumarray($n,$ar,$sum);
    }
  return sumarray($n,$ar,$sum);

}

?>