<?php

function task1_hw3()
{
    $file = __DIR__ . '/data.xml';
    $fileXML = file_get_contents($file);
    $xml = new SimpleXMLElement($fileXML);
    //print ($xml->to->attributes()->data->__toString()).PHP_EOL;
    print ($xml->Address->attributes()->Type->__toString()).PHP_EOL;
    echo "<br>";

}

function task2_hw3()
{
    echo "<br>";
    $array = array(1, 2, 4, 5, 6, 7);
    $file = __DIR__ . '/output.json';
    file_put_contents($file, json_encode($array));
    $outputarray = file_get_contents($file);
    $outputarray = json_decode($outputarray);
    $original_output = $outputarray;
    $random = array_rand($outputarray);
    $outputarray[$random] = mt_rand(9, 100);
    $file2 =  __DIR__ . '/input.json';
    $randomdatajson = file_put_contents($file2, json_encode($outputarray));
    $inputarray = file_get_contents($file2);
    $inputarray = json_decode($inputarray);
    $result = array_diff($inputarray, $original_output);
    echo "<br>";
    echo 'Произошло следующее изменение в файле input.json';
    echo "<br>";
    print_r($result);
    echo "<br>";
}

function task3_hw3()
{
    $random_array = array();
    for ($i = 0; $i <= 60; $i++) {
        $random_array[$i] = rand(0, 100);
    }
    $csvfile =  __DIR__ . '/numbers.csv';
    $fp = fopen($csvfile, "w");
    fputcsv($fp, $random_array, ';');
    fclose($fp);
    $csv = str_getcsv(file_get_contents($csvfile));
    $csv = array_sum($csv);
    echo "<br>";
    print_r($csv);
    echo "<br>";
}

function task4_hw3()
{
    $link = "https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json";
    $data = file_get_contents($link);
    $object = json_decode($data);
    $result = json_decode($data, true);
    var_dump($object, $result);
}
