<?php
$n =1;
$x = 0.1;
$S=0;
$e=($x**$n)/$n;
while($e>=0.01){
$S+=$e;
$n+=1;
$e=-$e;
};
echo $S;
?>
