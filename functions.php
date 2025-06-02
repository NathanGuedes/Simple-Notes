<?php

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function isCurrentPage($uri)
{
    return $_SERVER['REQUEST_URI'] === $uri;
}

function authorize($condition, $statusCode = Response::FORBIDDEN)
{
    if (! $condition) {
        abort($statusCode);
    }
}