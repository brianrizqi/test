<?php
$n = 4;
if ($n < 2) {
    echo 'n minimal 2';
} else {
    $input = 4 * $n - 1;
    for ($i = 0; $i < $input; $i++) {
        echo '<pre>';
        for ($j = 0; $j < $input; $j++) {
            if ($j == 0 || $j == $input - 1) {
                echo '@ ';
            } else if ($i % 2 == 0) {
                if ($j == 1 && $i % 4 == 0) {
                    echo '  ';
                } else if ($i % 4 != 0 && $j == $input - 2) {
                    echo '  ';
                } else {
                    echo '@ ';
                }
            } else {
                echo '  ';
            }
        }
        echo '</pre>';
    }
}
?>
