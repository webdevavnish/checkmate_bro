<?php
function staircase($n) {
    for($i=0;$i<$n;$i++){
        for($k=0;$k<$n-$i-1;$k++){
            echo " ";    
        }
        for($j=0;$j<=$i;$j++){
            echo "#";    
        }
        print("\n");
       
    }

}

// it can be done shorter
function staircaseshorter($n) {
    for ($i = 1; $i <= $n; $i++) {
        echo str_repeat(" ", $n - $i) . str_repeat("#", $i) . "\n";
    }
}

// using recursion

function staircaserecur($n){
    function recur($n,$current=1){
        if($current>$n){
            return;
        }
        recur($n,$current+1);
        echo str_repeat(" ", $n - $current) . str_repeat("#", $current) . "\n";
    }
}
?>