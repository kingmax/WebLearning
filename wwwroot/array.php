<?php
/**
 * Created by PhpStorm.
 * User: YaJun
 * Date: 2017/9/23
 * Time: 23:47
 */

$cars = array('BMW', 'Beize', 'Tesla');
echo count($cars), "<br>";
foreach ($cars as $c)
{
    echo "I like $c <br>";
}

$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
$age['Jobs'] = 88;
echo "age length is " . count($age), "<br>";
foreach($age as $key => $value)
{
    echo "Key = " . $key, " Value = " . $value;
    echo "<br>";
}

echo "<br>";
#sort($cars);
rsort($cars);
$car_len = count($cars);
for($i = 0; $i<$car_len; $i++)
{
    echo "cars[$i] is $cars[$i]<br>";
}


asort($age);
var_dump($age);
echo "<br>";
ksort($age);
foreach($age as $k=>$v)
{
    echo $k, ' ', $v, '<br>';
}

arsort($age);
var_dump($age);
echo "<br>";
krsort($age);
var_dump($age);