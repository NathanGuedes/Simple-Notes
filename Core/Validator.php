<?php

namespace Core;

class Validator {

    public static function string($value, $min = 1, $max = INF): bool
    {
        $value = trim($value);
        $length = strlen($value);

        return $value >= $min && $length <= $max;
    }

    public static function email($value): bool
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}