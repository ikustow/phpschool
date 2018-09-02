<?php
function task1($string, $allString = null)
{
    if ($allString == false) {
        foreach ($string as &$string) {
            echo "$string" . "<p>";
        }
    }
    if ($allString == true) {
        $string = implode(' ', $string);
        return $string;
    }
}

function task2()
{
    $argList = func_get_args();
    $oper = array_shift($argList);
    $mixString = implode($oper, $argList);
    $result = eval("return $mixString;");
    $mixFuncResult = $mixString."=".$result;
    return $mixFuncResult;
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
    $currentDate = date("Y-m-d H:i");
    return $currentDate;
}

function task4_2()
{
    $unixtime = time("24.02.2016 00:00:00");
    return $unixtime;
}

function task5_1($string)
{
    $delstring = str_replace("К", "", $string);
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

