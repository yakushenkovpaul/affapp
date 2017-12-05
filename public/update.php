<?php
/**
 * Created by PhpStorm.
 * User: pavelandreev
 * Date: 05.12.17
 * Time: 17:45
 */

echo 'result:' . PHP_EOL;
exit;

$path = '/var/www/html/affapp/';

if(file_exists($path))
{
    $cmd = 'sudo bash; cd ' . $path . '; /usr/bin/git pull';
    exec($cmd, $result);

    print('<pre>');
    print_r($result);
}
else
{
    die('cant find path');
}