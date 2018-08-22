<?php
function task1($string_array, $allstring = null)
{
    if ($allstring == false) {
        foreach ($string_array as &$value) {
            echo "$value" . "<p>";
        }
    }
    if ($allstring == true) {
        $string_array = implode(' ', $string_array);
        return $string_array;
    }
}

function task2($oper, $int1, $int2, $int3, $int4)
{
    $sum = $int1 + $int2 + $int3 + $int4;
    $mix_func_result = $int1 . $oper . $int2 . $oper . $int3 . $oper . $int4 . "=" . $sum;
    return $mix_func_result;
}


function task3($tablerow, $tablecol)
{
    if ((is_integer($tablerow)&&$tablerow>0)&&(is_integer($tablecol)&&$tablecol>0)) {
        echo "<table cellpadding=\"5\" border=\"1\">";
        for ($row = 0; $row <= $tablerow; $row++) {
            echo "<tr>";
            for ($col = 0; $col <= $tablecol; $col++) {
                $s = $col * $row;
                echo "<td>";
                if ($row == 0&&$col==0) {
                    echo 'X';
                    continue;
                }
                if ($row==0) {
                    echo $col;
                    continue;
                }
                if ($col==0) {
                    echo $row;
                    continue;
                }
                echo "$s";
            }
        }
        echo "</tr></table><br/>";
    } else {
        echo 'Ошибка, числа не целые';
    }
}

function task4_1()
{
    $currentdate = date("Y-m-d H:i");
    return $currentdate;
}

function task4_2()
{
    $unixtime = time("24.02.2016 00:00:00");
    return $unixtime;
}

function task5_1($string_f4)
{
    $delstring = str_replace("К", "", $string_f4);
    return $delstring;
}
function task5_2($string_f4)
{
    $replacestring = str_replace("Две", "Три", $string_f4);
    return $replacestring;
}

function task6($file)
{
    $filetext = file_get_contents($file);
    echo $filetext;
}
