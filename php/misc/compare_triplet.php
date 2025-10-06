<?php
function compareTriplets($a, $b) {
    $asum = 0; $bsum = 0;
for($i=0;$i<3;$i++){
    if($a[$i]<$b[$i]){
        $bsum += 1;
    }
    elseif($a[$i]>$b[$i]){
        $asum += 1;
        
    }
    
}
return [$asum, $bsum];
}

?>