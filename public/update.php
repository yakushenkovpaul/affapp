<?php
/**
 * Created by PhpStorm.
 * User: pavelandreev
 * Date: 05.12.17
 * Time: 17:45
 */

$path = '/var/www/html/affapp/';

if(file_exists($path))
{
    $cmd = 'sudo bash; cd ' . $path . '; /usr/bin/git pull';
    $result = exec($cmd);

    print $result . PHP_EOL;
}
else
{
    die('cant find path');
}