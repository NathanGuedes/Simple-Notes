<?php

namespace Core;

class Container {

    protected array $bindings = [];

    public function bind(string $key, callable $resolver): void
    {
        $this->bindings[$key] = $resolver;
    }

    public function resolve(string $key)
    {
        if (! array_key_exists($key, $this->bindings)) {
            throw new \Exception("No binding found for key: {$key}");
        }

        return call_user_func($this->bindings[$key]);
    }
}