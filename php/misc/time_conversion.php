<?php
function timeConversion($s) {
    $period = substr($s,-2);
    $time = substr($s,0,-2);
    $arr = explode(":",$time);
    $hour = $arr[0];
    if($period == "AM"){
        if($hour == "12"){
            $hour = "00";
        }
        else{
            
        }
    }
    else{
        
        if($hour == "12"){
            $hour = "12";
        }
        else{
            $hour += 12;
        }
    }
    
    $arr[0] = $hour;
    return implode(":",$arr);

}

?>