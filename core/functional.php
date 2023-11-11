<?php

function url(string $path) {
    $url = isset($_SERVER["HTTPS"]) ? "https" : "http";
    $url .= "://";
    $url  .= $_SERVER["HTTP_HOST"];
    if(isset($path)){
        $url .= "/";
        $url .= $path;
    }
    return $url;
 }


 function dateTime(string $timestamp , string $format = "j M Y") {
    return date($format, strtotime($timestamp));
 }

?>