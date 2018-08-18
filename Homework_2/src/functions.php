<?php

function task1($string_array, $allstring = null){
    if ($allstring = false){
        foreach ($string_array as &$value) {
           echo "$value"."<p>";
        }
    }
    if ($allstring = true){
        $string_array = implode ($string_array);
        return $string_array;
    }
}