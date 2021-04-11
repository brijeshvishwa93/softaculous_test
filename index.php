<?php

function generateRandStr($length) {
    $randstr = "";
    for($i = 0; $i < $length; $i++){
        $randnum = mt_rand(0,61);
        if($randnum < 36){
            $randstr .= chr($randnum+55);
            }else{
            $randstr .= chr($randnum+61);
        }
    }

    // VARIABLE NAME WAS WRONG HERE
    return strtolower($randstr);
}

$randomAlphaNum = generateRandStr(20);

echo $randomAlphaNum;

?>