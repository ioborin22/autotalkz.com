<?php

function replacment($search, $replace, $text, $c){
    if($c > substr_count($text, $search)){
       return $text;
   }

    $arr = explode($search, $text);
    $result = '';
    $k = 1;
    foreach($arr as $value){
        $k == $c ? $result .= $value.$replace : $result .= $value.$search;
        $k++;
    }
    $pos = strripos($result,$search);
    $result = substr_replace($result,'', $pos, $pos + 3);
    return $result;
}

?>