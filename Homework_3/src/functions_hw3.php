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
    $outputarray = file_get_contents($file);
    $outputarray = json_decode($outputarray);
    $random = array_rand($outputarray);
    $outputarray[$random] = mt_rand(9, 100);
    $file2 =  __DIR__ . '/input.json';
    $randomdatajson = file_put_contents($file2, json_encode($outputarray));
    $inputarray = file_get_contents($file2);
    $inputarray = json_decode($inputarray);
    $result = array_diff($outputarray, $inputarray);
    print_r($result);
}
