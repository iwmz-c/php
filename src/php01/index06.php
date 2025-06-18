<?php
for ($i = 1; $i <= 5; $i++) {
    echo $i * 2 . '<br />';
}
?>

<?php
$count = 0;

while($count < 20) {
    $count += 1;
    echo $count . '<br />';
}
?>

<?php
$count = 0;

while ($count <= 100) {
    if($count % 3 === 0) {
        $count++;
        continue;
    }
    if($count == 20) {
        break;
    }
    echo $count . '<br />';
    $count++;
}
?>

<?php
$num = 0;

do {
    echo 'num = ' . $num . '<br />';
    $num++;
} while ($num < 3);
?>

<?php
for($a = 1; $a <= 50; $a++){
    if($a % 3 === 0 && $a % 5 === 0)
    {echo 'FizzBuzz' . '<br />';}
    elseif($a % 5 === 0)
    {echo 'Buzz' . '<br />';}
    elseif($a % 3 === 0)
    {echo 'Fizz' . '<br />';}
    else {echo $a . '<br />';}
}
?>

<?php
$a = 0;

while($a < 5) {
    if($a === 5){
        break;
    }
    echo '●●●●●' . '<br />';
    $a++;
}