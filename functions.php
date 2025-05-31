<?php

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

}

function isCurrentPage($uri)
{
    return $_SERVER['REQUEST_URI'] === $uri;
}