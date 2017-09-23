<?php
/**
 * Created by PhpStorm.
 * User: YaJun
 * Date: 2017/9/23
 * Time: 20:49
 */

$x = "Hello world!";
echo $x;
echo "<br>";
$x = 'Hello world!';
echo $x;

$x = 5985;
var_dump($x);

echo "<br>";
$x = -345;
var_dump($x);
echo "<br>";

$x = 0x8c;
var_dump($x);
echo "<br>";

$x = 047;
var_dump($x);
echo "<br>";

$x = 10.356;
var_dump($x);
echo "<br>";

$x = 2.4e3;
var_dump($x);
echo "<br>";

$x = 8e-5;
var_dump($x);
echo "<br>";

$b = true;
var_dump($b);
echo "<br>";

$cars = array("Volvo", "BMW", 'Teles');
var_dump($cars);
echo "<br>";

#class
class Car
{
    var $color;
    function __construct($color="green")
    {
        $this->color = $color;
    }
    function what_color()
    {
        return $this->color;
    }
}

$c = new Car();
var_dump($c);
echo "<br>";
echo $c->what_color();
$c = new Car("red");
echo "<br>";
echo $c->what_color();
echo "<br>";
var_dump($c);

echo "<br>";
$c = null;
var_dump($c);

echo "<br>";
echo strlen("Hello world!");
echo "<br>", strpos("Hello world!", "world"), "<br>";

#constance
define("Greeting", "Welcom to w3school.com.cn!");
echo Greeting, "<br>";

$a = 10;
$b = 6;
echo $a + $b, "<br>";
echo $a-$b, "<br>";
echo $a * $b, "<br>";
echo $a / $b, "<br>";
echo $a % $b, "<br>";

$x = 15;
$x %=4;
echo $x, "<br>";

$s1 = "hello";
$s2 = $s1 . " world";
echo $s2, "<br>";

$s3 = "Hello";
$s3 .= " World!";
echo $s3, "<br>";

$i = 100;
$j = "100";

var_dump($i == $j);
echo "<br>";
var_dump($i === $j);
echo "<br>";
var_dump($i != $j);
echo "<br>";
var_dump($i !== $j);
echo "<br>";

$a = 50;
$b = 90;
var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
echo "<br>";

$a1 = array("a" => "red", "b" => "green");
$a2 = array("c" => "blue", "d" => "yellow");
$a3 = $a1 + $a2;
var_dump($a3);
echo "<br>";
var_dump($a1 == $a2);
echo "<br>";
var_dump($a1 === $a2);
echo "<br>";
var_dump($a1 != $a2);
echo "<br>";
var_dump($a1 <> $a2);
echo "<br>";
var_dump($a1 !== $a2);
echo "<br>";

?>