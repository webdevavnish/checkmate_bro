<?php
// using recursion
// yes it can be more readable
// loop is so much easier
function plusMinus($arr) {
   $n = count($arr)-1;
   $totalNumber = count($arr);
   
    $plusCounter = 0;
    $minusCounter = 0;
    $zeroCounter = 0;
   function checkrecur($totalNumber,$arr,$n, $plusCounter, $minusCounter, $zeroCounter){
    if($n==0){
        if($arr[$n]>0){
            $plusCounter++;
        }
        elseif($arr[$n]<0){
            $minusCounter++;
        }
        else{
            $zeroCounter++;
        }
        printf("%.6f\n",$plusCounter/$totalNumber);
        printf("%.6f\n",$minusCounter/$totalNumber);
        printf("%.6f\n",$zeroCounter/$totalNumber);
         return ;
    }
    else{
     if($arr[$n]>0){
            $plusCounter++;
        }
        elseif($arr[$n]<0){
            $minusCounter++;
        }
        else{
            $zeroCounter++;
        }
        $n--;
    return checkrecur($totalNumber,$arr,$n, $plusCounter, $minusCounter, $zeroCounter);
    }
   
   }
       return checkrecur($totalNumber,$arr,$n, $plusCounter, $minusCounter, $zeroCounter);


}


// trying using binary search


?>