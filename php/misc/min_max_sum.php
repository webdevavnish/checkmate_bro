<?php
function miniMaxSum($arr) {
     sort($arr);
    $max = 0;
    $min = 0;
   for($i=0;$i<count($arr);$i++){
    if($i>0){
         $max += $arr[$i];
    }
    if($i<count($arr)-1){
        $min += $arr[$i];
    }
           
   }
   echo $min . " ". $max;
}

?>