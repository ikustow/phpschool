<html>
<body>
<table cellpadding="5" border="1">
    <?php
    for ($row = 0; $row < 11; $row++) {
        echo '<tr>';
        for ($col = 0; $col < 11; $col++) {
            $s = $col * $row;
            echo '<td>';
            if ($row == 0 && $col == 0) {
                echo 'X';
                continue;
            }
            if ($row == 0) {
                echo $col;
                continue;
            }
            if ($col == 0) {
                echo $row;
                continue;
            }
            if (($row) % 2 == 0 && ($col) % 2 == 0) {
                print "($s)"; //здесь круглые скобки
            } elseif (($row) % 2 == 0 || ($col) % 2 == 0) {
                print "$s";
            } else {
                print "[$s]";
            }
        }
    }
    ?>
</table>
</body>
</html>