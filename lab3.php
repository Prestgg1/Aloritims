<?php
function printList($lst) {
    foreach ($lst as $row) {
        foreach ($row as $element) {
            echo $element . "    ";
        }
        echo "\n";
    }
}

$p = 1;
$n = 4;
$m = 4;
$a = [];

for ($i = 0; $i < $n; $i++) {
    $a[] = [];
    for ($j = 0; $j < $m; $j++) {
        $a[$i][] = rand(2, 6);
    }
}

printList($a);
$b = [];
for ($i = 0; $i < count($a); $i++) {
    $cem = 0;
    for ($j = 0; $j < count($a); $j++) {
        $cem += $a[$j][$i];
    }
    $b[] = $cem;
}
print_r($b)
?>
