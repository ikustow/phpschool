<?php
function task1($string, $allstring = null)
{
    if ($allstring == false) {
        foreach ($string as &$string) {
            echo "$string" . "<p>";
        }
    }
    if ($allstring == true) {
        $string = implode(' ', $string);
        return $string;
    }
}

function task2()
{
    $arg_list = func_get_args();
    $oper = array_shift($arg_list);
    $mix_string = implode($oper, $arg_list);
    $result = eval("return $mix_string;");
    $mix_func_result = $mix_string."=".$result;
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
function task5_2($string)
{
    $replacestring = str_replace("Две", "Три", $string);
    return $replacestring;
}

function task6($file)
{
    $filetext = file_get_contents($file);
    echo $filetext;
}

