<?php 
function randCapcha($length = 5){
    $text = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $textLength = strlen($text);
    $result = '';

    for ($i=0; $i < $length; $i++) { 
        # code...
        $randIndex = rand(0, $textLength-1);
        $result .= $text[$randIndex];
    }
    return $result;
}

echo randCapcha();