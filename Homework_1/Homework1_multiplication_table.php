<html>
<body>
<table cellpadding="5" border = "1">
    <?php
    for($i = 0; $i < 11; $i++) {
        echo'<tr>';
        for($j = 0; $j < 11; $j++)
        {
            $s=$j*$i;
            echo '<td>';
            if($i==0&&$j==0) {echo 'X';continue;}
            if($i==0) {echo $j;continue;}
            if($j==0) {echo $i;continue;}
            if(($i)%2==0&&($j)%2==0) {
                print "($s)"; //здесь круглые скобки
            }
            elseif (($i)%2!=0&&($j)%2!=0) {print "[$s]";
            }else print "$s";
        }
    }
    ?>
</table>
</body>
</html>