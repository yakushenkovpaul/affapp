<?php

namespace App\Library;

class Gps
{
    public static function getGPSByAddress($address)
    {
        $address = str_replace(" ", "+", $address);
        $address .= ',Germany';

        #$url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=$address";
        $url = "https://maps.googleapis.com/maps/api/geocode/json?address=" . $address . "&key=AIzaSyCTkPlXNmkTTvdC9wu9xeVPYJEuMJ5Z6GU";

        $response = file_get_contents($url);

        $json = json_decode($response, true);

        if(empty($json) || empty($json['results']) || empty($json['results'][0]))
        {
            return [];
        }

        return array ($json['results'][0]['geometry']['location']['lat'], $json['results'][0]['geometry']['location']['lng']);
    }
}