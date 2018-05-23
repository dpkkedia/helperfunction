<?php
/*
* This function provides the value which falls in the certain range
*/
function stars($value){
    #Defining Arr
    $rating = 0;
    $minRange = 0;
    $maxRange = 100;
    $arrRange = array(
        '0' => '0-10',
        '1' => '11-30',
        '2' => '31-50',
        '3' => '51-70',
        '4' => '71-90',
        '5' => '91-100'
    );
    #Making value in range
    $value = $value < $minRange ? $minRange : $value ;
    $value = $value > $maxRange ?  $maxRange : $value ;
    #iterating loop
    foreach($arrRange as $arrKey => $arrValue){
        $arrRangeBreak = explode('-',$arrValue);
        $min = $arrRangeBreak[0];
        $max = $arrRangeBreak[1];
        if($value >= $min && $value <= $max) { 
            $rating = $arrKey;
            break;
        }
    }
    return $rating;
}

#function calling
echo stars(71);
?>
