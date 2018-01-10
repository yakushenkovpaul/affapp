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
    $cmd = 'cd ' . $path . '; /usr/bin/git pull';

    /*
    exec($cmd, $result);

    print('<pre>');
    print_r($result);
    */

    $output = shell_exec($cmd);
    echo "<pre>$output</pre>";
}
else
{
    die('cant find path');
}
