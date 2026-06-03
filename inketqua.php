<!DOCTYPE html>
<html>
<head>
    <title>Toán tử 3 ngôi</title>
</head>

<body>

<h2>Max Min 2 số và 3 số</h2>

<?php

$a = 10;
$b = 20;
$c = 15;


$max = ($a > $b) ? $a : $b;

$min = ($a < $b) ? $a : $b;

echo "Max 2 số = " . $max;
echo "<br>";

echo "Min 2 số = " . $min;
echo "<br><br>";



$max3so = ($a >= $b)
            ? (($a >= $c) ? $a : $c)
            : (($b >= $c) ? $b : $c);


$min3so = ($a <= $b)
            ? (($a <= $c) ? $a : $c)
            : (($b <= $c) ? $b : $c);


echo "Max 3 số = " . $max3so;
echo "<br>";

echo "Min 3 số = " . $min3so;

?>

</body>
</html>