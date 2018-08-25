<?php

function task1_hw3 ()
{
    $file = file_get_contents(__DIR__ . '/data.xml');
    $xml = new SimpleXMLElement($file);
    //print ($xml->to->attributes()->data->__toString()).PHP_EOL;
    print ($xml->PurchaseOrder->__toString()).PHP_EOL;

}

function task2_hw3 ()
{
    $array = array(1, 2, 4, 5, 6, 7);
    $file = __DIR__ . '/output.json';

    file_put_contents($file, json_encode($array));
    //$outputarray = json_decode($file);
    //$random = array_rand($outputarray);
    //$outputarray[$random] = mt_rand(9, 100);
   // $file2 = "input.json";
   // $randomdatajson = json_encode($outputarray);
   // $inputarray = json_decode($file2);
   // $result = array_diff_assoc($outputarray, $inputarray);
   // print_r($result);
}
