<?php

function task1_hw3()
{
    echo "=====Function 1=====";
    echo "<br>";

    $file = __DIR__ . '/data.xml';
    $fileXML = file_get_contents($file);
    $xml = new SimpleXMLElement($fileXML);

    echo "PURCHASE ORDER";
    echo "<br>"."<br>";
    print "Purchase Order Number: ".($xml->attributes()->PurchaseOrderNumber)." Date: ".($xml->attributes()->OrderDate);
    echo "<br>";
    echo "Order type: ";
    print ($xml->Address->attributes()->Type->__toString()).PHP_EOL;
    echo "<br>"."<br>";
    foreach ($xml->Address as $OrderAddress) {
        echo $OrderAddress->attributes()->Type." address:";
        echo "<br>";
        echo "Name: ".PHP_EOL;
        print $OrderAddress->Name;
        echo "<br>";
        echo "Address: ";
        print $OrderAddress->City.",".$OrderAddress->Street." ".$OrderAddress->State.", ".$OrderAddress->Zip.", ".$OrderAddress->Country;
        echo "<br>"."<br>";
    }
    echo "Delivery Note: ";
    print ($xml->DeliveryNotes->__toString()).PHP_EOL;
    echo "<br>"."<br>";
    echo "Items:";
    echo "<br>";
    $itemnumber = 1;
    foreach ($xml->Items->Item as $Items) {
        echo "Item ".$itemnumber.":";
        $itemnumber = $itemnumber+1;
        echo "<br>";
        echo "Part number: ".($Items->attributes()->PartNumber->__toString());
        echo "<br>";
        echo "Product Name: ".PHP_EOL;
        print $Items->ProductName;
        echo "<br>";
        echo "Quantity: ".PHP_EOL;
        print $Items->Quantity;
        echo "<br>";
        echo "USPrice: ".PHP_EOL;
        print $Items->USPrice;
        echo "<br>";
        if (isset($Items->Comment)) {
            echo "Comment: ".PHP_EOL;
            print $Items->Comment;
            echo "<br>";
        }
        if (isset($Items->ShipDate)) {
            echo "Ship Date: ".PHP_EOL;
            print $Items->ShipDate;
            echo "<br>";
        }
        echo "<br>";
    }
}

function task2_hw3()
{
    echo "=====Function 2=====";
    $array = array(
        array(1, 2, 4, 5, 6, 7),
        array(4, 5, 7, 8, 9, 5));
    $file = __DIR__ . '/output.json';
    file_put_contents($file, json_encode($array));
    $outputarray = file_get_contents($file);
    $outputarray = json_decode($outputarray);

    $original_output = $outputarray;
    //рандомно меняем число
    $randomindex = mt_rand(0, 1);
    $randomelement = array_rand($outputarray[$randomindex]);
    $outputarray[$randomindex][$randomelement] = mt_rand(9, 100);

    $file2 = __DIR__ . '/input.json';
    file_put_contents($file2, json_encode($outputarray));
    $inputarray = file_get_contents($file2);
    $inputarray = json_decode($inputarray);

    $level = count($array);
    //ищем различия
    for ($index = 0; $index < $level; $index++) {
        $result = array_diff($inputarray[$index], $original_output[$index]);
        if (empty($result)) {
            //пустой
        } else {
            echo "<br>";
            echo "Произошло следующее изменение в группе чисел номер " . ($index + 1) . " файла input.json. ";
            $keys = array_keys($result);
            foreach ($keys as $key => $searchkey) {
                $findkey = array_search($result[$searchkey], $result);
                echo "<br>";
                echo " Раньше было " . $original_output[$index][$findkey] . ", а стало " . $inputarray[$index][$findkey];
                echo "<br>";
            }

        }
    }
}

function task3_hw3()
{
    echo "=====Function 3=====";

    echo "<br>";
    $random_array = array();
    for ($i = 0; $i <= 60; $i++) {
        $random_array[$i] = rand(0, 100);
    }
    $csvfile= __DIR__.'/numbers.csv';
    $fp = fopen($csvfile, "w");
    fputcsv($fp, $random_array, ';');
    fclose($fp);
    $csvdata = str_getcsv(file_get_contents($csvfile),';');
    $csvsum = array_sum($csvdata);
    echo "<br>";
    print_r($csvsum);
    echo "<br>";
}

function task4_hw3()
{
    echo "=====Function 4=====";

    echo "<br>";
    $link = "https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json";
// $data = file_get_contents($link);
    $result1 = json_decode(file_get_contents($link), true);



    function searchkeys ($item, $key)
    {
        if ($key == "title") {
            echo "title: ".$item."<br>";
            echo "<br>";
        } elseif ($key == "pageid") {
            echo "Page id ".$item."<br>";
        }
    }
    array_walk_recursive($result1, 'searchkeys');
}

