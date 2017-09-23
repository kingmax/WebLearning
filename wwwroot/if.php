<?php
/**
 * Created by PhpStorm.
 * User: YaJun
 * Date: 2017/9/23
 * Time: 23:00
 */

$t = date("H");

if ($t < 10)
{
    echo $t, "Have a good morning!";
}
elseif($t < 20)
{
    echo "Have a good day!";
}
else
{
    echo "Have a good night!";
}

$x = rand(1, 5);
echo "<br>", $x, "<br>";

switch ($x)
{
    case 1:
        echo "Number 1";
        break;
    case 2:
        echo "Number 2";
        break;
    case 3:
        echo "Number 3";
        break;
    case 4:
        echo "Number 4";
        break;
    default:
        echo "No number between 1 and 4.";
}

$a = 1;
while($a <=5)
{
    echo "the number is $a <br>";
    $a++;
}

do
{
    echo "x is $x <br>";
    $x++;
}while($x < 8);

echo "<br><br>";
do
{
    echo "$x <br>";
    $x++;
}while($x < 8);

for ($i = 0; $i<=10; $i++)
{
    echo "i is: $i <br>";
}

$cols = array('red', 'green', 'blue', 'yellow');
foreach ($cols as $value)
{
    echo $value, "<br>";
}

?>