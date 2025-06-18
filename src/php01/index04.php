<?php
$a = 15;
$b = 3;
$c = 10;

echo $a + $b;
echo "<br />";
echo $a - $b;
echo "<br />";
echo $a * $b;
echo "<br />";
echo $a / $b;
echo "<br />";
echo $a - $c;
echo "<br />";
?>

<?php
$a = 15;
$b = 3;
$c = 10;
$d = 5;

$answer1 = $a = $b;
$answer2 = $b *= $d;

echo $answer1;
echo "<br />";
echo $answer2;
?>

<br />

<?php
$a = 20;
$b = 5;

echo ($a > $b);
echo "<br />";
?>

<?php
$a = 20;
$b = 5;

echo ($a > 10 && $a < 30);
echo "<br />"
?>

<?php
$a = 10;
$b = 10;
$c = 5;
$d = 5;

echo ++$a;
echo "<br />";
echo $b++;
echo "<br />";
echo --$c;
echo "<br />";
echo $d--;
echo "<br />";
?>
