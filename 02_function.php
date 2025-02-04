<?php
function myname()
{
    echo "My name is jubair";
}
myname();
echo PHP_EOL;

function fun($num1,$num2)
{
    echo $num1+$num2;
}
fun(8,9);
echo PHP_EOL;

function NAme($name="jubair")
{
    echo $name;

}

NAme();
echo "\n";
NAme("Redwan");
echo PHP_EOL;

function num($num1,$num2) {
    $sum=$num1+$num2;
    return $sum;
}
echo "value=".num(12,13);

// Conditional Statements

$cum=10;

if($cum>9 && $cum<11)
{
    echo $cum."\n";
}
// xor jekono ekta true hoilei true
if($cum>9 XOR $cum<10)
{
    echo $cum."\n";
}
$color="red";
switch($color)
{
    case "whilte":
        echo $color;
        break;
    case "orange":
        echo $color;
        break;

    case "red":
        echo $color;
        break;

}

?>