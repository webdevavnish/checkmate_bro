<?php
function birthdayCakeCandles($candles) {
    sort($candles);
    $n = count($candles);
    $count = 0;
    $highest = $candles[$n-1];
    for($i=$n-1;$i>=0;$i--){
        if($candles[$i]==$highest){
            $count++;
        }
        elseif($candles[$i]>$highest){
            $highest = $candles[$i];
        }
        else{
            break;
        }
    }
    return $count;
}

?>