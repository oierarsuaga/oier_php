<?php
$v= [1,5,6,99,12,11,111];
$suma = 0;
$suma2 = 0;
$suma3 = 0;
$suma4 = 0;

for ($i=0; $i < count($v) ; $i++) {
  $suma = $suma +$v[$i];
}

$x=0;
while ($x < count($v)) {
  $suma2 = $suma2 + $v[$x];
  $x++;
}

foreach ($v as $suma3) {
  $suma4 = $suma4 +$suma3;
}



echo $suma;
echo "<br>";
echo $suma2;
echo "<br>";
echo $suma4;
