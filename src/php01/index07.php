<?php
function outputNumber($a)
{
  echo "引数の値は" . $a . "です";
  return;
}

outputNumber(2);
?>

<br />

<?php
function outputHello()
{
  echo "Hello world";
}

outputHello(); // ①
?>

<br />

<?php
function outputNo($i){
    echo $i;
}

outputNo(5);
?>

<br />

<?php
function point($score1, $score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    if($total > 210){
        echo $total . "なので合格です";
    } else {
        echo $total . "なので不合格です";
    }
}
echo (point(80,60,75));
?>

<br />

<?php
function triangle($base, $height)
{
    return $base * $height / 2;
}
function square($base, $height)
{
    return $base * $height;
}
function trapezoid($upper, $base, $height)
{
    return ($upper + $base) * $height / 2;
}

echo triangle(5,7) . '<br />';
echo square(5,7) . '<br />';
echo trapezoid(7,4,2) . '<br />';
?>
