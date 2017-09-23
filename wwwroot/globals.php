<?php
/**
 * Created by PhpStorm.
 * User: YaJun
 * Date: 2017/9/24
 * Time: 0:11
 */

$x = 75;
$y = 25;

function add()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

add();
echo $z, "<br>";

echo $_SERVER['PHP_SELF'], "<br>";
echo $_SERVER['SERVER_NAME'], "<br>";
echo $_SERVER['HTTP_HOST'], "<br>";
echo $_SERVER['HTTP_REFERER'], "<br>";
echo $_SERVER['HTTP_USER_AGENT'], "<br>";
echo $_SERVER['SCRIPT_FILENAME'], "<br>";
echo $_SERVER['SCRIPT_NAME'], "<br>";

phpinfo();