<?php

namespace Core\Middleware;

class Middleware
{
    protected const array MAP = [
        'auth' => Auth::class,
        'guest' => Guest::class
    ];

    public static function resolve($key): void
    {
        if (! $key){
            return;
        }

        $middleware = static::MAP[$key] ?? false;

        if (! $middleware){
            throw new \Exception('Middleware not found');
        }

        new $middleware()->handle();

    }
}