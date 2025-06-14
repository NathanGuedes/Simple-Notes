<?php

namespace Core;

class App
{
    protected static $container;

    public static function setContainer(Container $container): void
    {
        static::$container = $container;
    }

    public static function container()
    {
        return static::$container;
    }

    public static function bind(string $key, callable $resolver): void
    {
        static::$container->bind($key, $resolver);
    }

    public static function resolve(string $key)
    {
        return static::$container->resolve($key);
    }
}