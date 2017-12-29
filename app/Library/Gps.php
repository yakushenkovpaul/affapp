<?php

namespace App\Library;

class Gps
{
    public static function getGPSByAddress($address)
    {
        $address = str_replace(" ", "+", $address);

        $url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=$address";

        echo $url . PHP_EOL;

        $response = file_get_contents($url);

        $json = json_decode($response, true);

        if(empty($json) || empty($json['results']) || empty($json['results'][0]))
        {
            return [];
        }

        var_dump($json);
        exit;

        return array ($json['results'][0]['geometry']['location']['lat'], $json['results'][0]['geometry']['location']['lng']);
    }
}