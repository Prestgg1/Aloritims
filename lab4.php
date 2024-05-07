<?php
$lst = array();
for ($i = 0; $i < 10; $i++) {
    $number = rand(0, 101);
    array_push($lst, $number);
}
echo "lst = ";
print_r($lst);

$f = fopen('file.txt', 'w');
$s = strval(count($lst));
fwrite($f, $s . PHP_EOL);

foreach ($lst as $value) {
    fwrite($f, $value . ' ');
}
fclose($f);

$f = fopen('file.txt', 'r+');
$s = fgets($f);
$lst2 = array();

while (!feof($f)) {
    $line = fgets($f);
    $strs = explode(' ', $line);
    foreach ($strs as $s) {
        if ($s != '') {
            array_push($lst2, intval($s));
        }
    }
}

$b = array();
foreach ($lst2 as $x) {
    if ($x > 9) {
        array_push($b, $x);
    }
}
echo '9dan Büyük Ededler: ';
print_r($b);

$sum = array_sum($b);
echo 'Cemi: ' . $sum . PHP_EOL;

$s = strval(count($b));
fwrite($f, $s . PHP_EOL);

foreach ($b as $i) {
    fwrite($f, strval($i) . ' ');
}
fclose($f);
?>
