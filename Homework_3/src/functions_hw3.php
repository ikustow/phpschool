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
    $datajson = json_encode($array);
    $file = "output.json";

    if (!file_exists($file)) {
        $fp = fopen($file, "w");
        fwrite($fp, $datajson);
        fclose($fp);
    }
    $fp = fopen($file, "w");
    $outputarray = json_decode($file);
    $random = array_rand($outputarray);
    $outputarray[$random] = mt_rand(9, 100);
    $file2 = "input.json";
    $randomdatajson = json_encode($outputarray);
    if (!file_exists($file2)) {
        $fp2 = fopen($file2, "w");
        fwrite($file2, $randomdatajson);
        fclose($fp2);
    }
    $inputarray = son_decode($file2);
    $result = array_diff_assoc($outputarray, $inputarray);
    print_r($result);
}


