<?php
/**
 * Created by PhpStorm.
 * User: YaJun
 * Date: 2017/9/23
 * Time: 23:24
 */

function writeMsg()
{
    echo "Hello world!";
}

writeMsg();
echo "<br>";

function familyName($fname)
{
    echo $fname, " Zhang.<br>";
}

familyName("Li");
familyName("Hong");
familyName("Tao");
familyName("Xiao Mei");
familyName("Jian");

function f($fname, $year)
{
    echo "$fname Li, Born in $year. <br>";
}
f("Hong", "1975");
f("Tao", 1983);

function setHeight($h=50)
{
    echo "the height is: $h <br>";
}
setHeight();
setHeight(350);
setHeight(980);

function add($x, $y)
{
    return $x + $y;
}

echo "5 + 10 = " . add(5, 10) . "<br>";
echo "7 + 13 = " . add(7, 13) . "<br>";
echo "2 + 4 = " . add(2, 4);