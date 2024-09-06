<?php

function dd($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

function isURL($url)
{
    $uri = substr($_SERVER["REQUEST_URI"], 12);
    $uri = parse_url($uri)["path"];
    return $url === $uri;
}